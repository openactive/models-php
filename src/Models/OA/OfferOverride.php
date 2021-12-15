<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Offer, which means that any of this type's properties within schema.org may also be used.
 *
 */
class OfferOverride extends \OpenActive\Models\OA\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OfferOverride";
    }

    public static function fieldList() {
        $fields = [
            "ageRange" => "ageRange",
            "ageRestriction" => "ageRestriction",
            "allowCustomerCancellationFullRefund" => "allowCustomerCancellationFullRefund",
            "eligibleEntitlementType" => "eligibleEntitlementType",
            "latestCancellationBeforeStartDate" => "latestCancellationBeforeStartDate",
            "openBookingInAdvance" => "openBookingInAdvance",
            "openBookingPrepayment" => "openBookingPrepayment",
            "validFromBeforeStartDate" => "validFromBeforeStartDate",
            "validThroughBeforeStartDate" => "validThroughBeforeStartDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [DEPRECATED: Use `ageRestriction` instead of `ageRange` within the `Offer` for cases where the `Offer` is age restricted.]
     * Indicates that an Offer is only applicable to a specific age range.
     *
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     * @deprecated This property is disinherited in this type, and must not be used.
     * @deprecated Use `ageRestriction` instead of `ageRange` within the `Offer` for cases where the `Offer` is age restricted.
     */
    protected $ageRange;

    /**
     * Indicates that an Offer can only be purchased by participants within a specific age range. Specified as a QuantitativeValue with minValue and maxValue properties. This must be displayed prominently to the user when selecting an `Offer` or before booking.
     *
     * ```json
     * "ageRestriction": {
     *   "@type": "QuantitativeValue",
     *   "minValue": 15,
     *   "maxValue": 60
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $ageRestriction;

    /**
     * Whether the opportunity can be cancelled with a full refund at any time before the `startDate`, or before the `latestCancellationBeforeStartDate` if provided.
     *
     *
     * @var bool|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $allowCustomerCancellationFullRefund;

    /**
     * Offers in open data can be marked as requiring an entitlement type via `eligibleEntitlementType`. The same Offer may be applicable to multiple entitlement types, and the Customer must have at least one matching entitlement type to qualify for the Offer.
     * Note that this property is in EARLY RELEASE AND IS SUBJECT TO CHANGE, as the [Customer Accounts proposal](https://github.com/openactive/customer-accounts) evolves.
     *
     * ```json
     * "eligibleEntitlementType": [
     *   {
     *     "@type": "Concept",
     *     "@id": "https://data.mcractive.com/openactive/entitlement-list#5e78bcbe-36db-425a-9064-bf96d09cc351",
     *     "prefLabel": "MCRactive Adult Resident",
     *     "inScheme": "https://data.mcractive.com/openactive/entitlement-list"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Concept[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $eligibleEntitlementType;

    /**
     * The duration before the startDate during which this Offer may not be cancelled, given in ISO 8601 format.
     *
     *
     * @var DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $latestCancellationBeforeStartDate;

    /**
     * Indicates whether to accept this offer, a participant must book in advance, whether they must pay on attending, or have option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "openBookingInAdvance": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $openBookingInAdvance;

    /**
     * Indicates whether to accept this offer, a participant must pay in advance, pay when attending, or have the option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "openBookingPrepayment": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $openBookingPrepayment;

    /**
     * The duration before the `startDate` for which this `Offer` is valid, given in ISO 8601 format. This is a relatively-defined equivalent of `schema:validFrom`, to allow for `Offer` inheritance.
     *
     *
     * @var DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $validFromBeforeStartDate;

    /**
     * The duration before the `startDate` after which the `Offer` is no longer valid, given in ISO 8601 format. This is a relatively-defined equivalent of `schema:validThrough`, to allow for `Offer` inheritance.
     *
     *
     * @var DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $validThroughBeforeStartDate;

    /**
     * @return \OpenActive\Models\OA\QuantitativeValue
     * @deprecated This property is disinherited in this type, and must not be used.
     * @deprecated Use `ageRestriction` instead of `ageRange` within the `Offer` for cases where the `Offer` is age restricted.
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     * @deprecated Use `ageRestriction` instead of `ageRange` within the `Offer` for cases where the `Offer` is age restricted.
     */
    public function setAgeRange($ageRange)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $ageRange = self::checkTypes($ageRange, $types);

        $this->ageRange = $ageRange;
    }

    /**
     * @return \OpenActive\Models\OA\QuantitativeValue
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getAgeRestriction()
    {
        return $this->ageRestriction;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRestriction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setAgeRestriction($ageRestriction)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $ageRestriction = self::checkTypes($ageRestriction, $types);

        $this->ageRestriction = $ageRestriction;
    }

    /**
     * @return bool|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getAllowCustomerCancellationFullRefund()
    {
        return $this->allowCustomerCancellationFullRefund;
    }

    /**
     * @param bool|null $allowCustomerCancellationFullRefund
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setAllowCustomerCancellationFullRefund($allowCustomerCancellationFullRefund)
    {
        $types = [
            "bool",
            "null",
        ];

        $allowCustomerCancellationFullRefund = self::checkTypes($allowCustomerCancellationFullRefund, $types);

        $this->allowCustomerCancellationFullRefund = $allowCustomerCancellationFullRefund;
    }

    /**
     * @return \OpenActive\Models\OA\Concept[]
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEligibleEntitlementType()
    {
        return $this->eligibleEntitlementType;
    }

    /**
     * @param \OpenActive\Models\OA\Concept[] $eligibleEntitlementType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setEligibleEntitlementType($eligibleEntitlementType)
    {
        $types = [
            "\OpenActive\Models\OA\Concept[]",
        ];

        $eligibleEntitlementType = self::checkTypes($eligibleEntitlementType, $types);

        $this->eligibleEntitlementType = $eligibleEntitlementType;
    }

    /**
     * @return DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getLatestCancellationBeforeStartDate()
    {
        return $this->latestCancellationBeforeStartDate;
    }

    /**
     * @param DateInterval|null $latestCancellationBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setLatestCancellationBeforeStartDate($latestCancellationBeforeStartDate)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $latestCancellationBeforeStartDate = self::checkTypes($latestCancellationBeforeStartDate, $types);

        $this->latestCancellationBeforeStartDate = $latestCancellationBeforeStartDate;
    }

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getOpenBookingInAdvance()
    {
        return $this->openBookingInAdvance;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $openBookingInAdvance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setOpenBookingInAdvance($openBookingInAdvance)
    {
        $types = [
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        ];

        $openBookingInAdvance = self::checkTypes($openBookingInAdvance, $types);

        $this->openBookingInAdvance = $openBookingInAdvance;
    }

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getOpenBookingPrepayment()
    {
        return $this->openBookingPrepayment;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $openBookingPrepayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setOpenBookingPrepayment($openBookingPrepayment)
    {
        $types = [
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        ];

        $openBookingPrepayment = self::checkTypes($openBookingPrepayment, $types);

        $this->openBookingPrepayment = $openBookingPrepayment;
    }

    /**
     * @return DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getValidFromBeforeStartDate()
    {
        return $this->validFromBeforeStartDate;
    }

    /**
     * @param DateInterval|null $validFromBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setValidFromBeforeStartDate($validFromBeforeStartDate)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $validFromBeforeStartDate = self::checkTypes($validFromBeforeStartDate, $types);

        $this->validFromBeforeStartDate = $validFromBeforeStartDate;
    }

    /**
     * @return DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getValidThroughBeforeStartDate()
    {
        return $this->validThroughBeforeStartDate;
    }

    /**
     * @param DateInterval|null $validThroughBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setValidThroughBeforeStartDate($validThroughBeforeStartDate)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $validThroughBeforeStartDate = self::checkTypes($validThroughBeforeStartDate, $types);

        $this->validThroughBeforeStartDate = $validThroughBeforeStartDate;
    }

}
