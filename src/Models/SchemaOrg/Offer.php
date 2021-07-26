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

    public static function fieldList() {
        $fields = [
            "hasMeasurement" => "hasMeasurement",
            "includesObject" => "includesObject",
            "areaServed" => "areaServed",
            "availableDeliveryMethod" => "availableDeliveryMethod",
            "serialNumber" => "serialNumber",
            "gtin13" => "gtin13",
            "priceValidUntil" => "priceValidUntil",
            "aggregateRating" => "aggregateRating",
            "eligibleCustomerType" => "eligibleCustomerType",
            "availability" => "availability",
            "gtin8" => "gtin8",
            "leaseLength" => "leaseLength",
            "eligibleTransactionVolume" => "eligibleTransactionVolume",
            "acceptedPaymentMethod" => "acceptedPaymentMethod",
            "businessFunction" => "businessFunction",
            "eligibleDuration" => "eligibleDuration",
            "category" => "category",
            "hasMerchantReturnPolicy" => "hasMerchantReturnPolicy",
            "availabilityStarts" => "availabilityStarts",
            "priceCurrency" => "priceCurrency",
            "price" => "price",
            "eligibleRegion" => "eligibleRegion",
            "seller" => "seller",
            "warranty" => "warranty",
            "deliveryLeadTime" => "deliveryLeadTime",
            "mpn" => "mpn",
            "gtin12" => "gtin12",
            "availableAtOrFrom" => "availableAtOrFrom",
            "offeredBy" => "offeredBy",
            "validFrom" => "validFrom",
            "itemOffered" => "itemOffered",
            "gtin14" => "gtin14",
            "availabilityEnds" => "availabilityEnds",
            "validThrough" => "validThrough",
            "addOn" => "addOn",
            "reviews" => "reviews",
            "sku" => "sku",
            "gtin" => "gtin",
            "review" => "review",
            "itemCondition" => "itemCondition",
            "inventoryLevel" => "inventoryLevel",
            "advanceBookingRequirement" => "advanceBookingRequirement",
            "priceSpecification" => "priceSpecification",
            "ineligibleRegion" => "ineligibleRegion",
            "eligibleQuantity" => "eligibleQuantity",
            "shippingDetails" => "shippingDetails",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $hasMeasurement;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TypeAndQuantityNode|string
     */
    protected $includesObject;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $areaServed;

    /**
     * The delivery method(s) available for this offer.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $availableDeliveryMethod;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     *
     * @var string
     */
    protected $serialNumber;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin13;

    /**
     * The date after which the price is no longer available.
     *
     *
     * @var Date|null
     */
    protected $priceValidUntil;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    protected $aggregateRating;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BusinessEntityType|null
     */
    protected $eligibleCustomerType;

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ItemAvailability|null
     */
    protected $availability;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin8;

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null
     */
    protected $leaseLength;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    protected $eligibleTransactionVolume;

    /**
     * The payment method(s) accepted by seller for this offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Enums\SchemaOrg\PaymentMethod|string|null
     */
    protected $acceptedPaymentMethod;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BusinessFunction|null
     */
    protected $businessFunction;

    /**
     * The duration for which the given offer is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $eligibleDuration;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string
     */
    protected $hasMerchantReturnPolicy;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     *
     * @var Date|DateTime|string|null
     */
    protected $availabilityStarts;

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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
     *     
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    protected $eligibleRegion;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $seller;

    /**
     * The warranty promise(s) included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WarrantyPromise|string
     */
    protected $warranty;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $deliveryLeadTime;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $mpn;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin12;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $availableAtOrFrom;

    /**
     * A pointer to the organization or person making the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $offeredBy;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Trip|\OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\AggregateOffer|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\MenuItem|string
     */
    protected $itemOffered;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin14;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     *
     * @var Date|DateTime|string|null
     */
    protected $availabilityEnds;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validThrough;

    /**
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $addOn;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $reviews;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $sku;

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. The GS1 [digital link specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as URLs. A correct [[gtin]] value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values is not required or encouraged.
     *    
     *
     *
     * @var string
     */
    protected $gtin;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $review;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    protected $itemCondition;

    /**
     * The current approximate inventory level for the item or items.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $inventoryLevel;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $advanceBookingRequirement;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    protected $priceSpecification;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|string
     */
    protected $ineligibleRegion;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $eligibleQuantity;

    /**
     * Indicates information about the shipping policies and options associated with an [[Offer]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OfferShippingDetails|string
     */
    protected $shippingDetails;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHasMeasurement()
    {
        return $this->hasMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $hasMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMeasurement($hasMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $hasMeasurement = self::checkTypes($hasMeasurement, $types);

        $this->hasMeasurement = $hasMeasurement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\TypeAndQuantityNode|string
     */
    public function getIncludesObject()
    {
        return $this->includesObject;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TypeAndQuantityNode|string $includesObject
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesObject($includesObject)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TypeAndQuantityNode",
            "string",
        ];

        $includesObject = self::checkTypes($includesObject, $types);

        $this->includesObject = $includesObject;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    public function getAvailableDeliveryMethod()
    {
        return $this->availableDeliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DeliveryMethod|null $availableDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableDeliveryMethod($availableDeliveryMethod)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        ];

        $availableDeliveryMethod = self::checkTypes($availableDeliveryMethod, $types);

        $this->availableDeliveryMethod = $availableDeliveryMethod;
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
        $types = [
            "string",
        ];

        $serialNumber = self::checkTypes($serialNumber, $types);

        $this->serialNumber = $serialNumber;
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
        $types = [
            "string",
        ];

        $gtin13 = self::checkTypes($gtin13, $types);

        $this->gtin13 = $gtin13;
    }

    /**
     * @return Date|null
     */
    public function getPriceValidUntil()
    {
        return $this->priceValidUntil;
    }

    /**
     * @param Date|null $priceValidUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceValidUntil($priceValidUntil)
    {
        $types = [
            "Date",
            "null",
        ];

        $priceValidUntil = self::checkTypes($priceValidUntil, $types);

        $this->priceValidUntil = $priceValidUntil;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating|string $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AggregateRating",
            "string",
        ];

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\BusinessEntityType|null
     */
    public function getEligibleCustomerType()
    {
        return $this->eligibleCustomerType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\BusinessEntityType|null $eligibleCustomerType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleCustomerType($eligibleCustomerType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\BusinessEntityType",
            "null",
        ];

        $eligibleCustomerType = self::checkTypes($eligibleCustomerType, $types);

        $this->eligibleCustomerType = $eligibleCustomerType;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ItemAvailability|null
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ItemAvailability|null $availability
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailability($availability)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ItemAvailability",
            "null",
        ];

        $availability = self::checkTypes($availability, $types);

        $this->availability = $availability;
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
        $types = [
            "string",
        ];

        $gtin8 = self::checkTypes($gtin8, $types);

        $this->gtin8 = $gtin8;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null
     */
    public function getLeaseLength()
    {
        return $this->leaseLength;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null $leaseLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeaseLength($leaseLength)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "DateInterval",
            "string",
            "null",
        ];

        $leaseLength = self::checkTypes($leaseLength, $types);

        $this->leaseLength = $leaseLength;
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
     * @return \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Enums\SchemaOrg\PaymentMethod|string|null
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Enums\SchemaOrg\PaymentMethod|string|null $acceptedPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\LoanOrCredit",
            "\OpenActive\Enums\SchemaOrg\PaymentMethod",
            "string",
            "null",
        ];

        $acceptedPaymentMethod = self::checkTypes($acceptedPaymentMethod, $types);

        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\BusinessFunction|null
     */
    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\BusinessFunction|null $businessFunction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBusinessFunction($businessFunction)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\BusinessFunction",
            "null",
        ];

        $businessFunction = self::checkTypes($businessFunction, $types);

        $this->businessFunction = $businessFunction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getEligibleDuration()
    {
        return $this->eligibleDuration;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $eligibleDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleDuration($eligibleDuration)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $eligibleDuration = self::checkTypes($eligibleDuration, $types);

        $this->eligibleDuration = $eligibleDuration;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string
     */
    public function getHasMerchantReturnPolicy()
    {
        return $this->hasMerchantReturnPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string $hasMerchantReturnPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MerchantReturnPolicy",
            "string",
        ];

        $hasMerchantReturnPolicy = self::checkTypes($hasMerchantReturnPolicy, $types);

        $this->hasMerchantReturnPolicy = $hasMerchantReturnPolicy;
    }

    /**
     * @return Date|DateTime|string|null
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
     * @param Date|DateTime|string|null $availabilityStarts
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityStarts($availabilityStarts)
    {
        $types = [
            "Date",
            "DateTime",
            "Time",
            "null",
        ];

        $availabilityStarts = self::checkTypes($availabilityStarts, $types);

        $this->availabilityStarts = $availabilityStarts;
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
     * @return \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string $eligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $eligibleRegion = self::checkTypes($eligibleRegion, $types);

        $this->eligibleRegion = $eligibleRegion;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WarrantyPromise|string
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WarrantyPromise|string $warranty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWarranty($warranty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WarrantyPromise",
            "string",
        ];

        $warranty = self::checkTypes($warranty, $types);

        $this->warranty = $warranty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getDeliveryLeadTime()
    {
        return $this->deliveryLeadTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $deliveryLeadTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryLeadTime($deliveryLeadTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $deliveryLeadTime = self::checkTypes($deliveryLeadTime, $types);

        $this->deliveryLeadTime = $deliveryLeadTime;
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
        $types = [
            "string",
        ];

        $mpn = self::checkTypes($mpn, $types);

        $this->mpn = $mpn;
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
        $types = [
            "string",
        ];

        $gtin12 = self::checkTypes($gtin12, $types);

        $this->gtin12 = $gtin12;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getAvailableAtOrFrom()
    {
        return $this->availableAtOrFrom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $availableAtOrFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableAtOrFrom($availableAtOrFrom)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $availableAtOrFrom = self::checkTypes($availableAtOrFrom, $types);

        $this->availableAtOrFrom = $availableAtOrFrom;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getOfferedBy()
    {
        return $this->offeredBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $offeredBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOfferedBy($offeredBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $offeredBy = self::checkTypes($offeredBy, $types);

        $this->offeredBy = $offeredBy;
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
     * @return \OpenActive\Models\SchemaOrg\Trip|\OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\AggregateOffer|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\MenuItem|string
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Trip|\OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\AggregateOffer|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\MenuItem|string $itemOffered
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemOffered($itemOffered)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Trip",
            "\OpenActive\Models\SchemaOrg\Event",
            "\OpenActive\Models\SchemaOrg\AggregateOffer",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\MenuItem",
            "string",
        ];

        $itemOffered = self::checkTypes($itemOffered, $types);

        $this->itemOffered = $itemOffered;
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
        $types = [
            "string",
        ];

        $gtin14 = self::checkTypes($gtin14, $types);

        $this->gtin14 = $gtin14;
    }

    /**
     * @return Date|DateTime|string|null
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
     * @param Date|DateTime|string|null $availabilityEnds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityEnds($availabilityEnds)
    {
        $types = [
            "Date",
            "DateTime",
            "Time",
            "null",
        ];

        $availabilityEnds = self::checkTypes($availabilityEnds, $types);

        $this->availabilityEnds = $availabilityEnds;
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
     * @return \OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getAddOn()
    {
        return $this->addOn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|string $addOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddOn($addOn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $addOn = self::checkTypes($addOn, $types);

        $this->addOn = $addOn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $reviews
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

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
        $types = [
            "string",
        ];

        $sku = self::checkTypes($sku, $types);

        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * @param string $gtin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin($gtin)
    {
        $types = [
            "string",
        ];

        $gtin = self::checkTypes($gtin, $types);

        $this->gtin = $gtin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\OfferItemCondition|null $itemCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemCondition($itemCondition)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\OfferItemCondition",
            "null",
        ];

        $itemCondition = self::checkTypes($itemCondition, $types);

        $this->itemCondition = $itemCondition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $inventoryLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInventoryLevel($inventoryLevel)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $inventoryLevel = self::checkTypes($inventoryLevel, $types);

        $this->inventoryLevel = $inventoryLevel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getAdvanceBookingRequirement()
    {
        return $this->advanceBookingRequirement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $advanceBookingRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdvanceBookingRequirement($advanceBookingRequirement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $advanceBookingRequirement = self::checkTypes($advanceBookingRequirement, $types);

        $this->advanceBookingRequirement = $advanceBookingRequirement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    public function getPriceSpecification()
    {
        return $this->priceSpecification;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification|string $priceSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceSpecification($priceSpecification)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
        ];

        $priceSpecification = self::checkTypes($priceSpecification, $types);

        $this->priceSpecification = $priceSpecification;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|string
     */
    public function getIneligibleRegion()
    {
        return $this->ineligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|string $ineligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIneligibleRegion($ineligibleRegion)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "string",
        ];

        $ineligibleRegion = self::checkTypes($ineligibleRegion, $types);

        $this->ineligibleRegion = $ineligibleRegion;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\OfferShippingDetails|string
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OfferShippingDetails|string $shippingDetails
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setShippingDetails($shippingDetails)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OfferShippingDetails",
            "string",
        ];

        $shippingDetails = self::checkTypes($shippingDetails, $types);

        $this->shippingDetails = $shippingDetails;
    }

}
