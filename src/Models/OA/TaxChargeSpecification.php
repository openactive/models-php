<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PriceSpecification](https://schema.org/PriceSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class TaxChargeSpecification extends \OpenActive\Models\OA\PriceSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TaxChargeSpecification";
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the tax charge, e.g. "VAT at 0% for EU transactions"
     *
     *
     * @var string
     */
    protected $name;

    /**
     * The total amount.
     *
     *
     * @var float|null
     */
    protected $price;

    /**
     * The currency of the price. Specified as a 3-letter ISO 4217 value. If a  PriceSpecification has a zero price, then this property is not required. Otherwise the priceCurrency must be specified.
     *
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * The rate of VAT.
     *
     *
     * @var float|null
     */
    protected $rate;

    /**
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

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
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float|null $price
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrice($price)
    {
        $types = array(
            "float",
            "null",
        );

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
        $types = array(
            "string",
        );

        $priceCurrency = self::checkTypes($priceCurrency, $types);

        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return float|null
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float|null $rate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRate($rate)
    {
        $types = array(
            "float",
            "null",
        );

        $rate = self::checkTypes($rate, $types);

        $this->rate = $rate;
    }

}
