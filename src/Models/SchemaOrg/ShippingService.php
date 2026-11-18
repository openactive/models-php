<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShippingService extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ShippingService";
    }

    public static function fieldList() {
        $fields = [
            "fulfillmentType" => "fulfillmentType",
            "handlingTime" => "handlingTime",
            "shippingConditions" => "shippingConditions",
            "validForMemberTier" => "validForMemberTier",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Type of fulfillment applicable to the [[ShippingService]].
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\FulfillmentTypeEnumeration|null
     */
    protected $fulfillmentType;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     * 
     * In the context of [[ShippingDeliveryTime]], Typical properties: minValue, maxValue, unitCode (d for DAY).  This is by common convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business normally operates.
     * 
     * In the context of [[ShippingService]], use the [[ServicePeriod]] format, that contains the same information in a structured form, with cut-off time, business days and duration.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string
     */
    protected $handlingTime;

    /**
     * The conditions (constraints, price) applicable to the [[ShippingService]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ShippingConditions|string
     */
    protected $shippingConditions;

    /**
     * The membership program tier(s) an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MemberProgramTier|string
     */
    protected $validForMemberTier;

    /**
     * @return \OpenActive\Enums\SchemaOrg\FulfillmentTypeEnumeration|null
     */
    public function getFulfillmentType()
    {
        return $this->fulfillmentType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\FulfillmentTypeEnumeration|null $fulfillmentType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFulfillmentType($fulfillmentType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\FulfillmentTypeEnumeration",
            "null",
        ];

        $fulfillmentType = self::checkTypes($fulfillmentType, $types);

        $this->fulfillmentType = $fulfillmentType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\ServicePeriod|string $handlingTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHandlingTime($handlingTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\ServicePeriod",
            "string",
        ];

        $handlingTime = self::checkTypes($handlingTime, $types);

        $this->handlingTime = $handlingTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ShippingConditions|string
     */
    public function getShippingConditions()
    {
        return $this->shippingConditions;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ShippingConditions|string $shippingConditions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingConditions($shippingConditions)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ShippingConditions",
            "string",
        ];

        $shippingConditions = self::checkTypes($shippingConditions, $types);

        $this->shippingConditions = $shippingConditions;
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

}
