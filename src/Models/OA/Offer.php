<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Offer, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Offer extends \OpenActive\Models\SchemaOrg\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Offer";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "acceptedPaymentMethod" => "acceptedPaymentMethod",
            "ageRange" => "ageRange",
            "ageRestriction" => "ageRestriction",
            "allowCustomerCancellationFullRefund" => "allowCustomerCancellationFullRefund",
            "eligibleEntitlementType" => "eligibleEntitlementType",
            "latestCancellationBeforeStartDate" => "latestCancellationBeforeStartDate",
            "openBookingFlowRequirement" => "openBookingFlowRequirement",
            "openBookingInAdvance" => "openBookingInAdvance",
            "openBookingPrepayment" => "openBookingPrepayment",
            "price" => "price",
            "priceCurrency" => "priceCurrency",
            "url" => "url",
            "validFromBeforeStartDate" => "validFromBeforeStartDate",
            "validThroughBeforeStartDate" => "validThroughBeforeStartDate",
            "partySize" => "beta:partySize",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the Offer suitable for communication to participants.
     *
     * ```json
     * "name": "Speedball winger position"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A plain text description of the Offer, which must not include HTML or other markup.
     *
     * ```json
     * "description": "Concession requirements are available at https://www.fusion-lifestyle.com/. Proof of entitlement to concession membership must be provided when you visit the centre."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Indicates the offline payment methods accepted by this provider.
     *
     * ```json
     * "acceptedPaymentMethod": [
     *   "http://purl.org/goodrelations/v1#Cash",
     *   "http://purl.org/goodrelations/v1#PaymentMethodCreditCard"
     * ]
     * ```
     *
     * @var \OpenActive\Enums\PaymentMethod[]|null
     */
    protected $acceptedPaymentMethod;

    /**
     * [DEPRECATED: Use `ageRestriction` instead of `ageRange` within the `Offer` for cases where the `Offer` is age restricted.]
     * Indicates that an Offer is only applicable to a specific age range.
     *
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
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
     */
    protected $ageRestriction;

    /**
     * Whether the opportunity can be cancelled with a full refund at any time before the `startDate`, or before the `latestCancellationBeforeStartDate` if provided.
     *
     *
     * @var bool|null
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
     */
    protected $eligibleEntitlementType;

    /**
     * The duration before the startDate during which this Offer may not be cancelled, given in ISO 8601 format.
     *
     *
     * @var DateInterval|null
     */
    protected $latestCancellationBeforeStartDate;

    /**
     * Can include  https://openactive.io/OpenBookingIntakeForm,  https://openactive.io/OpenBookingAttendeeDetails,  https://openactive.io/OpenBookingApproval,  https://openactive.io/OpenBookingNegotiation,  https://openactive.io/OpenBookingMessageExchange
     *
     *
     * @var \OpenActive\Enums\OpenBookingFlowRequirement[]|null
     */
    protected $openBookingFlowRequirement;

    /**
     * Indicates whether to accept this offer, a participant must book in advance, whether they must pay on attending, or have option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "openBookingInAdvance": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
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
     */
    protected $openBookingPrepayment;

    /**
     * The offer price of the activity.
     * This price should be specified without currency symbols and as a floating point number with two decimal places.
     * The currency of the price should be expressed in the priceCurrency field.
     * Includes or excludes tax depending on the taxMode of the seller.
     *
     * ```json
     * "price": "33"
     * ```
     *
     * @var Number|null
     */
    protected $price;

    /**
     * The currency of the price. Specified as a 3-letter ISO 4217 value. If an Offer has a zero price, then this property is not required. Otherwise the priceCurrency must be specified.
     *
     * ```json
     * "priceCurrency": "GBP"
     * ```
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * URL describing the offer
     *
     * ```json
     * "url": "http://www.rphs.org.uk/"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * The duration before the `startDate` for which this `Offer` is valid, given in ISO 8601 format. This is a relatively-defined equivalent of `schema:validFrom`, to allow for `Offer` inheritance.
     *
     *
     * @var DateInterval|null
     */
    protected $validFromBeforeStartDate;

    /**
     * The duration before the `startDate` after which the `Offer` is no longer valid, given in ISO 8601 format. This is a relatively-defined equivalent of `schema:validThrough`, to allow for `Offer` inheritance.
     *
     *
     * @var DateInterval|null
     */
    protected $validThroughBeforeStartDate;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Number of people the reservation should accommodate.
     * 
     * If you are using this property, please join the discussion at proposal [#250](https://github.com/openactive/modelling-opportunity-data/issues/250).
     *
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     */
    protected $partySize;

    /**
     * @return string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "string",
            "int",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
            "null",
        ];

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = [
            "string",
        ];

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return \OpenActive\Enums\PaymentMethod[]|null
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * @param \OpenActive\Enums\PaymentMethod[]|null $acceptedPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $types = [
            "\OpenActive\Enums\PaymentMethod[]",
            "null",
        ];

        $acceptedPaymentMethod = self::checkTypes($acceptedPaymentMethod, $types);

        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }

    /**
     * @return \OpenActive\Models\OA\QuantitativeValue
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
     */
    public function getAgeRestriction()
    {
        return $this->ageRestriction;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRestriction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     */
    public function getAllowCustomerCancellationFullRefund()
    {
        return $this->allowCustomerCancellationFullRefund;
    }

    /**
     * @param bool|null $allowCustomerCancellationFullRefund
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     */
    public function getEligibleEntitlementType()
    {
        return $this->eligibleEntitlementType;
    }

    /**
     * @param \OpenActive\Models\OA\Concept[] $eligibleEntitlementType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     */
    public function getLatestCancellationBeforeStartDate()
    {
        return $this->latestCancellationBeforeStartDate;
    }

    /**
     * @param DateInterval|null $latestCancellationBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return \OpenActive\Enums\OpenBookingFlowRequirement[]|null
     */
    public function getOpenBookingFlowRequirement()
    {
        return $this->openBookingFlowRequirement;
    }

    /**
     * @param \OpenActive\Enums\OpenBookingFlowRequirement[]|null $openBookingFlowRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpenBookingFlowRequirement($openBookingFlowRequirement)
    {
        $types = [
            "\OpenActive\Enums\OpenBookingFlowRequirement[]",
            "null",
        ];

        $openBookingFlowRequirement = self::checkTypes($openBookingFlowRequirement, $types);

        $this->openBookingFlowRequirement = $openBookingFlowRequirement;
    }

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     */
    public function getOpenBookingInAdvance()
    {
        return $this->openBookingInAdvance;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $openBookingInAdvance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     */
    public function getOpenBookingPrepayment()
    {
        return $this->openBookingPrepayment;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $openBookingPrepayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return Number|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Number|null $price
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrice($price)
    {
        $types = [
            "Number",
            "null",
        ];

        $price = self::checkTypes($price, $types);

        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceCurrency($priceCurrency)
    {
        $types = [
            "string",
        ];

        $priceCurrency = self::checkTypes($priceCurrency, $types);

        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

    /**
     * @return DateInterval|null
     */
    public function getValidFromBeforeStartDate()
    {
        return $this->validFromBeforeStartDate;
    }

    /**
     * @param DateInterval|null $validFromBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     */
    public function getValidThroughBeforeStartDate()
    {
        return $this->validThroughBeforeStartDate;
    }

    /**
     * @param DateInterval|null $validThroughBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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

    /**
     * @return \OpenActive\Models\OA\QuantitativeValue
     */
    public function getPartySize()
    {
        return $this->partySize;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $partySize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartySize($partySize)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $partySize = self::checkTypes($partySize, $types);

        $this->partySize = $partySize;
    }

}
