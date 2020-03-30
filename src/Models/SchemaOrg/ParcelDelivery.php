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
            "provider" => "provider",
            "trackingUrl" => "trackingUrl",
            "deliveryAddress" => "deliveryAddress",
            "trackingNumber" => "trackingNumber",
            "hasDeliveryMethod" => "hasDeliveryMethod",
            "deliveryStatus" => "deliveryStatus",
            "carrier" => "carrier",
            "originAddress" => "originAddress",
            "itemShipped" => "itemShipped",
            "partOfOrder" => "partOfOrder",
            "expectedArrivalFrom" => "expectedArrivalFrom",
            "expectedArrivalUntil" => "expectedArrivalUntil",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $provider;

    /**
     * Tracking url for the parcel delivery.
     *
     *
     * @var string
     */
    protected $trackingUrl;

    /**
     * Destination address.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $deliveryAddress;

    /**
     * Shipper tracking number.
     *
     *
     * @var string
     */
    protected $trackingNumber;

    /**
     * Method used for delivery or shipping.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $hasDeliveryMethod;

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DeliveryEvent
     */
    protected $deliveryStatus;

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $carrier;

    /**
     * Shipper's address.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $originAddress;

    /**
     * Item(s) being shipped.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product
     */
    protected $itemShipped;

    /**
     * The overall order the items in this delivery were included in.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Order
     */
    protected $partOfOrder;

    /**
     * The earliest date the package may arrive.
     *
     *
     * @var null|DateTime|Date
     */
    protected $expectedArrivalFrom;

    /**
     * The latest date the package may arrive.
     *
     *
     * @var null|DateTime|Date
     */
    protected $expectedArrivalUntil;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
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
        $types = array(
            "string",
        );

        $trackingUrl = self::checkTypes($trackingUrl, $types);

        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress $deliveryAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        );

        $deliveryAddress = self::checkTypes($deliveryAddress, $types);

        $this->deliveryAddress = $deliveryAddress;
    }

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
        $types = array(
            "string",
        );

        $trackingNumber = self::checkTypes($trackingNumber, $types);

        $this->trackingNumber = $trackingNumber;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        );

        $hasDeliveryMethod = self::checkTypes($hasDeliveryMethod, $types);

        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DeliveryEvent
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DeliveryEvent $deliveryStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DeliveryEvent",
        );

        $deliveryStatus = self::checkTypes($deliveryStatus, $types);

        $this->deliveryStatus = $deliveryStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $carrier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCarrier($carrier)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $carrier = self::checkTypes($carrier, $types);

        $this->carrier = $carrier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress $originAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginAddress($originAddress)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        );

        $originAddress = self::checkTypes($originAddress, $types);

        $this->originAddress = $originAddress;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product
     */
    public function getItemShipped()
    {
        return $this->itemShipped;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product $itemShipped
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemShipped($itemShipped)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $itemShipped = self::checkTypes($itemShipped, $types);

        $this->itemShipped = $itemShipped;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Order
     */
    public function getPartOfOrder()
    {
        return $this->partOfOrder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Order $partOfOrder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfOrder($partOfOrder)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Order",
        );

        $partOfOrder = self::checkTypes($partOfOrder, $types);

        $this->partOfOrder = $partOfOrder;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getExpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }

    /**
     * @param null|DateTime|Date $expectedArrivalFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectedArrivalFrom($expectedArrivalFrom)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $expectedArrivalFrom = self::checkTypes($expectedArrivalFrom, $types);

        $this->expectedArrivalFrom = $expectedArrivalFrom;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getExpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }

    /**
     * @param null|DateTime|Date $expectedArrivalUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectedArrivalUntil($expectedArrivalUntil)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $expectedArrivalUntil = self::checkTypes($expectedArrivalUntil, $types);

        $this->expectedArrivalUntil = $expectedArrivalUntil;
    }

}
