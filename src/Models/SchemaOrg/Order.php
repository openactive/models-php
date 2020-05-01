<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Order extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Order";
    }

    public static function fieldList() {
        $fields = [
            "orderDate" => "orderDate",
            "paymentDue" => "paymentDue",
            "orderNumber" => "orderNumber",
            "paymentUrl" => "paymentUrl",
            "orderStatus" => "orderStatus",
            "billingAddress" => "billingAddress",
            "partOfInvoice" => "partOfInvoice",
            "confirmationNumber" => "confirmationNumber",
            "customer" => "customer",
            "merchant" => "merchant",
            "broker" => "broker",
            "isGift" => "isGift",
            "paymentMethod" => "paymentMethod",
            "seller" => "seller",
            "paymentMethodId" => "paymentMethodId",
            "discount" => "discount",
            "orderDelivery" => "orderDelivery",
            "orderedItem" => "orderedItem",
            "acceptedOffer" => "acceptedOffer",
            "discountCurrency" => "discountCurrency",
            "paymentDueDate" => "paymentDueDate",
            "discountCode" => "discountCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Date order was placed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $orderDate;

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDue;

    /**
     * The identifier of the transaction.
     *
     *
     * @var string
     */
    protected $orderNumber;

    /**
     * The URL for sending a payment.
     *
     *
     * @var string
     */
    protected $paymentUrl;

    /**
     * The current status of the order.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\OrderStatus|null
     */
    protected $orderStatus;

    /**
     * The billing address for the order.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $billingAddress;

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Invoice
     */
    protected $partOfInvoice;

    /**
     * A number that confirms the given order or payment has been received.
     *
     *
     * @var string
     */
    protected $confirmationNumber;

    /**
     * Party placing the order or paying the invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $customer;

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $merchant;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $broker;

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     *
     * @var bool|null
     */
    protected $isGift;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $seller;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     *
     * @var string
     */
    protected $paymentMethodId;

    /**
     * Any discount applied (to an Order).
     *
     *
     * @var string|float|null
     */
    protected $discount;

    /**
     * The delivery of the parcel related to this order or order item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ParcelDelivery
     */
    protected $orderDelivery;

    /**
     * The item ordered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product
     */
    protected $orderedItem;

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer
     */
    protected $acceptedOffer;

    /**
     * The currency of the discount.<br/><br/>
     * 
     * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     *
     * @var string
     */
    protected $discountCurrency;

    /**
     * The date that payment is due.
     *
     *
     * @var Date|DateTime|null
     */
    protected $paymentDueDate;

    /**
     * Code used to redeem a discount.
     *
     *
     * @var string
     */
    protected $discountCode;

    /**
     * @return Date|DateTime|null
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param Date|DateTime|null $orderDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderDate($orderDate)
    {
        $types = array(
            "Date",
            "DateTime",
            "null",
        );

        $orderDate = self::checkTypes($orderDate, $types);

        $this->orderDate = $orderDate;
    }

    /**
     * @return DateTime|null
     */
    public function getPaymentDue()
    {
        return $this->paymentDue;
    }

    /**
     * @param DateTime|null $paymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentDue($paymentDue)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $paymentDue = self::checkTypes($paymentDue, $types);

        $this->paymentDue = $paymentDue;
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
        $types = array(
            "string",
        );

        $orderNumber = self::checkTypes($orderNumber, $types);

        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    /**
     * @param string $paymentUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentUrl($paymentUrl)
    {
        $types = array(
            "string",
        );

        $paymentUrl = self::checkTypes($paymentUrl, $types);

        $this->paymentUrl = $paymentUrl;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\OrderStatus|null
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\OrderStatus|null $orderStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderStatus($orderStatus)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\OrderStatus",
            "null",
        );

        $orderStatus = self::checkTypes($orderStatus, $types);

        $this->orderStatus = $orderStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress $billingAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingAddress($billingAddress)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        );

        $billingAddress = self::checkTypes($billingAddress, $types);

        $this->billingAddress = $billingAddress;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Invoice
     */
    public function getPartOfInvoice()
    {
        return $this->partOfInvoice;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Invoice $partOfInvoice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfInvoice($partOfInvoice)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Invoice",
        );

        $partOfInvoice = self::checkTypes($partOfInvoice, $types);

        $this->partOfInvoice = $partOfInvoice;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * @param string $confirmationNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $types = array(
            "string",
        );

        $confirmationNumber = self::checkTypes($confirmationNumber, $types);

        $this->confirmationNumber = $confirmationNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $merchant
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchant($merchant)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $merchant = self::checkTypes($merchant, $types);

        $this->merchant = $merchant;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return bool|null
     */
    public function getIsGift()
    {
        return $this->isGift;
    }

    /**
     * @param bool|null $isGift
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsGift($isGift)
    {
        $types = array(
            "bool",
            "null",
        );

        $isGift = self::checkTypes($isGift, $types);

        $this->isGift = $isGift;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PaymentMethod|null $paymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentMethod($paymentMethod)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\PaymentMethod",
            "null",
        );

        $paymentMethod = self::checkTypes($paymentMethod, $types);

        $this->paymentMethod = $paymentMethod;
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
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $types = array(
            "string",
        );

        $paymentMethodId = self::checkTypes($paymentMethodId, $types);

        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return string|float|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param string|float|null $discount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscount($discount)
    {
        $types = array(
            "string",
            "float",
            "null",
        );

        $discount = self::checkTypes($discount, $types);

        $this->discount = $discount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ParcelDelivery
     */
    public function getOrderDelivery()
    {
        return $this->orderDelivery;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ParcelDelivery $orderDelivery
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderDelivery($orderDelivery)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ParcelDelivery",
        );

        $orderDelivery = self::checkTypes($orderDelivery, $types);

        $this->orderDelivery = $orderDelivery;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\OrderItem",
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer
     */
    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer $acceptedOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedOffer($acceptedOffer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Offer",
        );

        $acceptedOffer = self::checkTypes($acceptedOffer, $types);

        $this->acceptedOffer = $acceptedOffer;
    }

    /**
     * @return string
     */
    public function getDiscountCurrency()
    {
        return $this->discountCurrency;
    }

    /**
     * @param string $discountCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscountCurrency($discountCurrency)
    {
        $types = array(
            "string",
        );

        $discountCurrency = self::checkTypes($discountCurrency, $types);

        $this->discountCurrency = $discountCurrency;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * @param Date|DateTime|null $paymentDueDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentDueDate($paymentDueDate)
    {
        $types = array(
            "Date",
            "DateTime",
            "null",
        );

        $paymentDueDate = self::checkTypes($paymentDueDate, $types);

        $this->paymentDueDate = $paymentDueDate;
    }

    /**
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * @param string $discountCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscountCode($discountCode)
    {
        $types = array(
            "string",
        );

        $discountCode = self::checkTypes($discountCode, $types);

        $this->discountCode = $discountCode;
    }

}
