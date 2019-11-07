<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Offer extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Offer";
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $sku;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     *
     * @var DateTime|string|null
     */
    protected $availabilityStarts;

    /**
     * The delivery method(s) available for this offer.
     *
     *
     * @var Schema.NET.DeliveryMethod|null
     */
    protected $availableDeliveryMethod;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $mpn;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     *
     * @var string
     */
    protected $serialNumber;

    /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin8;

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     *
     *
     * @var Schema.NET.ItemAvailability|null
     */
    protected $availability;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     *
     * @var PriceSpecification
     */
    protected $priceSpecification;

    /**
     * The current approximate inventory level for the item or items.
     *
     *
     * @var QuantitativeValue
     */
    protected $inventoryLevel;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     *
     * @var PriceSpecification
     */
    protected $eligibleTransactionVolume;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     *
     * @var Place
     */
    protected $availableAtOrFrom;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $reviews;

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
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory
     */
    protected $category;

    /**
     * The date after which the price is no longer available.
     *
     *
     * @var DateTime|null
     */
    protected $priceValidUntil;

    /**
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
     *
     *
     * @var Offer
     */
    protected $addOn;

    /**
     * The warranty promise(s) included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WarrantyPromise
     */
    protected $warranty;

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
     * @var string|decimal|null
     */
    protected $price;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin14;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin13;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin12;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var Person|Organization
     */
    protected $seller;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     *
     *
     * @var QuantitativeValue
     */
    protected $deliveryLeadTime;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     *
     * @var DateTime|string|null
     */
    protected $availabilityEnds;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TypeAndQuantityNode
     */
    protected $includesObject;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     *
     * @var Schema.NET.BusinessFunction|null
     */
    protected $businessFunction;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     *
     * @var Schema.NET.BusinessEntityType|null
     */
    protected $eligibleCustomerType;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     *
     * @var Schema.NET.OfferItemCondition|null
     */
    protected $itemCondition;

    /**
     * The item being offered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product
     */
    protected $itemOffered;

    /**
     * A pointer to the organization or person making the offer.
     *
     *
     * @var Organization|Person
     */
    protected $offeredBy;

    /**
     * The duration for which the given offer is valid.
     *
     *
     * @var QuantitativeValue
     */
    protected $eligibleDuration;

    /**
     * The payment method(s) accepted by seller for this offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LoanOrCredit|Schema.NET.PaymentMethod|null
     */
    protected $acceptedPaymentMethod;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|Place
     */
    protected $areaServed;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>
     * 
     * See also <a class="localLink" href="https://schema.org/ineligibleRegion">ineligibleRegion</a>.
     *
     *
     * @var Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $eligibleRegion;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     *
     * @var QuantitativeValue
     */
    protected $advanceBookingRequirement;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * The channels through which a booking can be made.
     *
     *
     * @var \OpenActive\Enums\AvailableChannelType|null
     */
    protected $availableChannel;

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSku($sku)
    {
        $types = array(
            "string",
        );

        $sku = self::checkTypes($sku, $types);

        $this->sku = $sku;
    }

    /**
     * @return DateTime|string|null
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
     * @param DateTime|string|null $availabilityStarts
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityStarts($availabilityStarts)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $availabilityStarts = self::checkTypes($availabilityStarts, $types);

        $this->availabilityStarts = $availabilityStarts;
    }

    /**
     * @return Schema.NET.DeliveryMethod|null
     */
    public function getAvailableDeliveryMethod()
    {
        return $this->availableDeliveryMethod;
    }

    /**
     * @param Schema.NET.DeliveryMethod|null $availableDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableDeliveryMethod($availableDeliveryMethod)
    {
        $types = array(
            "Schema.NET.DeliveryMethod",
            "null",
        );

        $availableDeliveryMethod = self::checkTypes($availableDeliveryMethod, $types);

        $this->availableDeliveryMethod = $availableDeliveryMethod;
    }

    /**
     * @return string
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * @param string $mpn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMpn($mpn)
    {
        $types = array(
            "string",
        );

        $mpn = self::checkTypes($mpn, $types);

        $this->mpn = $mpn;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSerialNumber($serialNumber)
    {
        $types = array(
            "string",
        );

        $serialNumber = self::checkTypes($serialNumber, $types);

        $this->serialNumber = $serialNumber;
    }

    /**
     * @return string
     */
    public function getGtin8()
    {
        return $this->gtin8;
    }

    /**
     * @param string $gtin8
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin8($gtin8)
    {
        $types = array(
            "string",
        );

        $gtin8 = self::checkTypes($gtin8, $types);

        $this->gtin8 = $gtin8;
    }

    /**
     * @return Schema.NET.ItemAvailability|null
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param Schema.NET.ItemAvailability|null $availability
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailability($availability)
    {
        $types = array(
            "Schema.NET.ItemAvailability",
            "null",
        );

        $availability = self::checkTypes($availability, $types);

        $this->availability = $availability;
    }

    /**
     * @return PriceSpecification
     */
    public function getPriceSpecification()
    {
        return $this->priceSpecification;
    }

    /**
     * @param PriceSpecification $priceSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceSpecification($priceSpecification)
    {
        $types = array(
            "PriceSpecification",
        );

        $priceSpecification = self::checkTypes($priceSpecification, $types);

        $this->priceSpecification = $priceSpecification;
    }

    /**
     * @return QuantitativeValue
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    /**
     * @param QuantitativeValue $inventoryLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInventoryLevel($inventoryLevel)
    {
        $types = array(
            "QuantitativeValue",
        );

        $inventoryLevel = self::checkTypes($inventoryLevel, $types);

        $this->inventoryLevel = $inventoryLevel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AggregateRating",
        );

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return Place
     */
    public function getAvailableAtOrFrom()
    {
        return $this->availableAtOrFrom;
    }

    /**
     * @param Place $availableAtOrFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableAtOrFrom($availableAtOrFrom)
    {
        $types = array(
            "Place",
        );

        $availableAtOrFrom = self::checkTypes($availableAtOrFrom, $types);

        $this->availableAtOrFrom = $availableAtOrFrom;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $reviews
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
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
        $types = array(
            "string",
        );

        $priceCurrency = self::checkTypes($priceCurrency, $types);

        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\PhysicalActivityCategory",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return DateTime|null
     */
    public function getPriceValidUntil()
    {
        return $this->priceValidUntil;
    }

    /**
     * @param DateTime|null $priceValidUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceValidUntil($priceValidUntil)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $priceValidUntil = self::checkTypes($priceValidUntil, $types);

        $this->priceValidUntil = $priceValidUntil;
    }

    /**
     * @return Offer
     */
    public function getAddOn()
    {
        return $this->addOn;
    }

    /**
     * @param Offer $addOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddOn($addOn)
    {
        $types = array(
            "Offer",
        );

        $addOn = self::checkTypes($addOn, $types);

        $this->addOn = $addOn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WarrantyPromise
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WarrantyPromise $warranty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWarranty($warranty)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\WarrantyPromise",
        );

        $warranty = self::checkTypes($warranty, $types);

        $this->warranty = $warranty;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return string|decimal|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string|decimal|null $price
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrice($price)
    {
        $types = array(
            "string",
            "decimal",
            "null",
        );

        $price = self::checkTypes($price, $types);

        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getGtin14()
    {
        return $this->gtin14;
    }

    /**
     * @param string $gtin14
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin14($gtin14)
    {
        $types = array(
            "string",
        );

        $gtin14 = self::checkTypes($gtin14, $types);

        $this->gtin14 = $gtin14;
    }

    /**
     * @return string
     */
    public function getGtin13()
    {
        return $this->gtin13;
    }

    /**
     * @param string $gtin13
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin13($gtin13)
    {
        $types = array(
            "string",
        );

        $gtin13 = self::checkTypes($gtin13, $types);

        $this->gtin13 = $gtin13;
    }

    /**
     * @return string
     */
    public function getGtin12()
    {
        return $this->gtin12;
    }

    /**
     * @param string $gtin12
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin12($gtin12)
    {
        $types = array(
            "string",
        );

        $gtin12 = self::checkTypes($gtin12, $types);

        $this->gtin12 = $gtin12;
    }

    /**
     * @return Person|Organization
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Person|Organization $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
    }

    /**
     * @return QuantitativeValue
     */
    public function getDeliveryLeadTime()
    {
        return $this->deliveryLeadTime;
    }

    /**
     * @param QuantitativeValue $deliveryLeadTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryLeadTime($deliveryLeadTime)
    {
        $types = array(
            "QuantitativeValue",
        );

        $deliveryLeadTime = self::checkTypes($deliveryLeadTime, $types);

        $this->deliveryLeadTime = $deliveryLeadTime;
    }

    /**
     * @return DateTime|string|null
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
     * @param DateTime|string|null $availabilityEnds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityEnds($availabilityEnds)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $availabilityEnds = self::checkTypes($availabilityEnds, $types);

        $this->availabilityEnds = $availabilityEnds;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\TypeAndQuantityNode
     */
    public function getIncludesObject()
    {
        return $this->includesObject;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TypeAndQuantityNode $includesObject
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesObject($includesObject)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\TypeAndQuantityNode",
        );

        $includesObject = self::checkTypes($includesObject, $types);

        $this->includesObject = $includesObject;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return Schema.NET.BusinessFunction|null
     */
    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    /**
     * @param Schema.NET.BusinessFunction|null $businessFunction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusinessFunction($businessFunction)
    {
        $types = array(
            "Schema.NET.BusinessFunction",
            "null",
        );

        $businessFunction = self::checkTypes($businessFunction, $types);

        $this->businessFunction = $businessFunction;
    }

    /**
     * @return Schema.NET.BusinessEntityType|null
     */
    public function getEligibleCustomerType()
    {
        return $this->eligibleCustomerType;
    }

    /**
     * @param Schema.NET.BusinessEntityType|null $eligibleCustomerType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleCustomerType($eligibleCustomerType)
    {
        $types = array(
            "Schema.NET.BusinessEntityType",
            "null",
        );

        $eligibleCustomerType = self::checkTypes($eligibleCustomerType, $types);

        $this->eligibleCustomerType = $eligibleCustomerType;
    }

    /**
     * @return Schema.NET.OfferItemCondition|null
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * @param Schema.NET.OfferItemCondition|null $itemCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemCondition($itemCondition)
    {
        $types = array(
            "Schema.NET.OfferItemCondition",
            "null",
        );

        $itemCondition = self::checkTypes($itemCondition, $types);

        $this->itemCondition = $itemCondition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product $itemOffered
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemOffered($itemOffered)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $itemOffered = self::checkTypes($itemOffered, $types);

        $this->itemOffered = $itemOffered;
    }

    /**
     * @return Organization|Person
     */
    public function getOfferedBy()
    {
        return $this->offeredBy;
    }

    /**
     * @param Organization|Person $offeredBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOfferedBy($offeredBy)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $offeredBy = self::checkTypes($offeredBy, $types);

        $this->offeredBy = $offeredBy;
    }

    /**
     * @return QuantitativeValue
     */
    public function getEligibleDuration()
    {
        return $this->eligibleDuration;
    }

    /**
     * @param QuantitativeValue $eligibleDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleDuration($eligibleDuration)
    {
        $types = array(
            "QuantitativeValue",
        );

        $eligibleDuration = self::checkTypes($eligibleDuration, $types);

        $this->eligibleDuration = $eligibleDuration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\LoanOrCredit|Schema.NET.PaymentMethod|null
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LoanOrCredit|Schema.NET.PaymentMethod|null $acceptedPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\LoanOrCredit",
            "Schema.NET.PaymentMethod",
            "null",
        );

        $acceptedPaymentMethod = self::checkTypes($acceptedPaymentMethod, $types);

        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|Place
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|Place $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "Place",
        );

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param Place|string|\OpenActive\Models\SchemaOrg\GeoShape $eligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = array(
            "Place",
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        );

        $eligibleRegion = self::checkTypes($eligibleRegion, $types);

        $this->eligibleRegion = $eligibleRegion;
    }

    /**
     * @return QuantitativeValue
     */
    public function getAdvanceBookingRequirement()
    {
        return $this->advanceBookingRequirement;
    }

    /**
     * @param QuantitativeValue $advanceBookingRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdvanceBookingRequirement($advanceBookingRequirement)
    {
        $types = array(
            "QuantitativeValue",
        );

        $advanceBookingRequirement = self::checkTypes($advanceBookingRequirement, $types);

        $this->advanceBookingRequirement = $advanceBookingRequirement;
    }

    /**
     * @return \OpenActive\Enums\AvailableChannelType|null
     */
    public function getAvailableChannel()
    {
        return $this->availableChannel;
    }

    /**
     * @param \OpenActive\Enums\AvailableChannelType|null $availableChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableChannel($availableChannel)
    {
        $types = array(
            "\OpenActive\Enums\AvailableChannelType",
            "null",
        );

        $availableChannel = self::checkTypes($availableChannel, $types);

        $this->availableChannel = $availableChannel;
    }

}
