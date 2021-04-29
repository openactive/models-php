<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Order, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Order extends \OpenActive\Models\SchemaOrg\Order
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Order";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "bookingService" => "bookingService",
            "broker" => "broker",
            "brokerRole" => "brokerRole",
            "customer" => "customer",
            "orderCreationStatus" => "orderCreationStatus",
            "orderedItem" => "orderedItem",
            "orderNumber" => "orderNumber",
            "orderProposalVersion" => "orderProposalVersion",
            "payment" => "payment",
            "seller" => "seller",
            "taxCalculationExcluded" => "taxCalculationExcluded",
            "totalPaymentDue" => "totalPaymentDue",
            "totalPaymentTax" => "totalPaymentTax",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The Order UUID of the Order, OrderQuote or OrderProposal, which is required within the Orders feed.
     *
     * ```json
     * "identifier": "123e4567-e89b-12d3-a456-426614174000"
     * ```
     *
     * @var string
     */
    protected $identifier;

    /**
     * Details about the Booking System
     *
     *
     * @var \OpenActive\Models\OA\BookingService
     */
    protected $bookingService;

    /**
     * The organisation or developer providing an application that allows Customers to make bookings. Those applications will be clients of the API defined in this specification. If brokerRole is set to https://openactive.io/NoBroker this is not required.
     *
     *
     * @var \OpenActive\Models\OA\Organization
     */
    protected $broker;

    /**
     * Either https://openactive.io/AgentBroker,  https://openactive.io/ResellerBroker or  https://openactive.io/NoBroker, as agreed in advance between the Broker and Seller.
     *
     *
     * @var \OpenActive\Enums\BrokerType|null
     */
    protected $brokerRole;

    /**
     * The person or organization purchasing the Order.
     *
     *
     * @var \OpenActive\Models\OA\Organization|\OpenActive\Models\OA\Person
     */
    protected $customer;

    /**
     * This property is internal to the Broker in this version of the specification.
     *
     *
     * @var \OpenActive\Enums\OrderCreationStatus|null
     */
    protected $orderCreationStatus;

    /**
     * The items that constitute the Order.
     *
     *
     * @var \OpenActive\Models\OA\OrderItem[]
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
     * @var \OpenActive\Models\OA\Payment
     */
    protected $payment;

    /**
     * The organisation (schema:Organization) or person (schema:Person) providing access to events or facilities via a Booking System. e.g. a leisure provider or independent instructor running a yoga classes.
     *
     *
     * @var \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization|string
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
     * @var \OpenActive\Models\OA\PriceSpecification
     */
    protected $totalPaymentDue;

    /**
     * Breakdown of tax payable for the Order.
     *
     *
     * @var \OpenActive\Models\OA\TaxChargeSpecification[]
     */
    protected $totalPaymentTax;

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "string",
        ];

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return \OpenActive\Models\OA\BookingService
     */
    public function getBookingService()
    {
        return $this->bookingService;
    }

    /**
     * @param \OpenActive\Models\OA\BookingService $bookingService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookingService($bookingService)
    {
        $types = [
            "\OpenActive\Models\OA\BookingService",
        ];

        $bookingService = self::checkTypes($bookingService, $types);

        $this->bookingService = $bookingService;
    }

    /**
     * @return \OpenActive\Models\OA\Organization
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\OA\Organization $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = [
            "\OpenActive\Models\OA\Organization",
        ];

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return \OpenActive\Enums\BrokerType|null
     */
    public function getBrokerRole()
    {
        return $this->brokerRole;
    }

    /**
     * @param \OpenActive\Enums\BrokerType|null $brokerRole
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrokerRole($brokerRole)
    {
        $types = [
            "\OpenActive\Enums\BrokerType",
            "null",
        ];

        $brokerRole = self::checkTypes($brokerRole, $types);

        $this->brokerRole = $brokerRole;
    }

    /**
     * @return \OpenActive\Models\OA\Organization|\OpenActive\Models\OA\Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \OpenActive\Models\OA\Organization|\OpenActive\Models\OA\Person $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = [
            "\OpenActive\Models\OA\Organization",
            "\OpenActive\Models\OA\Person",
        ];

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
    }

    /**
     * @return \OpenActive\Enums\OrderCreationStatus|null
     */
    public function getOrderCreationStatus()
    {
        return $this->orderCreationStatus;
    }

    /**
     * @param \OpenActive\Enums\OrderCreationStatus|null $orderCreationStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderCreationStatus($orderCreationStatus)
    {
        $types = [
            "\OpenActive\Enums\OrderCreationStatus",
            "null",
        ];

        $orderCreationStatus = self::checkTypes($orderCreationStatus, $types);

        $this->orderCreationStatus = $orderCreationStatus;
    }

    /**
     * @return \OpenActive\Models\OA\OrderItem[]
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\OA\OrderItem[] $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = [
            "\OpenActive\Models\OA\OrderItem[]",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderNumber($orderNumber)
    {
        $types = [
            "string",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderProposalVersion($orderProposalVersion)
    {
        $types = [
            "string",
        ];

        $orderProposalVersion = self::checkTypes($orderProposalVersion, $types);

        $this->orderProposalVersion = $orderProposalVersion;
    }

    /**
     * @return \OpenActive\Models\OA\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param \OpenActive\Models\OA\Payment $payment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPayment($payment)
    {
        $types = [
            "\OpenActive\Models\OA\Payment",
        ];

        $payment = self::checkTypes($payment, $types);

        $this->payment = $payment;
    }

    /**
     * @return \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization|string
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization|string $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = [
            "\OpenActive\Models\OA\Person",
            "\OpenActive\Models\OA\Organization",
            "string",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTaxCalculationExcluded($taxCalculationExcluded)
    {
        $types = [
            "bool",
            "null",
        ];

        $taxCalculationExcluded = self::checkTypes($taxCalculationExcluded, $types);

        $this->taxCalculationExcluded = $taxCalculationExcluded;
    }

    /**
     * @return \OpenActive\Models\OA\PriceSpecification
     */
    public function getTotalPaymentDue()
    {
        return $this->totalPaymentDue;
    }

    /**
     * @param \OpenActive\Models\OA\PriceSpecification $totalPaymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPaymentDue($totalPaymentDue)
    {
        $types = [
            "\OpenActive\Models\OA\PriceSpecification",
        ];

        $totalPaymentDue = self::checkTypes($totalPaymentDue, $types);

        $this->totalPaymentDue = $totalPaymentDue;
    }

    /**
     * @return \OpenActive\Models\OA\TaxChargeSpecification[]
     */
    public function getTotalPaymentTax()
    {
        return $this->totalPaymentTax;
    }

    /**
     * @param \OpenActive\Models\OA\TaxChargeSpecification[] $totalPaymentTax
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPaymentTax($totalPaymentTax)
    {
        $types = [
            "\OpenActive\Models\OA\TaxChargeSpecification[]",
        ];

        $totalPaymentTax = self::checkTypes($totalPaymentTax, $types);

        $this->totalPaymentTax = $totalPaymentTax;
    }

}
