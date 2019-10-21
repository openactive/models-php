<?php

namespace OpenActive\Rpde;

use OpenActive\BaseModel;
use OpenActive\Contracts\SerializerInterface;
use OpenActive\Contracts\TypeCheckerInterface;
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
                        "All RPDE feed items must include id, modified, state ".
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
                $feedBaseUrl."?afterTimestamp=".$lastItem->getModified().
                "&afterId=".$lastItem->getId()
            );
        } else {
            // Set "next" value

            // Last page, use existing values
            if ($modified !== null && $id !== null) {
                $rpdeBody->setNext(
                    $feedBaseUrl."?afterTimestamp=".$modified."&afterId=".$id
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
}
