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

    public static function fieldList() {
        $fields = [
            "orderDelivery" => "orderDelivery",
            "orderItemStatus" => "orderItemStatus",
            "orderQuantity" => "orderQuantity",
            "orderItemNumber" => "orderItemNumber",
            "orderedItem" => "orderedItem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The delivery of the parcel related to this order or order item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ParcelDelivery|string
     */
    protected $orderDelivery;

    /**
     * The current status of the order item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OrderStatus|string
     */
    protected $orderItemStatus;

    /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     *
     *
     * @var Number|null
     */
    protected $orderQuantity;

    /**
     * The identifier of the order item.
     *
     *
     * @var string
     */
    protected $orderItemNumber;

    /**
     * The item ordered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product|string
     */
    protected $orderedItem;

    /**
     * @return \OpenActive\Models\SchemaOrg\ParcelDelivery|string
     */
    public function getOrderDelivery()
    {
        return $this->orderDelivery;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ParcelDelivery|string $orderDelivery
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderDelivery($orderDelivery)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ParcelDelivery",
            "string",
        ];

        $orderDelivery = self::checkTypes($orderDelivery, $types);

        $this->orderDelivery = $orderDelivery;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OrderStatus|string
     */
    public function getOrderItemStatus()
    {
        return $this->orderItemStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OrderStatus|string $orderItemStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderItemStatus($orderItemStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OrderStatus",
            "string",
        ];

        $orderItemStatus = self::checkTypes($orderItemStatus, $types);

        $this->orderItemStatus = $orderItemStatus;
    }

    /**
     * @return Number|null
     */
    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    /**
     * @param Number|null $orderQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderQuantity($orderQuantity)
    {
        $types = [
            "Number",
            "null",
        ];

        $orderQuantity = self::checkTypes($orderQuantity, $types);

        $this->orderQuantity = $orderQuantity;
    }

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
        $types = [
            "string",
        ];

        $orderItemNumber = self::checkTypes($orderItemNumber, $types);

        $this->orderItemNumber = $orderItemNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product|string
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product|string $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\OrderItem",
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
    }

}
