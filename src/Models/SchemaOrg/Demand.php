<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Demand extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Demand";
    }

    public static function fieldList() {
        $fields = [
            "gtin13" => "gtin13",
            "ineligibleRegion" => "ineligibleRegion",
            "gtin12" => "gtin12",
            "sku" => "sku",
            "seller" => "seller",
            "availableDeliveryMethod" => "availableDeliveryMethod",
            "deliveryLeadTime" => "deliveryLeadTime",
            "serialNumber" => "serialNumber",
            "availabilityEnds" => "availabilityEnds",
            "availability" => "availability",
            "includesObject" => "includesObject",
            "inventoryLevel" => "inventoryLevel",
            "businessFunction" => "businessFunction",
            "availableAtOrFrom" => "availableAtOrFrom",
            "eligibleCustomerType" => "eligibleCustomerType",
            "eligibleQuantity" => "eligibleQuantity",
            "itemCondition" => "itemCondition",
            "validThrough" => "validThrough",
            "itemOffered" => "itemOffered",
            "availabilityStarts" => "availabilityStarts",
            "eligibleDuration" => "eligibleDuration",
            "gtin8" => "gtin8",
            "acceptedPaymentMethod" => "acceptedPaymentMethod",
            "eligibleTransactionVolume" => "eligibleTransactionVolume",
            "validFrom" => "validFrom",
            "gtin" => "gtin",
            "advanceBookingRequirement" => "advanceBookingRequirement",
            "eligibleRegion" => "eligibleRegion",
            "areaServed" => "areaServed",
            "gtin14" => "gtin14",
            "warranty" => "warranty",
            "priceSpecification" => "priceSpecification",
            "mpn" => "mpn",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin13;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br/><br/>
     * 
     * See also <a class="localLink" href="https://schema.org/eligibleRegion">eligibleRegion</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    protected $ineligibleRegion;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin12;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $sku;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $seller;

    /**
     * The delivery method(s) available for this offer.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $availableDeliveryMethod;

    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $deliveryLeadTime;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     *
     * @var string
     */
    protected $serialNumber;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     *
     * @var DateTime|string|null
     */
    protected $availabilityEnds;

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ItemAvailability|null
     */
    protected $availability;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TypeAndQuantityNode
     */
    protected $includesObject;

    /**
     * The current approximate inventory level for the item or items.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $inventoryLevel;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BusinessFunction|null
     */
    protected $businessFunction;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $availableAtOrFrom;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BusinessEntityType|null
     */
    protected $eligibleCustomerType;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $eligibleQuantity;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    protected $itemCondition;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var DateTime|null
     */
    protected $validThrough;

    /**
     * The item being offered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product
     */
    protected $itemOffered;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     *
     * @var DateTime|string|null
     */
    protected $availabilityStarts;

    /**
     * The duration for which the given offer is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $eligibleDuration;

    /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin8;

    /**
     * The payment method(s) accepted by seller for this offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    protected $acceptedPaymentMethod;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification
     */
    protected $eligibleTransactionVolume;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var DateTime|null
     */
    protected $validFrom;

    /**
     * A Global Trade Item Number (<a href="https://www.gs1.org/standards/id-keys/gtin">GTIN</a>). GTINs identify trade items, including products and services, using numeric identification codes. The <a class="localLink" href="https://schema.org/gtin">gtin</a> property generalizes the earlier <a class="localLink" href="https://schema.org/gtin8">gtin8</a>, <a class="localLink" href="https://schema.org/gtin12">gtin12</a>, <a class="localLink" href="https://schema.org/gtin13">gtin13</a>, and <a class="localLink" href="https://schema.org/gtin14">gtin14</a> properties. The GS1 <a href="https://www.gs1.org/standards/Digital-Link/">digital link specifications</a> express GTINs as URLs. A correct <a class="localLink" href="https://schema.org/gtin">gtin</a> value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a <a href="https://www.gs1.org/services/check-digit-calculator">valid GS1 check digit</a> and meet the other rules for valid GTINs. See also <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1's GTIN Summary</a> and <a href="https://en.wikipedia.org/wiki/Global_Trade_Item_Number">Wikipedia</a> for more details. Left-padding of the gtin values is not required or encouraged.
     *
     *
     * @var string
     */
    protected $gtin;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $advanceBookingRequirement;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>
     * 
     * See also <a class="localLink" href="https://schema.org/ineligibleRegion">ineligibleRegion</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $eligibleRegion;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place
     */
    protected $areaServed;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin14;

    /**
     * The warranty promise(s) included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WarrantyPromise
     */
    protected $warranty;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification
     */
    protected $priceSpecification;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $mpn;

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
     * @return \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    public function getIneligibleRegion()
    {
        return $this->ineligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string $ineligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIneligibleRegion($ineligibleRegion)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        );

        $ineligibleRegion = self::checkTypes($ineligibleRegion, $types);

        $this->ineligibleRegion = $ineligibleRegion;
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
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        );

        $availableDeliveryMethod = self::checkTypes($availableDeliveryMethod, $types);

        $this->availableDeliveryMethod = $availableDeliveryMethod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getDeliveryLeadTime()
    {
        return $this->deliveryLeadTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $deliveryLeadTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryLeadTime($deliveryLeadTime)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $deliveryLeadTime = self::checkTypes($deliveryLeadTime, $types);

        $this->deliveryLeadTime = $deliveryLeadTime;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\ItemAvailability",
            "null",
        );

        $availability = self::checkTypes($availability, $types);

        $this->availability = $availability;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $inventoryLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInventoryLevel($inventoryLevel)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $inventoryLevel = self::checkTypes($inventoryLevel, $types);

        $this->inventoryLevel = $inventoryLevel;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\BusinessFunction",
            "null",
        );

        $businessFunction = self::checkTypes($businessFunction, $types);

        $this->businessFunction = $businessFunction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getAvailableAtOrFrom()
    {
        return $this->availableAtOrFrom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $availableAtOrFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableAtOrFrom($availableAtOrFrom)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $availableAtOrFrom = self::checkTypes($availableAtOrFrom, $types);

        $this->availableAtOrFrom = $availableAtOrFrom;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\BusinessEntityType",
            "null",
        );

        $eligibleCustomerType = self::checkTypes($eligibleCustomerType, $types);

        $this->eligibleCustomerType = $eligibleCustomerType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $eligibleQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleQuantity($eligibleQuantity)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $eligibleQuantity = self::checkTypes($eligibleQuantity, $types);

        $this->eligibleQuantity = $eligibleQuantity;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\OfferItemCondition",
            "null",
        );

        $itemCondition = self::checkTypes($itemCondition, $types);

        $this->itemCondition = $itemCondition;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getEligibleDuration()
    {
        return $this->eligibleDuration;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $eligibleDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleDuration($eligibleDuration)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $eligibleDuration = self::checkTypes($eligibleDuration, $types);

        $this->eligibleDuration = $eligibleDuration;
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
     * @return \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Enums\SchemaOrg\PaymentMethod|null $acceptedPaymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\LoanOrCredit",
            "\OpenActive\Enums\SchemaOrg\PaymentMethod",
            "null",
        );

        $acceptedPaymentMethod = self::checkTypes($acceptedPaymentMethod, $types);

        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification
     */
    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification $eligibleTransactionVolume
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleTransactionVolume($eligibleTransactionVolume)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
        );

        $eligibleTransactionVolume = self::checkTypes($eligibleTransactionVolume, $types);

        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
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
        $types = array(
            "string",
        );

        $gtin = self::checkTypes($gtin, $types);

        $this->gtin = $gtin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getAdvanceBookingRequirement()
    {
        return $this->advanceBookingRequirement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $advanceBookingRequirement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdvanceBookingRequirement($advanceBookingRequirement)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $advanceBookingRequirement = self::checkTypes($advanceBookingRequirement, $types);

        $this->advanceBookingRequirement = $advanceBookingRequirement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\GeoShape $eligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        );

        $eligibleRegion = self::checkTypes($eligibleRegion, $types);

        $this->eligibleRegion = $eligibleRegion;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
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
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification
     */
    public function getPriceSpecification()
    {
        return $this->priceSpecification;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification $priceSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceSpecification($priceSpecification)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
        );

        $priceSpecification = self::checkTypes($priceSpecification, $types);

        $this->priceSpecification = $priceSpecification;
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

}
