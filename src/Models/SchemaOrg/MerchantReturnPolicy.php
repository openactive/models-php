<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MerchantReturnPolicy extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MerchantReturnPolicy";
    }

    public static function fieldList() {
        $fields = [
            "additionalProperty" => "additionalProperty",
            "returnFees" => "returnFees",
            "returnPolicySeasonalOverride" => "returnPolicySeasonalOverride",
            "inStoreReturnsOffered" => "inStoreReturnsOffered",
            "itemDefectReturnFees" => "itemDefectReturnFees",
            "customerRemorseReturnLabelSource" => "customerRemorseReturnLabelSource",
            "returnMethod" => "returnMethod",
            "refundType" => "refundType",
            "validForMemberTier" => "validForMemberTier",
            "itemDefectReturnLabelSource" => "itemDefectReturnLabelSource",
            "returnPolicyCountry" => "returnPolicyCountry",
            "itemDefectReturnShippingFeesAmount" => "itemDefectReturnShippingFeesAmount",
            "returnLabelSource" => "returnLabelSource",
            "returnShippingFeesAmount" => "returnShippingFeesAmount",
            "merchantReturnLink" => "merchantReturnLink",
            "customerRemorseReturnShippingFeesAmount" => "customerRemorseReturnShippingFeesAmount",
            "customerRemorseReturnFees" => "customerRemorseReturnFees",
            "itemCondition" => "itemCondition",
            "merchantReturnDays" => "merchantReturnDays",
            "returnPolicyCategory" => "returnPolicyCategory",
            "applicableCountry" => "applicableCountry",
            "restockingFee" => "restockingFee",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $additionalProperty;

    /**
     * The type of return fees for purchased products (for any return reason).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    protected $returnFees;

    /**
     * Seasonal override of a return policy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MerchantReturnPolicySeasonalOverride|string
     */
    protected $returnPolicySeasonalOverride;

    /**
     * Are in-store returns offered? (For more advanced return methods use the [[returnMethod]] property.)
     *
     *
     * @var bool|null
     */
    protected $inStoreReturnsOffered;

    /**
     * The type of return fees for returns of defect products.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    protected $itemDefectReturnFees;

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned due to customer remorse.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null
     */
    protected $customerRemorseReturnLabelSource;

    /**
     * The type of return method offered, specified from an enumeration.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration|null
     */
    protected $returnMethod;

    /**
     * A refund type, from an enumerated list.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null
     */
    protected $refundType;

    /**
     * The membership program tier an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MemberProgramTier|string
     */
    protected $validForMemberTier;

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a defect product.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null
     */
    protected $itemDefectReturnLabelSource;

    /**
     * The country where the product has to be sent to for returns, for example "Ireland" using the [[name]] property of [[Country]]. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different from the country where the product was originally shipped from or sent to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $returnPolicyCountry;

    /**
     * Amount of shipping costs for defect product returns. Applicable when property [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $itemDefectReturnShippingFeesAmount;

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned for any reason.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null
     */
    protected $returnLabelSource;

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $returnShippingFeesAmount;

    /**
     * Specifies a Web page or service by URL, for product returns.
     *
     *
     * @var string
     */
    protected $merchantReturnLink;

    /**
     * The amount of shipping costs if a product is returned due to customer remorse. Applicable when property [[customerRemorseReturnFees]] equals [[ReturnShippingFees]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $customerRemorseReturnShippingFeesAmount;

    /**
     * The type of return fees if the product is returned due to customer remorse.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    protected $customerRemorseReturnFees;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    protected $itemCondition;

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     *
     *
     * @var Date|DateTime|int|null
     */
    protected $merchantReturnDays;

    /**
     * Specifies an applicable return policy (from an enumeration).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    protected $returnPolicyCategory;

    /**
     * A country where a particular merchant return policy applies to, for example the two-letter ISO 3166-1 alpha-2 country code.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Country
     */
    protected $applicableCountry;

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product price paid by the customer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    protected $restockingFee;

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $additionalProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    public function getReturnFees()
    {
        return $this->returnFees;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null $returnFees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnFees($returnFees)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration",
            "null",
        ];

        $returnFees = self::checkTypes($returnFees, $types);

        $this->returnFees = $returnFees;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MerchantReturnPolicySeasonalOverride|string
     */
    public function getReturnPolicySeasonalOverride()
    {
        return $this->returnPolicySeasonalOverride;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MerchantReturnPolicySeasonalOverride|string $returnPolicySeasonalOverride
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnPolicySeasonalOverride($returnPolicySeasonalOverride)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MerchantReturnPolicySeasonalOverride",
            "string",
        ];

        $returnPolicySeasonalOverride = self::checkTypes($returnPolicySeasonalOverride, $types);

        $this->returnPolicySeasonalOverride = $returnPolicySeasonalOverride;
    }

    /**
     * @return bool|null
     */
    public function getInStoreReturnsOffered()
    {
        return $this->inStoreReturnsOffered;
    }

    /**
     * @param bool|null $inStoreReturnsOffered
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInStoreReturnsOffered($inStoreReturnsOffered)
    {
        $types = [
            "bool",
            "null",
        ];

        $inStoreReturnsOffered = self::checkTypes($inStoreReturnsOffered, $types);

        $this->inStoreReturnsOffered = $inStoreReturnsOffered;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    public function getItemDefectReturnFees()
    {
        return $this->itemDefectReturnFees;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null $itemDefectReturnFees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemDefectReturnFees($itemDefectReturnFees)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration",
            "null",
        ];

        $itemDefectReturnFees = self::checkTypes($itemDefectReturnFees, $types);

        $this->itemDefectReturnFees = $itemDefectReturnFees;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null
     */
    public function getCustomerRemorseReturnLabelSource()
    {
        return $this->customerRemorseReturnLabelSource;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null $customerRemorseReturnLabelSource
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomerRemorseReturnLabelSource($customerRemorseReturnLabelSource)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration",
            "null",
        ];

        $customerRemorseReturnLabelSource = self::checkTypes($customerRemorseReturnLabelSource, $types);

        $this->customerRemorseReturnLabelSource = $customerRemorseReturnLabelSource;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration|null
     */
    public function getReturnMethod()
    {
        return $this->returnMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration|null $returnMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnMethod($returnMethod)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnMethodEnumeration",
            "null",
        ];

        $returnMethod = self::checkTypes($returnMethod, $types);

        $this->returnMethod = $returnMethod;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null
     */
    public function getRefundType()
    {
        return $this->refundType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null $refundType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRefundType($refundType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\RefundTypeEnumeration",
            "null",
        ];

        $refundType = self::checkTypes($refundType, $types);

        $this->refundType = $refundType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MemberProgramTier|string
     */
    public function getValidForMemberTier()
    {
        return $this->validForMemberTier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MemberProgramTier|string $validForMemberTier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidForMemberTier($validForMemberTier)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MemberProgramTier",
            "string",
        ];

        $validForMemberTier = self::checkTypes($validForMemberTier, $types);

        $this->validForMemberTier = $validForMemberTier;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null
     */
    public function getItemDefectReturnLabelSource()
    {
        return $this->itemDefectReturnLabelSource;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null $itemDefectReturnLabelSource
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemDefectReturnLabelSource($itemDefectReturnLabelSource)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration",
            "null",
        ];

        $itemDefectReturnLabelSource = self::checkTypes($itemDefectReturnLabelSource, $types);

        $this->itemDefectReturnLabelSource = $itemDefectReturnLabelSource;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getReturnPolicyCountry()
    {
        return $this->returnPolicyCountry;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $returnPolicyCountry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnPolicyCountry($returnPolicyCountry)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $returnPolicyCountry = self::checkTypes($returnPolicyCountry, $types);

        $this->returnPolicyCountry = $returnPolicyCountry;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getItemDefectReturnShippingFeesAmount()
    {
        return $this->itemDefectReturnShippingFeesAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $itemDefectReturnShippingFeesAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemDefectReturnShippingFeesAmount($itemDefectReturnShippingFeesAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $itemDefectReturnShippingFeesAmount = self::checkTypes($itemDefectReturnShippingFeesAmount, $types);

        $this->itemDefectReturnShippingFeesAmount = $itemDefectReturnShippingFeesAmount;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null
     */
    public function getReturnLabelSource()
    {
        return $this->returnLabelSource;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration|null $returnLabelSource
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnLabelSource($returnLabelSource)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnLabelSourceEnumeration",
            "null",
        ];

        $returnLabelSource = self::checkTypes($returnLabelSource, $types);

        $this->returnLabelSource = $returnLabelSource;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getReturnShippingFeesAmount()
    {
        return $this->returnShippingFeesAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $returnShippingFeesAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnShippingFeesAmount($returnShippingFeesAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $returnShippingFeesAmount = self::checkTypes($returnShippingFeesAmount, $types);

        $this->returnShippingFeesAmount = $returnShippingFeesAmount;
    }

    /**
     * @return string
     */
    public function getMerchantReturnLink()
    {
        return $this->merchantReturnLink;
    }

    /**
     * @param string $merchantReturnLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchantReturnLink($merchantReturnLink)
    {
        $types = [
            "string",
        ];

        $merchantReturnLink = self::checkTypes($merchantReturnLink, $types);

        $this->merchantReturnLink = $merchantReturnLink;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getCustomerRemorseReturnShippingFeesAmount()
    {
        return $this->customerRemorseReturnShippingFeesAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $customerRemorseReturnShippingFeesAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomerRemorseReturnShippingFeesAmount($customerRemorseReturnShippingFeesAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $customerRemorseReturnShippingFeesAmount = self::checkTypes($customerRemorseReturnShippingFeesAmount, $types);

        $this->customerRemorseReturnShippingFeesAmount = $customerRemorseReturnShippingFeesAmount;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    public function getCustomerRemorseReturnFees()
    {
        return $this->customerRemorseReturnFees;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null $customerRemorseReturnFees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomerRemorseReturnFees($customerRemorseReturnFees)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration",
            "null",
        ];

        $customerRemorseReturnFees = self::checkTypes($customerRemorseReturnFees, $types);

        $this->customerRemorseReturnFees = $customerRemorseReturnFees;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\OfferItemCondition|null $itemCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemCondition($itemCondition)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\OfferItemCondition",
            "null",
        ];

        $itemCondition = self::checkTypes($itemCondition, $types);

        $this->itemCondition = $itemCondition;
    }

    /**
     * @return Date|DateTime|int|null
     */
    public function getMerchantReturnDays()
    {
        return $this->merchantReturnDays;
    }

    /**
     * @param Date|DateTime|int|null $merchantReturnDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchantReturnDays($merchantReturnDays)
    {
        $types = [
            "Date",
            "DateTime",
            "int",
            "null",
        ];

        $merchantReturnDays = self::checkTypes($merchantReturnDays, $types);

        $this->merchantReturnDays = $merchantReturnDays;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    public function getReturnPolicyCategory()
    {
        return $this->returnPolicyCategory;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null $returnPolicyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnPolicyCategory($returnPolicyCategory)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration",
            "null",
        ];

        $returnPolicyCategory = self::checkTypes($returnPolicyCategory, $types);

        $this->returnPolicyCategory = $returnPolicyCategory;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Country
     */
    public function getApplicableCountry()
    {
        return $this->applicableCountry;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Country $applicableCountry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicableCountry($applicableCountry)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Country",
        ];

        $applicableCountry = self::checkTypes($applicableCountry, $types);

        $this->applicableCountry = $applicableCountry;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null
     */
    public function getRestockingFee()
    {
        return $this->restockingFee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string|Number|null $restockingFee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRestockingFee($restockingFee)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "Number",
            "null",
        ];

        $restockingFee = self::checkTypes($restockingFee, $types);

        $this->restockingFee = $restockingFee;
    }

}
