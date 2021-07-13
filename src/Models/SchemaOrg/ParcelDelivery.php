<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ParcelDelivery extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ParcelDelivery";
    }

    public static function fieldList() {
        $fields = [
            "trackingNumber" => "trackingNumber",
            "itemShipped" => "itemShipped",
            "trackingUrl" => "trackingUrl",
            "expectedArrivalFrom" => "expectedArrivalFrom",
            "expectedArrivalUntil" => "expectedArrivalUntil",
            "deliveryAddress" => "deliveryAddress",
            "hasDeliveryMethod" => "hasDeliveryMethod",
            "carrier" => "carrier",
            "originAddress" => "originAddress",
            "provider" => "provider",
            "deliveryStatus" => "deliveryStatus",
            "partOfOrder" => "partOfOrder",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Shipper tracking number.
     *
     *
     * @var string
     */
    protected $trackingNumber;

    /**
     * Item(s) being shipped.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $itemShipped;

    /**
     * Tracking url for the parcel delivery.
     *
     *
     * @var string
     */
    protected $trackingUrl;

    /**
     * The earliest date the package may arrive.
     *
     *
     * @var Date|DateTime|null
     */
    protected $expectedArrivalFrom;

    /**
     * The latest date the package may arrive.
     *
     *
     * @var Date|DateTime|null
     */
    protected $expectedArrivalUntil;

    /**
     * Destination address.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $deliveryAddress;

    /**
     * Method used for delivery or shipping.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $hasDeliveryMethod;

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $carrier;

    /**
     * Shipper's address.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $originAddress;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $provider;

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DeliveryEvent|string
     */
    protected $deliveryStatus;

    /**
     * The overall order the items in this delivery were included in.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Order|string
     */
    protected $partOfOrder;

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrackingNumber($trackingNumber)
    {
        $types = [
            "string",
        ];

        $trackingNumber = self::checkTypes($trackingNumber, $types);

        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getItemShipped()
    {
        return $this->itemShipped;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $itemShipped
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemShipped($itemShipped)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $itemShipped = self::checkTypes($itemShipped, $types);

        $this->itemShipped = $itemShipped;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrackingUrl($trackingUrl)
    {
        $types = [
            "string",
        ];

        $trackingUrl = self::checkTypes($trackingUrl, $types);

        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getExpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }

    /**
     * @param Date|DateTime|null $expectedArrivalFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectedArrivalFrom($expectedArrivalFrom)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $expectedArrivalFrom = self::checkTypes($expectedArrivalFrom, $types);

        $this->expectedArrivalFrom = $expectedArrivalFrom;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getExpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }

    /**
     * @param Date|DateTime|null $expectedArrivalUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectedArrivalUntil($expectedArrivalUntil)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $expectedArrivalUntil = self::checkTypes($expectedArrivalUntil, $types);

        $this->expectedArrivalUntil = $expectedArrivalUntil;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress|string $deliveryAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        ];

        $deliveryAddress = self::checkTypes($deliveryAddress, $types);

        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DeliveryMethod|null $hasDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        ];

        $hasDeliveryMethod = self::checkTypes($hasDeliveryMethod, $types);

        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $carrier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCarrier($carrier)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $carrier = self::checkTypes($carrier, $types);

        $this->carrier = $carrier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress|string $originAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginAddress($originAddress)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        ];

        $originAddress = self::checkTypes($originAddress, $types);

        $this->originAddress = $originAddress;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DeliveryEvent|string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DeliveryEvent|string $deliveryStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DeliveryEvent",
            "string",
        ];

        $deliveryStatus = self::checkTypes($deliveryStatus, $types);

        $this->deliveryStatus = $deliveryStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Order|string
     */
    public function getPartOfOrder()
    {
        return $this->partOfOrder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Order|string $partOfOrder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfOrder($partOfOrder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Order",
            "string",
        ];

        $partOfOrder = self::checkTypes($partOfOrder, $types);

        $this->partOfOrder = $partOfOrder;
    }

}
