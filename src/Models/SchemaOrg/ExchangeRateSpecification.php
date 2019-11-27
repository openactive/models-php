<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExchangeRateSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ExchangeRateSpecification";
    }

    public static function fieldList() {
        $fields = [
            "currentExchangeRate" => "currentExchangeRate",
            "exchangeRateSpread" => "exchangeRateSpread",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The current price of a currency.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\UnitPriceSpecification
     */
    protected $currentExchangeRate;

    /**
     * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $exchangeRateSpread;

    /**
     * @return \OpenActive\Models\SchemaOrg\UnitPriceSpecification
     */
    public function getCurrentExchangeRate()
    {
        return $this->currentExchangeRate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\UnitPriceSpecification $currentExchangeRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCurrentExchangeRate($currentExchangeRate)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\UnitPriceSpecification",
        );

        $currentExchangeRate = self::checkTypes($currentExchangeRate, $types);

        $this->currentExchangeRate = $currentExchangeRate;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getExchangeRateSpread()
    {
        return $this->exchangeRateSpread;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $exchangeRateSpread
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExchangeRateSpread($exchangeRateSpread)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        );

        $exchangeRateSpread = self::checkTypes($exchangeRateSpread, $types);

        $this->exchangeRateSpread = $exchangeRateSpread;
    }

}
