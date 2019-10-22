<?php

namespace OpenActive\Rpde;

use OpenActive\BaseModel;
use OpenActive\Contracts\SerializerInterface;
use OpenActive\Contracts\TypeCheckerInterface;
use OpenActive\Helpers\Str;
use OpenActive\Helpers\JsonLd as JsonLdHelper;
use OpenActive\Concerns\TypeChecker;

class RpdeBody implements SerializerInterface, TypeCheckerInterface
{
    use TypeChecker;

    /**
     * The default value for the license.
     *
     * @var string
     */
    protected static $default_license = "https://creativecommons.org/licenses/by/4.0/";

    /**
     * @var string
     */
    protected $next;

    /**
     * @var \OpenActive\Rpde\RpdeItem[]
     */
    protected $items;

    /**
     * @var string
     */
    protected $license;

    /**
     * Create a new RPDE body instance.
     *
     * @param array $data
     * @return void
     */
    private function __construct($data)
    {
        foreach ($data as $key => $value) {
            // Make sure setter is cased properly
            $methodName = "set" . Str::pascal($key);

            if(method_exists($this, $methodName) === TRUE) {
                $this->$methodName($value);
            }
        }
    }

    /**
     * @param string $feedBaseUrl
     * @param string $modified
     * @param string $id
     * @param array $items
     * @return self
     * @throws \Exception If on or more of the provided arguments are not of a supported type.
     */
    public static function createFromModifiedId(
        $feedBaseUrl,
        $modified,
        $id,
        $items
    )
    {
        // If the items provided are not valid,
        // An exception will be thrown,
        // We don't implement any further type checks on $items after this
        $rpdeBody = new self([
            "items" => $items,
            "license" => static::$default_license,
        ]);

        // If there is at least one item, run validation on items array
        if (count($items) > 0) {
            $firstItem = $items[0];

            // Checks that the afterId and afterTimestamp provided are not the
            // first item in the feed (helps detect whether query is correct)
            if (
                $firstItem->getModified() === $modified &&
                $firstItem->getId() === $id
            ) {
                throw new \Exception(
                    "First item in the feed must never have same 'modified' ".
                    "and 'id' as afterTimestamp and afterId query parameters. ".
                    "Please check the RPDE specification and ensure you are ".
                    "using the correct query for your ordering strategy."
                );
            }

            // Check that items are ordered, and deleted items contain no data
            $currentModified = -1;
            $currentId = $firstItem->getId();
            foreach ($items as $item) {
                $itemState = $item->getState();
                $itemModified = $item->getModified();
                $itemId = $item->getId();
                if (
                    $itemState === RpdeState::DELETED &&
                    $item->getData() !== null
                ) {
                    throw new \Exception("Deleted items must not contain data.");
                }

                if (
                    $itemState === null ||
                    $item->getKind() === null ||
                    $itemModified === null ||
                    $itemId == null
                ) {
                    throw new \Exception(
                        "All RPDE feed items must include id, modified, state, ".
                        "and kind."
                    );
                }

                if (
                    $itemModified > $currentModified ||
                    (
                        $itemModified === $currentModified &&
                        $itemId > $currentId
                    )
                ) {
                    $currentModified = $itemModified;
                    $currentId = $itemId;
                } else {
                    throw new \Exception(
                        "Items must be ordered first by 'modified', ".
                        "then by 'id'. Please check the RPDE specification ".
                        "and ensure you are using the correct query for ".
                        "your ordering strategy."
                    );
                }
            }

            // Create 'next' URL depending on whether there are items available
            $lastItemIdx = count($items) - 1;
            $lastItem = $items[$lastItemIdx];
            $rpdeBody->setNext(
                $feedBaseUrl.
                "?afterTimestamp=".rawurlencode($lastItem->getModified()).
                "&afterId=".rawurlencode($lastItem->getId())
            );
        } else {
            // Set "next" value

            // Last page, use existing values
            if ($modified !== null && $id !== null) {
                $rpdeBody->setNext(
                    $feedBaseUrl.
                    "?afterTimestamp=".rawurlencode($modified).
                    "&afterId=".rawurlencode($id)
                );
            } else {
                // No items, use feed base URL
                $rpdeBody->setNext($feedBaseUrl);
            }
        }

        return $rpdeBody;
    }

