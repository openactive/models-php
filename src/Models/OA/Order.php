<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Order](https://schema.org/Order), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Order extends \OpenActive\Models\SchemaOrg\Order
{
    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
     */
    protected $identifier;

    /**
     * Details about the Booking System
     *
     *
     * @var BookingService
     */
    protected $bookingService;

    /**
     * The organisation or developer providing an application that allows Customers to make bookings. Those applications will be clients of the API defined in this specification. If brokerRole is set to https://openactive/NoBroker this is not required.
     *
     *
     * @var Organization
     */
    protected $broker;

    /**
     * Either https://openactive/AgentBroker,  https://openactive/ResellerBroker or  https://openactive/NoBroker, as agreed in advance between the Broker and Seller.
     *
     *
     * @var BrokerType|null
     */
    protected $brokerRole;

    /**
     * The person or organization purchasing the Order.
     *
     *
     * @var Organization|Person
     */
    protected $customer;

    /**
     * This property is internal to the Broker in this version of the specification.
     *
     *
     * @var OrderCreationStatus|null
     */
    protected $orderCreationStatus;

    /**
     * The items that constitute the Order.
     *
     *
     * @var OrderItem[]
     */
    protected $orderedItem;

    /**
     * The Customer-facing identifier of the Order.
     *
     *
     * @var string
     */
    protected $orderNumber;

    /**
     * The unique URL representing this version of the  OrderProposal, or the version of the OrderProposal to which this Order is related.
     *
     *
     * @var string
     */
    protected $orderProposalVersion;

    /**
     * The payment associated with the Order by the Broker. It is required for cases where a payment has been taken.
     *
     *
     * @var Payment
     */
    protected $payment;

    /**
     * The organisation (schema:Organization) providing access to events or facilities via a Booking System. e.g. a leisure provider running yoga classes.
     *
     *
     * @var Organization
     */
    protected $seller;

    /**
     * Set to true when business-to-business tax calculation is required by the seller or brokerRole settings, but not supported by the Broker.
     *
     *
     * @var bool|null
     */
    protected $taxCalculationExcluded;

    /**
     *
     *
     * @var PriceSpecification
     */
    protected $totalPaymentDue;

    /**
     * Breakdown of tax payable for the Order.
     *
     *
     * @var TaxChargeSpecification[]
     */
    protected $totalPaymentTax;

    /**
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return BookingService
     */
    public function getBookingService()
    {
        return $this->bookingService;
    }

    /**
     * @param BookingService $bookingService
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBookingService($bookingService)
    {
        $types = array(
            "BookingService",
        );

        $bookingService = self::checkTypes($bookingService, $types);

        $this->bookingService = $bookingService;
    }

    /**
     * @return Organization
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param Organization $broker
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = array(
            "Organization",
        );

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return BrokerType|null
     */
    public function getBrokerRole()
    {
        return $this->brokerRole;
    }

    /**
     * @param BrokerType|null $brokerRole
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBrokerRole($brokerRole)
    {
        $types = array(
            "BrokerType",
            "null",
        );

        $brokerRole = self::checkTypes($brokerRole, $types);

        $this->brokerRole = $brokerRole;
    }

    /**
     * @return Organization|Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Organization|Person $customer
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
    }

    /**
     * @return OrderCreationStatus|null
     */
    public function getOrderCreationStatus()
    {
        return $this->orderCreationStatus;
    }

    /**
     * @param OrderCreationStatus|null $orderCreationStatus
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderCreationStatus($orderCreationStatus)
    {
        $types = array(
            "OrderCreationStatus",
            "null",
        );

        $orderCreationStatus = self::checkTypes($orderCreationStatus, $types);

        $this->orderCreationStatus = $orderCreationStatus;
    }

    /**
     * @return OrderItem[]
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param OrderItem[] $orderedItem
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = array(
            "OrderItem[]",
        );

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderNumber($orderNumber)
    {
        $types = array(
            "string",
        );

        $orderNumber = self::checkTypes($orderNumber, $types);

        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getOrderProposalVersion()
    {
        return $this->orderProposalVersion;
    }

    /**
     * @param string $orderProposalVersion
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderProposalVersion($orderProposalVersion)
    {
        $types = array(
            "string",
        );

        $orderProposalVersion = self::checkTypes($orderProposalVersion, $types);

        $this->orderProposalVersion = $orderProposalVersion;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPayment($payment)
    {
        $types = array(
            "Payment",
        );

        $payment = self::checkTypes($payment, $types);

        $this->payment = $payment;
    }

    /**
     * @return Organization
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Organization $seller
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = array(
            "Organization",
        );

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
    }

    /**
     * @return bool|null
     */
    public function getTaxCalculationExcluded()
    {
        return $this->taxCalculationExcluded;
    }

    /**
     * @param bool|null $taxCalculationExcluded
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTaxCalculationExcluded($taxCalculationExcluded)
    {
        $types = array(
            "bool",
            "null",
        );

        $taxCalculationExcluded = self::checkTypes($taxCalculationExcluded, $types);

        $this->taxCalculationExcluded = $taxCalculationExcluded;
    }

    /**
     * @return PriceSpecification
     */
    public function getTotalPaymentDue()
    {
        return $this->totalPaymentDue;
    }

    /**
     * @param PriceSpecification $totalPaymentDue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTotalPaymentDue($totalPaymentDue)
    {
        $types = array(
            "PriceSpecification",
        );

        $totalPaymentDue = self::checkTypes($totalPaymentDue, $types);

        $this->totalPaymentDue = $totalPaymentDue;
    }

    /**
     * @return TaxChargeSpecification[]
     */
    public function getTotalPaymentTax()
    {
        return $this->totalPaymentTax;
    }

    /**
     * @param TaxChargeSpecification[] $totalPaymentTax
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTotalPaymentTax($totalPaymentTax)
    {
        $types = array(
            "TaxChargeSpecification[]",
        );

        $totalPaymentTax = self::checkTypes($totalPaymentTax, $types);

        $this->totalPaymentTax = $totalPaymentTax;
    }

}
