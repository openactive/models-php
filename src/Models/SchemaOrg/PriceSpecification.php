<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PriceSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PriceSpecification";
    }

    public static function fieldList() {
        $fields = [
            "valueAddedTaxIncluded" => "valueAddedTaxIncluded",
            "eligibleTransactionVolume" => "eligibleTransactionVolume",
            "priceCurrency" => "priceCurrency",
            "price" => "price",
            "maxPrice" => "maxPrice",
            "minPrice" => "minPrice",
            "validFrom" => "validFrom",
            "validThrough" => "validThrough",
            "eligibleQuantity" => "eligibleQuantity",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     *
     *
     * @var bool|null
     */
    protected $valueAddedTaxIncluded;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    protected $eligibleTransactionVolume;

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     *       
     *
     *
     * @var string|Number|null
     */
    protected $price;

    /**
     * The highest price if the price is a range.
     *
     *
     * @var Number|null
     */
    protected $maxPrice;

    /**
     * The lowest price if the price is a range.
     *
     *
     * @var Number|null
     */
    protected $minPrice;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validThrough;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $eligibleQuantity;

    /**
     * @return bool|null
     */
    public function getValueAddedTaxIncluded()
    {
        return $this->valueAddedTaxIncluded;
    }

    /**
     * @param bool|null $valueAddedTaxIncluded
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        $types = [
            "bool",
            "null",
        ];

        $valueAddedTaxIncluded = self::checkTypes($valueAddedTaxIncluded, $types);

        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification|string $eligibleTransactionVolume
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleTransactionVolume($eligibleTransactionVolume)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
        ];

        $eligibleTransactionVolume = self::checkTypes($eligibleTransactionVolume, $types);

        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
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
     * @return string|Number|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string|Number|null $price
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrice($price)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $price = self::checkTypes($price, $types);

        $this->price = $price;
    }

    /**
     * @return Number|null
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param Number|null $maxPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxPrice($maxPrice)
    {
        $types = [
            "Number",
            "null",
        ];

        $maxPrice = self::checkTypes($maxPrice, $types);

        $this->maxPrice = $maxPrice;
    }

    /**
     * @return Number|null
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param Number|null $minPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinPrice($minPrice)
    {
        $types = [
            "Number",
            "null",
        ];

        $minPrice = self::checkTypes($minPrice, $types);

        $this->minPrice = $minPrice;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $eligibleQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleQuantity($eligibleQuantity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $eligibleQuantity = self::checkTypes($eligibleQuantity, $types);

        $this->eligibleQuantity = $eligibleQuantity;
    }

}
