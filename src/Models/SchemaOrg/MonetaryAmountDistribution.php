<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MonetaryAmountDistribution extends \OpenActive\Models\SchemaOrg\QuantitativeValueDistribution
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MonetaryAmountDistribution";
    }

    public static function fieldList() {
        $fields = [
            "currency" => "currency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currency;

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

}
