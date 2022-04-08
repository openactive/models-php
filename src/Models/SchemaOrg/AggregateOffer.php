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
            "highPrice" => "highPrice",
            "offers" => "offers",
            "lowPrice" => "lowPrice",
            "offerCount" => "offerCount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The highest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var string|Number|null
     */
    protected $highPrice;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand|string
     */
    protected $offers;

    /**
     * The lowest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var string|Number|null
     */
    protected $lowPrice;

    /**
     * The number of offers for the product.
     *
     *
     * @var int|null
     */
    protected $offerCount;

    /**
     * @return string|Number|null
     */
    public function getHighPrice()
    {
        return $this->highPrice;
    }

    /**
     * @param string|Number|null $highPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHighPrice($highPrice)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $highPrice = self::checkTypes($highPrice, $types);

        $this->highPrice = $highPrice;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand|string
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand|string $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "\OpenActive\Models\SchemaOrg\Demand",
            "string",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return string|Number|null
     */
    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    /**
     * @param string|Number|null $lowPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLowPrice($lowPrice)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $lowPrice = self::checkTypes($lowPrice, $types);

        $this->lowPrice = $lowPrice;
    }

    /**
     * @return int|null
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * @param int|null $offerCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOfferCount($offerCount)
    {
        $types = [
            "int",
            "null",
        ];

        $offerCount = self::checkTypes($offerCount, $types);

        $this->offerCount = $offerCount;
    }

}
