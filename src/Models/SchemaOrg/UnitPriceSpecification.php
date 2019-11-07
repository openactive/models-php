<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [PriceSpecification](https://schema.org/PriceSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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

    /**
     * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
     *
     *
     * @var string
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
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     *
     *
     * @var QuantitativeValue
     */
    protected $referenceQuantity;

    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
     *
     *
     * @var float|null
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
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @param string $priceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceType($priceType)
    {
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $unitText = self::checkTypes($unitText, $types);

        $this->unitText = $unitText;
    }

    /**
     * @return QuantitativeValue
     */
    public function getReferenceQuantity()
    {
        return $this->referenceQuantity;
    }

    /**
     * @param QuantitativeValue $referenceQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReferenceQuantity($referenceQuantity)
    {
        $types = array(
            "QuantitativeValue",
        );

        $referenceQuantity = self::checkTypes($referenceQuantity, $types);

        $this->referenceQuantity = $referenceQuantity;
    }

    /**
     * @return float|null
     */
    public function getBillingIncrement()
    {
        return $this->billingIncrement;
    }

    /**
     * @param float|null $billingIncrement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingIncrement($billingIncrement)
    {
        $types = array(
            "float",
            "null",
        );

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
        $types = array(
            "string",
        );

        $unitCode = self::checkTypes($unitCode, $types);

        $this->unitCode = $unitCode;
    }

}
