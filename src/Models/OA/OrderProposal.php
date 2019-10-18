<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Order](https://schema.org/Order), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class OrderProposal extends \OpenActive\Models\OA\OrderQuote
{
    /**
     *
     *
     * @var string
     */
    protected $orderCustomerNote;

    /**
     *
     *
     * @var OrderProposalStatus|null
     */
    protected $orderProposalStatus;

    /**
     *
     *
     * @var string
     */
    protected $orderSellerNote;

    /**
     * @return string
     */
    public function getOrderCustomerNote()
    {
        return $this->orderCustomerNote;
    }

    /**
     * @param string $orderCustomerNote
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderCustomerNote($orderCustomerNote)
    {
        $types = array(
            "string",
        );

        $orderCustomerNote = self::checkTypes($orderCustomerNote, $types);

        $this->orderCustomerNote = $orderCustomerNote;
    }

    /**
     * @return OrderProposalStatus|null
     */
    public function getOrderProposalStatus()
    {
        return $this->orderProposalStatus;
    }

    /**
     * @param OrderProposalStatus|null $orderProposalStatus
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderProposalStatus($orderProposalStatus)
    {
        $types = array(
            "OrderProposalStatus",
            "null",
        );

        $orderProposalStatus = self::checkTypes($orderProposalStatus, $types);

        $this->orderProposalStatus = $orderProposalStatus;
    }

    /**
     * @return string
     */
    public function getOrderSellerNote()
    {
        return $this->orderSellerNote;
    }

    /**
     * @param string $orderSellerNote
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderSellerNote($orderSellerNote)
    {
        $types = array(
            "string",
        );

        $orderSellerNote = self::checkTypes($orderSellerNote, $types);

        $this->orderSellerNote = $orderSellerNote;
    }

}
