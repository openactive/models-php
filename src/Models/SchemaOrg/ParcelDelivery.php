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
    static public function getType()
    {
        return "schema:ParcelDelivery";
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var Organization|Person
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
     * @var PostalAddress
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
     * @var Schema.NET.DeliveryMethod|null
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
     * @var Organization
     */
    protected $carrier;

    /**
     * Shipper's address.
     *
     *
     * @var PostalAddress
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
     * @var Order
     */
    protected $partOfOrder;

    /**
     * The earliest date the package may arrive.
     *
     *
     * @var DateTime|null
     */
    protected $expectedArrivalFrom;

    /**
     * The latest date the package may arrive.
     *
     *
     * @var DateTime|null
     */
    protected $expectedArrivalUntil;

    /**
     * @return Organization|Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param Organization|Person $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "Organization",
            "Person",
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
     * @return PostalAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param PostalAddress $deliveryAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $types = array(
            "PostalAddress",
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
     * @return Schema.NET.DeliveryMethod|null
     */
    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    /**
     * @param Schema.NET.DeliveryMethod|null $hasDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $types = array(
            "Schema.NET.DeliveryMethod",
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
     * @return Organization
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param Organization $carrier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCarrier($carrier)
    {
        $types = array(
            "Organization",
        );

        $carrier = self::checkTypes($carrier, $types);

        $this->carrier = $carrier;
    }

    /**
     * @return PostalAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * @param PostalAddress $originAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginAddress($originAddress)
    {
        $types = array(
            "PostalAddress",
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
     * @return Order
     */
    public function getPartOfOrder()
    {
        return $this->partOfOrder;
    }

    /**
     * @param Order $partOfOrder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfOrder($partOfOrder)
    {
        $types = array(
            "Order",
        );

        $partOfOrder = self::checkTypes($partOfOrder, $types);

        $this->partOfOrder = $partOfOrder;
    }

    /**
     * @return DateTime|null
     */
    public function getExpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }

    /**
     * @param DateTime|null $expectedArrivalFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectedArrivalFrom($expectedArrivalFrom)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $expectedArrivalFrom = self::checkTypes($expectedArrivalFrom, $types);

        $this->expectedArrivalFrom = $expectedArrivalFrom;
    }

    /**
     * @return DateTime|null
     */
    public function getExpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }

    /**
     * @param DateTime|null $expectedArrivalUntil
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectedArrivalUntil($expectedArrivalUntil)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $expectedArrivalUntil = self::checkTypes($expectedArrivalUntil, $types);

        $this->expectedArrivalUntil = $expectedArrivalUntil;
    }

}