    /**
     * @param string
     * @param string
     * @param array
     * @return self
     * @throws \Exception If on or more of the provided arguments are not of a supported type.
     */
    public static function createFromNextChangeNumber(
        $feedBaseUrl,
        $changeNumber,
        $items
    )
    {
        // If the items provided are not valid,
        // An exception will be thrown,
        // We don't implement any further check on $items after this
        $rpdeBody = new self([
            "items" => $items,
        ]);

        // If there is at least one item, run validation on items array
        if (count($items) > 0) {
            $firstItem = $items[0];

            // Checks that the afterChangeNumber provided are not the
            // first item in the feed (helps detect whether query is correct)
            if ($firstItem->getModified() === $changeNumber) {
                throw new \Exception(
                    "First item in the feed must never have same 'modified' ".
                    "as afterChangeNumber query parameter. Please check ".
                    "the RPDE specification and ensure you are using ".
                    "the correct query for your ordering strategy."
                );
            }

            // Check that items are ordered
            $currentChangeNumber = -1;
            foreach ($items as $item) {
                if (
                    $item->getState() === RpdeState::DELETED &&
                    $item->getData() !== null
                ) {
                    throw new \Exception("Deleted items must not contain data.");
                }

                if (
                    $item->getState() === null ||
                    $item->getKind() === null ||
                    $item->getModified() === null ||
                    $item->getId() === null
                )
                {
                    throw new \Exception(
                        "All RPDE feed items must include id, modified, state, ".
                        "and kind."
                    );
                }

                if ($item->getModified() > $currentChangeNumber) {
                    $currentChangeNumber = $item->getModified();
                } else {
                    throw new \Exception(
                        "Items must be ordered by 'modified'. Please check ".
                        "the RPDE specification and ensure you are using ".
                        "the correct query for your ordering strategy."
                    );
                }
            }

            // Create 'next' URL depending on whether there are items available
            $lastItemIdx = count($items) - 1;
            $lastItem = $items[$lastItemIdx];
            $rpdeBody->setNext(
                $feedBaseUrl.
                "?afterChangeNumber=".rawurlencode($lastItem->getModified())
            );
        } else {
            if ($changeNumber !== null) {
                // Last page, use existing values
                $rpdeBody->setNext(
                    $feedBaseUrl.
                    "?afterChangeNumber=".rawurlencode($changeNumber)
                );
            } else {
                // No items, use feed base URL
                $rpdeBody->setNext($feedBaseUrl);
            }
        }

        return $rpdeBody;
    }

    /**
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param string
     * @return void
     */
    public function setNext($next)
    {
        $types = array(
            "string",
        );

        $next = self::checkTypes($next, $types);

        $this->next = $next;
    }

    /**
     * @return \OpenActive\Rpde\RpdeItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \OpenActive\Rpde\RpdeItem[]
     * @return void
     */
    public function setItems($items)
    {
        $types = array(
            "\OpenActive\Rpde\RpdeItem[]",
        );

        $items = self::checkTypes($items, $types);

        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string
     * @return void
     */
    public function setLicense($license)
    {
        $types = array(
            "string",
        );

        $license = self::checkTypes($license, $types);

        $this->license = $license;
    }

    /**
     * Returns the JSON-LD representation of the given instance.
     *
     * @param object $obj The given instance to convert to JSON-LD
     * @return string JSON-LD string representation of the given instance.
     */
    public static function serialize($obj)
    {
        $data = JsonLdHelper::prepareDataForSerialization($obj);

        $json = json_encode($data);

        return JsonLdHelper::removeAllButFirstContext($json);
    }

    /**
     * Returns an object from a given JSON-LD representation.
     *
     * @param string|array If a string is provided, we attempt JSON-decoding first
     * @return object
     */
    public static function deserialize($data)
    {
        // If a string is provided, we attempt JSON-decoding first
        if(is_string($data)) {
            $data = json_decode($data, true);
        }

        $class = get_called_class();
        $self = new $class([]);

        // If data provided is not an array, return an empty class
        if(is_array($data) === FALSE) {
            return $self;
        }

        foreach ($data as $key => $value) {
            $attrName = Str::camel($key);
            $setterName = "set" . Str::pascal($key);

            if (is_object($value)) {
                $self->$attrName = $value::deserialize($value);
            } else if (is_array($value)) {
                $self->$attrName = static::deserializeValue($value);
            } else if($key !== "@context" && $key !== "type") {
                // Calling the setter will type-enforce it
                $self->$setterName($value);
            }
        }

        return $self;
    }
}
