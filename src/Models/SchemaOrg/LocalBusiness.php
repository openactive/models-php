<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LocalBusiness extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:LocalBusiness";
    }

    /**
     * The price range of the business, for example <code>$$$</code>.
     *
     *
     * @var string
     */
    protected $priceRange;

    /**
     * The larger organization that this local business is a branch of, if any. Not to be confused with (anatomical)<a class="localLink" href="https://schema.org/branch">branch</a>.
     *
     *
     * @var Organization
     */
    protected $branchOf;

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     *
     *
     * @var string
     */
    protected $paymentAccepted;

    /**
     * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.<br/><br/>
     * 
     * <ul>
     * <li>Days are specified using the following two-letter combinations: <code>Mo</code>, <code>Tu</code>, <code>We</code>, <code>Th</code>, <code>Fr</code>, <code>Sa</code>, <code>Su</code>.</li>
     * <li>Times are specified using 24:00 time. For example, 3pm is specified as <code>15:00</code>. </li>
     * <li>Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.</li>
     * <li>If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.</li>
     * </ul>
     * 
     *
     *
     * @var string
     */
    protected $openingHours;

    /**
     * The currency accepted.<br/><br/>
     * 
     * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $currenciesAccepted;

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
        $types = array(
            "string",
        );

        $priceRange = self::checkTypes($priceRange, $types);

        $this->priceRange = $priceRange;
    }

    /**
     * @return Organization
     */
    public function getBranchOf()
    {
        return $this->branchOf;
    }

    /**
     * @param Organization $branchOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBranchOf($branchOf)
    {
        $types = array(
            "Organization",
        );

        $branchOf = self::checkTypes($branchOf, $types);

        $this->branchOf = $branchOf;
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
        $types = array(
            "string",
        );

        $paymentAccepted = self::checkTypes($paymentAccepted, $types);

        $this->paymentAccepted = $paymentAccepted;
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
        $types = array(
            "string",
        );

        $openingHours = self::checkTypes($openingHours, $types);

        $this->openingHours = $openingHours;
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
        $types = array(
            "string",
        );

        $currenciesAccepted = self::checkTypes($currenciesAccepted, $types);

        $this->currenciesAccepted = $currenciesAccepted;
    }

}
