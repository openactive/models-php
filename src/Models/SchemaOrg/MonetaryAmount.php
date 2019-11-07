<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MonetaryAmount extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MonetaryAmount";
    }

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var float|null
     */
    protected $maxValue;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var DateTime|null
     */
    protected $validThrough;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var DateTime|null
     */
    protected $validFrom;

    /**
     * The currency in which the monetary amount is expressed.<br/><br/>
     * 
     * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currency;

    /**
     * The value of the quantitative value or property value node.<br/><br/>
     * 
     * <ul>
     * <li>For <a class="localLink" href="https://schema.org/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="https://schema.org/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
     * <li>For <a class="localLink" href="https://schema.org/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StructuredValue|string|float|bool|null
     */
    protected $value;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var float|null
     */
    protected $minValue;

    /**
     * @return float|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param float|null $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = array(
            "float",
            "null",
        );

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
    }

    /**
     * @return DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param DateTime|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

    /**
     * @return DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCurrency($currency)
    {
        $types = array(
            "string",
        );

        $currency = self::checkTypes($currency, $types);

        $this->currency = $currency;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\StructuredValue|string|float|bool|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StructuredValue|string|float|bool|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "string",
            "float",
            "bool",
            "null",
        );

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

    /**
     * @return float|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param float|null $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = array(
            "float",
            "null",
        );

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

}
