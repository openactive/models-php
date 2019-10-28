<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Order extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * Date order was placed.
     *
     *
     * @var DateTime|null
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
     * @var Schema.NET.OrderStatus|null
     */
    protected $orderStatus;

    /**
     * The billing address for the order.
     *
     *
     * @var PostalAddress
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
     * @var Organization|Person
     */
    protected $customer;

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     *
     * @var Person|Organization
     */
    protected $merchant;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var Person|Organization
     */
    protected $broker;

    /**
     * The item ordered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem
     */
    protected $orderedItem;

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
     * @var Schema.NET.PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var Person|Organization
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
     * @var string|decimal|null
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
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     *
     * @var Offer
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
     * @var DateTime|null
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
     * @return DateTime|null
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param DateTime|null $orderDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderDate($orderDate)
    {
        $types = array(
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
     * @return Schema.NET.OrderStatus|null
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param Schema.NET.OrderStatus|null $orderStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderStatus($orderStatus)
    {
        $types = array(
            "Schema.NET.OrderStatus",
            "null",
        );

        $orderStatus = self::checkTypes($orderStatus, $types);

        $this->orderStatus = $orderStatus;
    }

    /**
     * @return PostalAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param PostalAddress $billingAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingAddress($billingAddress)
    {
        $types = array(
            "PostalAddress",
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
     * @return Organization|Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Organization|Person $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return Person|Organization
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param Person|Organization $merchant
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchant($merchant)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $merchant = self::checkTypes($merchant, $types);

        $this->merchant = $merchant;
    }

    /**
     * @return Person|Organization
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param Person|Organization $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "OrderItem",
        );

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
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
     * @return Schema.NET.PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param Schema.NET.PaymentMethod|null $paymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentMethod($paymentMethod)
    {
        $types = array(
            "Schema.NET.PaymentMethod",
            "null",
        );

        $paymentMethod = self::checkTypes($paymentMethod, $types);

        $this->paymentMethod = $paymentMethod;
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
     * @return string|decimal|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param string|decimal|null $discount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscount($discount)
    {
        $types = array(
            "string",
            "decimal",
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
     * @return Offer
     */
    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    /**
     * @param Offer $acceptedOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedOffer($acceptedOffer)
    {
        $types = array(
            "Offer",
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
     * @return DateTime|null
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * @param DateTime|null $paymentDueDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentDueDate($paymentDueDate)
    {
        $types = array(
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
