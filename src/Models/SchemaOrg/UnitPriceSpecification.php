<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UnitPriceSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UnitPriceSpecification";
    }

    public static function fieldList() {
        $fields = [
            "priceType" => "priceType",
            "unitText" => "unitText",
            "billingIncrement" => "billingIncrement",
            "unitCode" => "unitCode",
            "billingDuration" => "billingDuration",
            "referenceQuantity" => "referenceQuantity",
            "priceComponentType" => "priceComponentType",
            "billingStart" => "billingStart",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration|string|null
     */
    protected $priceType;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     *
     * @var string
     */
    protected $unitText;

    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
     *
     *
     * @var Number|null
     */
    protected $billingIncrement;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     *
     * @var string
     */
    protected $unitCode;

    /**
     * Specifies for how long this price (or price component) will be billed. Can be used, for example, to model the contractual duration of a subscription or payment plan. Type can be either a Duration or a Number (in which case the unit of measurement, for example month, is specified by the unitCode property).
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $billingDuration;

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $referenceQuantity;

    /**
     * Identifies a price component (for example, a line item on an invoice), part of the total price for an offer.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration|null
     */
    protected $priceComponentType;

    /**
     * Specifies after how much time this price (or price component) becomes valid and billing starts. Can be used, for example, to model a price increase after the first year of a subscription. The unit of measurement is specified by the unitCode property.
     *
     *
     * @var Number|null
     */
    protected $billingStart;

    /**
     * @return \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration|string|null
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration|string|null $priceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceType($priceType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PriceTypeEnumeration",
            "string",
            "null",
        ];

        $priceType = self::checkTypes($priceType, $types);

        $this->priceType = $priceType;
    }

    /**
     * @return string
     */
    public function getUnitText()
    {
        return $this->unitText;
    }

    /**
     * @param string $unitText
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnitText($unitText)
    {
        $types = [
            "string",
        ];

        $unitText = self::checkTypes($unitText, $types);

        $this->unitText = $unitText;
    }

    /**
     * @return Number|null
     */
    public function getBillingIncrement()
    {
        return $this->billingIncrement;
    }

    /**
     * @param Number|null $billingIncrement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingIncrement($billingIncrement)
    {
        $types = [
            "Number",
            "null",
        ];

        $billingIncrement = self::checkTypes($billingIncrement, $types);

        $this->billingIncrement = $billingIncrement;
    }

    /**
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * @param string $unitCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnitCode($unitCode)
    {
        $types = [
            "string",
        ];

        $unitCode = self::checkTypes($unitCode, $types);

        $this->unitCode = $unitCode;
    }

    /**
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getBillingDuration()
    {
        return $this->billingDuration;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $billingDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingDuration($billingDuration)
    {
        $types = [
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $billingDuration = self::checkTypes($billingDuration, $types);

        $this->billingDuration = $billingDuration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getReferenceQuantity()
    {
        return $this->referenceQuantity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $referenceQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReferenceQuantity($referenceQuantity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $referenceQuantity = self::checkTypes($referenceQuantity, $types);

        $this->referenceQuantity = $referenceQuantity;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration|null
     */
    public function getPriceComponentType()
    {
        return $this->priceComponentType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration|null $priceComponentType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceComponentType($priceComponentType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PriceComponentTypeEnumeration",
            "null",
        ];

        $priceComponentType = self::checkTypes($priceComponentType, $types);

        $this->priceComponentType = $priceComponentType;
    }

    /**
     * @return Number|null
     */
    public function getBillingStart()
    {
        return $this->billingStart;
    }

    /**
     * @param Number|null $billingStart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingStart($billingStart)
    {
        $types = [
            "Number",
            "null",
        ];

        $billingStart = self::checkTypes($billingStart, $types);

        $this->billingStart = $billingStart;
    }

}
