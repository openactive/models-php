<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Order](https://schema.org/Order), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class OrderQuote extends \OpenActive\Models\OA\Order
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OrderQuote";
    }

    public static function fieldList() {
        $fields = [
            "lease" => "lease",
            "orderRequiresApproval" => "orderRequiresApproval",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The Lease on the OrderItems which lasts for the duration specified by the Booking System.
     *
     *
     * @var \OpenActive\Models\OA\Lease
     */
    protected $lease;

    /**
     * Whether the Booking Flow with Approval must be used to book the set of OrderItems included. must be true if any of the OrderItems require approval.
     *
     *
     * @var bool|null
     */
    protected $orderRequiresApproval;

    /**
     * @return \OpenActive\Models\OA\Lease
     */
    public function getLease()
    {
        return $this->lease;
    }

    /**
     * @param \OpenActive\Models\OA\Lease $lease
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLease($lease)
    {
        $types = [
            "\OpenActive\Models\OA\Lease",
        ];

        $lease = self::checkTypes($lease, $types);

        $this->lease = $lease;
    }

    /**
     * @return bool|null
     */
    public function getOrderRequiresApproval()
    {
        return $this->orderRequiresApproval;
    }

    /**
     * @param bool|null $orderRequiresApproval
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderRequiresApproval($orderRequiresApproval)
    {
        $types = [
            "bool",
            "null",
        ];

        $orderRequiresApproval = self::checkTypes($orderRequiresApproval, $types);

        $this->orderRequiresApproval = $orderRequiresApproval;
    }

}
