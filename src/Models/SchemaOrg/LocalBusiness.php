<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LocalBusiness extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LocalBusiness";
    }

    public static function fieldList() {
        $fields = [
            "branchOf" => "branchOf",
            "openingHours" => "openingHours",
            "priceRange" => "priceRange",
            "paymentAccepted" => "paymentAccepted",
            "currenciesAccepted" => "currenciesAccepted",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The larger organization that this local business is a branch of, if any. Not to be confused with (anatomical)[[branch]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $branchOf;

    /**
     * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.\n\n* Days are specified using the following two-letter combinations: ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.\n* Times are specified using 24:00 format. For example, 3pm is specified as ```15:00```, 10am as ```10:00```. \n* Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.\n* If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.
     *
     *
     * @var string
     */
    protected $openingHours;

    /**
     * The price range of the business, for example ```$$$```.
     *
     *
     * @var string
     */
    protected $priceRange;

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     *
     *
     * @var string
     */
    protected $paymentAccepted;

    /**
     * The currency accepted.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currenciesAccepted;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBranchOf()
    {
        return $this->branchOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $branchOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBranchOf($branchOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $branchOf = self::checkTypes($branchOf, $types);

        $this->branchOf = $branchOf;
    }

    /**
     * @return string
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param string $openingHours
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpeningHours($openingHours)
    {
        $types = [
            "string",
        ];

        $openingHours = self::checkTypes($openingHours, $types);

        $this->openingHours = $openingHours;
    }

    /**
     * @return string
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * @param string $priceRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceRange($priceRange)
    {
        $types = [
            "string",
        ];

        $priceRange = self::checkTypes($priceRange, $types);

        $this->priceRange = $priceRange;
    }

    /**
     * @return string
     */
    public function getPaymentAccepted()
    {
        return $this->paymentAccepted;
    }

    /**
     * @param string $paymentAccepted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentAccepted($paymentAccepted)
    {
        $types = [
            "string",
        ];

        $paymentAccepted = self::checkTypes($paymentAccepted, $types);

        $this->paymentAccepted = $paymentAccepted;
    }

    /**
     * @return string
     */
    public function getCurrenciesAccepted()
    {
        return $this->currenciesAccepted;
    }

    /**
     * @param string $currenciesAccepted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCurrenciesAccepted($currenciesAccepted)
    {
        $types = [
            "string",
        ];

        $currenciesAccepted = self::checkTypes($currenciesAccepted, $types);

        $this->currenciesAccepted = $currenciesAccepted;
    }

}
