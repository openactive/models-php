<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AggregateOffer extends \OpenActive\Models\SchemaOrg\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AggregateOffer";
    }

    public static function fieldList() {
        $fields = [
            "offers" => "offers",
            "offerCount" => "offerCount",
            "lowPrice" => "lowPrice",
            "highPrice" => "highPrice",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="https://schema.org/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="https://schema.org/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * The number of offers for the product.
     *
     *
     * @var null|int
     */
    protected $offerCount;

    /**
     * The lowest price of all offers available.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var null|float|string
     */
    protected $lowPrice;

    /**
     * The highest price of all offers available.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var null|float|string
     */
    protected $highPrice;

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return null|int
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * @param null|int $offerCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOfferCount($offerCount)
    {
        $types = array(
            "null",
            "int",
        );

        $offerCount = self::checkTypes($offerCount, $types);

        $this->offerCount = $offerCount;
    }

    /**
     * @return null|float|string
     */
    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    /**
     * @param null|float|string $lowPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLowPrice($lowPrice)
    {
        $types = array(
            "null",
            "float",
            "string",
        );

        $lowPrice = self::checkTypes($lowPrice, $types);

        $this->lowPrice = $lowPrice;
    }

    /**
     * @return null|float|string
     */
    public function getHighPrice()
    {
        return $this->highPrice;
    }

    /**
     * @param null|float|string $highPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHighPrice($highPrice)
    {
        $types = array(
            "null",
            "float",
            "string",
        );

        $highPrice = self::checkTypes($highPrice, $types);

        $this->highPrice = $highPrice;
    }

}
