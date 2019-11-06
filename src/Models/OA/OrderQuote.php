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

    /**
     * The Lease on the OrderItems which lasts for the duration specified by the Booking System.
     *
     *
     * @var Lease
     */
    protected $lease;

    /**
     * The unique URL representing this version of the  OrderProposal, or the version of the OrderProposal to which this Order is related.
     *
     *
     * @var string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $orderProposalVersion;

    /**
     * Whether the Booking Flow with Approval must be used to book the set of OrderItems included. must be true if any of the OrderItems require approval.
     *
     *
     * @var bool|null
     */
    protected $orderRequiresApproval;

    /**
     * The payment associated with the Order by the Broker. It is required for cases where a payment has been taken.
     *
     *
     * @var Payment
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $payment;

    /**
     * @return Lease
     */
    public function getLease()
    {
        return $this->lease;
    }

    /**
     * @param Lease $lease
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLease($lease)
    {
        $types = array(
            "Lease",
        );

        $lease = self::checkTypes($lease, $types);

        $this->lease = $lease;
    }

    /**
     * @return string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getOrderProposalVersion()
    {
        return $this->orderProposalVersion;
    }

    /**
     * @param string $orderProposalVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setOrderProposalVersion($orderProposalVersion)
    {
        $types = array(
            "string",
        );

        $orderProposalVersion = self::checkTypes($orderProposalVersion, $types);

        $this->orderProposalVersion = $orderProposalVersion;
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
        $types = array(
            "bool",
            "null",
        );

        $orderRequiresApproval = self::checkTypes($orderRequiresApproval, $types);

        $this->orderRequiresApproval = $orderRequiresApproval;
    }

    /**
     * @return Payment
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setPayment($payment)
    {
        $types = array(
            "Payment",
        );

        $payment = self::checkTypes($payment, $types);

        $this->payment = $payment;
    }

}
