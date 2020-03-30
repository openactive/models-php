<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Order](https://schema.org/Order), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class OrderProposal extends \OpenActive\Models\OA\OrderQuote
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OrderProposal";
    }

    public static function fieldList() {
        $fields = [
            "orderCustomerNote" => "orderCustomerNote",
            "orderProposalStatus" => "orderProposalStatus",
            "orderRequiresApproval" => "orderRequiresApproval",
            "orderSellerNote" => "orderSellerNote",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     *
     *
     * @var string
     */
    protected $orderCustomerNote;

    /**
     *
     *
     * @var \OpenActive\Enums\OrderProposalStatus|null
     */
    protected $orderProposalStatus;

    /**
     * Whether the Booking Flow with Approval must be used to book the set of OrderItems included. must be true if any of the OrderItems require approval.
     *
     *
     * @var null|bool
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $orderRequiresApproval;

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return \OpenActive\Enums\OrderProposalStatus|null
     */
    public function getOrderProposalStatus()
    {
        return $this->orderProposalStatus;
    }

    /**
     * @param \OpenActive\Enums\OrderProposalStatus|null $orderProposalStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderProposalStatus($orderProposalStatus)
    {
        $types = array(
            "\OpenActive\Enums\OrderProposalStatus",
            "null",
        );

        $orderProposalStatus = self::checkTypes($orderProposalStatus, $types);

        $this->orderProposalStatus = $orderProposalStatus;
    }

    /**
     * @return null|bool
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getOrderRequiresApproval()
    {
        return $this->orderRequiresApproval;
    }

    /**
     * @param null|bool $orderRequiresApproval
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setOrderRequiresApproval($orderRequiresApproval)
    {
        $types = array(
            "null",
            "bool",
        );

        $orderRequiresApproval = self::checkTypes($orderRequiresApproval, $types);

        $this->orderRequiresApproval = $orderRequiresApproval;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
