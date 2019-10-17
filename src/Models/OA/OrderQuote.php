<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Order](https://schema.org/Order), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class OrderQuote extends \OpenActive\Models\OA\Order
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     */
    public function getOrderProposalVersion()
    {
        return $this->orderProposalVersion;
    }

    /**
     * @param string $orderProposalVersion
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
