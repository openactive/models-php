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

    public static function fieldList() {
        $fields = [
            "maxValue" => "maxValue",
            "minValue" => "minValue",
            "validFrom" => "validFrom",
            "value" => "value",
            "currency" => "currency",
            "validThrough" => "validThrough",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $maxValue;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $minValue;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * The value of the quantitative value or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'.\n* For [[PropertyValue]], it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|bool|null
     */
    protected $value;

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currency;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validThrough;

    /**
     * @return Number|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param Number|null $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = [
            "Number",
            "null",
        ];

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
    }

    /**
     * @return Number|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param Number|null $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = [
            "Number",
            "null",
        ];

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param Date|DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|bool|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|bool|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = [
            "string",
            "Number",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "bool",
            "null",
        ];

        $value = self::checkTypes($value, $types);

        $this->value = $value;
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
        $types = [
            "string",
        ];

        $currency = self::checkTypes($currency, $types);

        $this->currency = $currency;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param Date|DateTime|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

}
