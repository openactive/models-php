<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PriceSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The lowest price if the price is a range.
     *
     *
     * @var decimal|null
     */
    protected $minPrice;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     *
     * @var PriceSpecification
     */
    protected $eligibleTransactionVolume;

    /**
     * The highest price if the price is a range.
     *
     *
     * @var decimal|null
     */
    protected $maxPrice;

    /**
     * The currency of the price, or a price component when attached to <a class="localLink" href="https://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>
     * 
     * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     *
     * @var QuantitativeValue
     */
    protected $eligibleQuantity;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var DateTime|null
     */
    protected $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var DateTime|null
     */
    protected $validThrough;

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use the <a class="localLink" href="https://schema.org/priceCurrency">priceCurrency</a> property (with standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR") instead of including <a href="http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign">ambiguous symbols</a> such as '$' in the value.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * <li>Note that both <a href="http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute">RDFa</a> and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.</li>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * </ul>
     * 
     *
     *
     * @var decimal|string|null
     */
    protected $price;

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     *
     *
     * @var bool|null
     */
    protected $valueAddedTaxIncluded;

    /**
     * @return decimal|null
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param decimal|null $minPrice
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMinPrice($minPrice)
    {
        $types = array(
            "decimal",
            "null",
        );

        $minPrice = self::checkTypes($minPrice, $types);

        $this->minPrice = $minPrice;
    }

    /**
     * @return PriceSpecification
     */
    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    /**
     * @param PriceSpecification $eligibleTransactionVolume
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEligibleTransactionVolume($eligibleTransactionVolume)
    {
        $types = array(
            "PriceSpecification",
        );

        $eligibleTransactionVolume = self::checkTypes($eligibleTransactionVolume, $types);

        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
    }

    /**
     * @return decimal|null
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param decimal|null $maxPrice
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMaxPrice($maxPrice)
    {
        $types = array(
            "decimal",
            "null",
        );

        $maxPrice = self::checkTypes($maxPrice, $types);

        $this->maxPrice = $maxPrice;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return QuantitativeValue
     */
    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    /**
     * @param QuantitativeValue $eligibleQuantity
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEligibleQuantity($eligibleQuantity)
    {
        $types = array(
            "QuantitativeValue",
        );

        $eligibleQuantity = self::checkTypes($eligibleQuantity, $types);

        $this->eligibleQuantity = $eligibleQuantity;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param DateTime|null $validThrough
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return decimal|string|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param decimal|string|null $price
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPrice($price)
    {
        $types = array(
            "decimal",
            "string",
            "null",
        );

        $price = self::checkTypes($price, $types);

        $this->price = $price;
    }

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        $types = array(
            "bool",
            "null",
        );

        $valueAddedTaxIncluded = self::checkTypes($valueAddedTaxIncluded, $types);

        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
    }

}
