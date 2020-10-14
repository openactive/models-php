<?php

namespace OpenActive\Rpde;

use OpenActive\BaseModel;
use OpenActive\Concerns\Serializer;
use OpenActive\Concerns\TypeChecker;
use OpenActive\Contracts\SerializerInterface;
use OpenActive\Contracts\TypeCheckerInterface;
use OpenActive\Helpers\Str;
use OpenActive\Rpde\Exceptions\DeletedItemsDataException;
use OpenActive\Rpde\Exceptions\FirstTimeAfterChangeNumberException;
use OpenActive\Rpde\Exceptions\FirstTimeAfterTimestampAndAfterIdException;
use OpenActive\Rpde\Exceptions\IncompleteItemsDataException;
use OpenActive\Rpde\Exceptions\ModifiedIdItemsOrderException;
use OpenActive\Rpde\Exceptions\NextChangeNumbersItemsOrderException;

class RpdeBody implements SerializerInterface, TypeCheckerInterface
{
    use Serializer, TypeChecker;

    /**
     * @var string
     */
    protected $next;

    /**
     * The default value for the license.
     *
     * @var string
     */
    protected static $default_license = "https://creativecommons.org/licenses/by/4.0/";

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
            $this->defineProperty($key, $value);
        }
    }

    public static function fieldList() {
        return [
            'next' => 'next',
            'items' => 'items',
            'license' => 'license'
        ];
    }

    /**
     * Create an RpdeBody object from a given feed base URL, a modified int,
     * an id, and an array of RpdeItem.
     * Checks are performed to see if the provided "modified" and "id" attributes
     * are valid.
     *
     * @param string $feedBaseUrl
     * @param int $modified
     * @param string|int $id
     * @param \OpenActive\Rpde\RpdeItem[] $items
     * @return self
     * @throws \OpenActive\Rpde\Exceptions\FirstTimeAfterTimestampAndAfterIdException If the afterId and afterTimestamp provided are of the first item in the feed
     * @throws \OpenActive\Rpde\Exceptions\DeletedItemsDataException If any deleted items provided (if any) contain data
     * @throws \OpenActive\Rpde\Exceptions\IncompleteItemsDataException If any RPDE feed item does not include id, modified, state, or kind.
     * @throws \OpenActive\Rpde\Exceptions\ModifiedIdItemsOrderException If the feed items are not in "modified", then "id", order.
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public static function createFromModifiedId(
        $feedBaseUrl,
        $modified,
        $id,
        $items
    ) {
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
                throw new FirstTimeAfterTimestampAndAfterIdException();
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
                    throw new DeletedItemsDataException();
                }

                if (
                    $itemState === null ||
                    $item->getKind() === null ||
                    $itemModified === null ||
                    $itemId == null
                ) {
                    throw new IncompleteItemsDataException();
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
                    throw new ModifiedIdItemsOrderException();
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
     * Create an RpdeBody object from a given feed base URL, a change number int,
     * and an array of RpdeItem.
     * Checks are performed to see if the provided "changeNumber" attribute
     * is valid.
     *
     * @param string $feedBaseUrl
     * @param int $changeNumber
     * @param \OpenActive\Rpde\RpdeItem[] $items
     * @return self
     * @throws \OpenActive\Rpde\Exceptions\FirstTimeAfterChangeNumberException If the afterChangeNumber provided is the first item in the feed
     * @throws \OpenActive\Rpde\Exceptions\DeletedItemsDataException If any of the deleted items provided (if any) contain data
     * @throws \OpenActive\Rpde\Exceptions\IncompleteItemsDataException If any RPDE feed item does not include id, modified, state, or kind.
     * @throws \OpenActive\Rpde\Exceptions\NextChangeNumbersItemsOrderException If the feed items provided are not in "modified" order.
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public static function createFromNextChangeNumber(
        $feedBaseUrl,
        $changeNumber,
        $items
    ) {
        // If the items provided are not valid,
        // An exception will be thrown,
        // We don't implement any further check on $items after this
        $rpdeBody = new self([
            "items" => $items,
            "license" => static::$default_license,
        ]);

        // If there is at least one item, run validation on items array
        if (count($items) > 0) {
            $firstItem = $items[0];

            // Checks that the afterChangeNumber provided are not the
            // first item in the feed (helps detect whether query is correct)
            if ($firstItem->getModified() === $changeNumber) {
                throw new FirstTimeAfterChangeNumberException();
            }

            // Check that items are ordered
            $currentChangeNumber = -1;
            foreach ($items as $item) {
                if (
                    $item->getState() === RpdeState::DELETED &&
                    $item->getData() !== null
                ) {
                    throw new DeletedItemsDataException();
                }

                if (
                    $item->getState() === null ||
                    $item->getKind() === null ||
                    $item->getModified() === null ||
                    $item->getId() === null
                ) {
                    throw new IncompleteItemsDataException();
                }

                if ($item->getModified() > $currentChangeNumber) {
                    $currentChangeNumber = $item->getModified();
                } else {
                    throw new NextChangeNumbersItemsOrderException();
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
        $types = [
            "\OpenActive\Rpde\RpdeItem[]",
        ];

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

    public function defineProperty($key, $value)
    {
        // Ignore properties which start with @
        if ('@' === $key[0]) {
            return;
        }

        // Make sure setter is cased properly
        $methodName = "set" . Str::pascal($key);

        if (method_exists($this, $methodName) === true) {
            $this->$methodName($value);
        }
    }
}
