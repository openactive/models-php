<?php

namespace OpenActive\Models\OA;

/**
 * 
 * EARLY RELEASE NOTICE: This class represents a draft that is designed to inform the OpenActive specification work with implementation feedback. IT IS STILL SUBJECT TO CHANGE, as the [Customer Accounts proposal](https://github.com/openactive/customer-accounts) evolves.
 * 
 * This type is derived from https://schema.org/Thing, which means that any of this type's properties within schema.org may also be used.
 *
 */
class CustomerAccount extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "CustomerAccount";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "accessPass" => "accessPass",
            "accountNumber" => "accountNumber",
            "customer" => "customer",
            "entitlement" => "entitlement",
            "hasHiddenEntitlements" => "hasHiddenEntitlements",
            "outstandingAction" => "outstandingAction",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The identifier of the Customer Account used by the Booking System.
     *
     * ```json
     * "identifier": "fdc14503-275e-46d3-9922-45b986c9f9aa"
     * ```
     *
     * @var string
     */
    protected $identifier;

    /**
     * The barcode, QR code, magnetic stripe, or swipe card associated with this Customer Account, within their own namespaces.
     *
     *
     * @var \OpenActive\Models\OA\Barcode[]
     */
    protected $accessPass;

    /**
     * The customer-facing identifier for the Customer Account.
     *
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * The person or organization to whom this Customer Account belongs.
     *
     *
     * @var \OpenActive\Models\OA\Organization|\OpenActive\Models\OA\Person
     */
    protected $customer;

    /**
     * The current valid and active entitlements associated with this customer. Note that expired or inactive entitlements are not included in this list.
     *
     *
     * @var \OpenActive\Models\OA\Entitlement[]
     */
    protected $entitlement;

    /**
     * Whether there are any additional entitlements (other than those listed in entitlement) or other types of discounts are associated with the Customer Account that will influence pricing, and therefore whether the pricing for the entitlement in the feed should be treated as indicative.
     *
     * ```json
     * "hasHiddenEntitlements": "true"
     * ```
     *
     * @var bool|null
     */
    protected $hasHiddenEntitlements;

    /**
     * Outstanding actions on this Customer Account, such as the resolution of outstanding debts or membership renewal. These may prevent the Customer from making bookings.
     *
     *
     * @var \OpenActive\Models\OA\Action[]
     */
    protected $outstandingAction;

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "string",
        ];

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return \OpenActive\Models\OA\Barcode[]
     */
    public function getAccessPass()
    {
        return $this->accessPass;
    }

    /**
     * @param \OpenActive\Models\OA\Barcode[] $accessPass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessPass($accessPass)
    {
        $types = [
            "\OpenActive\Models\OA\Barcode[]",
        ];

        $accessPass = self::checkTypes($accessPass, $types);

        $this->accessPass = $accessPass;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccountNumber($accountNumber)
    {
        $types = [
            "string",
        ];

        $accountNumber = self::checkTypes($accountNumber, $types);

        $this->accountNumber = $accountNumber;
    }

    /**
     * @return \OpenActive\Models\OA\Organization|\OpenActive\Models\OA\Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \OpenActive\Models\OA\Organization|\OpenActive\Models\OA\Person $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = [
            "\OpenActive\Models\OA\Organization",
            "\OpenActive\Models\OA\Person",
        ];

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
    }

    /**
     * @return \OpenActive\Models\OA\Entitlement[]
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param \OpenActive\Models\OA\Entitlement[] $entitlement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEntitlement($entitlement)
    {
        $types = [
            "\OpenActive\Models\OA\Entitlement[]",
        ];

        $entitlement = self::checkTypes($entitlement, $types);

        $this->entitlement = $entitlement;
    }

    /**
     * @return bool|null
     */
    public function getHasHiddenEntitlements()
    {
        return $this->hasHiddenEntitlements;
    }

    /**
     * @param bool|null $hasHiddenEntitlements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasHiddenEntitlements($hasHiddenEntitlements)
    {
        $types = [
            "bool",
            "null",
        ];

        $hasHiddenEntitlements = self::checkTypes($hasHiddenEntitlements, $types);

        $this->hasHiddenEntitlements = $hasHiddenEntitlements;
    }

    /**
     * @return \OpenActive\Models\OA\Action[]
     */
    public function getOutstandingAction()
    {
        return $this->outstandingAction;
    }

    /**
     * @param \OpenActive\Models\OA\Action[] $outstandingAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOutstandingAction($outstandingAction)
    {
        $types = [
            "\OpenActive\Models\OA\Action[]",
        ];

        $outstandingAction = self::checkTypes($outstandingAction, $types);

        $this->outstandingAction = $outstandingAction;
    }

}
