<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OrderItem extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OrderItem";
    }

    /**
     * The identifier of the order item.
     *
     *
     * @var string
     */
    protected $orderItemNumber;

    /**
     * The delivery of the parcel related to this order or order item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ParcelDelivery
     */
    protected $orderDelivery;

    /**
     * The item ordered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem
     */
    protected $orderedItem;

    /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     *
     *
     * @var float|null
     */
    protected $orderQuantity;

    /**
     * The current status of the order item.
     *
     *
     * @var \OpenActive\Enums\OrderStatus|null
     */
    protected $orderItemStatus;

    /**
     * @return string
     */
    public function getOrderItemNumber()
    {
        return $this->orderItemNumber;
    }

    /**
     * @param string $orderItemNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderItemNumber($orderItemNumber)
    {
        $types = array(
            "string",
        );

        $orderItemNumber = self::checkTypes($orderItemNumber, $types);

        $this->orderItemNumber = $orderItemNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ParcelDelivery
     */
    public function getOrderDelivery()
    {
        return $this->orderDelivery;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ParcelDelivery $orderDelivery
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderDelivery($orderDelivery)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ParcelDelivery",
        );

        $orderDelivery = self::checkTypes($orderDelivery, $types);

        $this->orderDelivery = $orderDelivery;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "OrderItem",
        );

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
    }

    /**
     * @return float|null
     */
    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    /**
     * @param float|null $orderQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderQuantity($orderQuantity)
    {
        $types = array(
            "float",
            "null",
        );

        $orderQuantity = self::checkTypes($orderQuantity, $types);

        $this->orderQuantity = $orderQuantity;
    }

    /**
     * @return \OpenActive\Enums\OrderStatus|null
     */
    public function getOrderItemStatus()
    {
        return $this->orderItemStatus;
    }

    /**
     * @param \OpenActive\Enums\OrderStatus|null $orderItemStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderItemStatus($orderItemStatus)
    {
        $types = array(
            "\OpenActive\Enums\OrderStatus",
            "null",
        );

        $orderItemStatus = self::checkTypes($orderItemStatus, $types);

        $this->orderItemStatus = $orderItemStatus;
    }

}
