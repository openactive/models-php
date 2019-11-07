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

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     *
     * @var bool|null
     */
    protected $isGift;

    /**
     * Code used to redeem a discount.
     *
     *
     * @var string
     */
    protected $discountCode;

    /**
     * The billing address for the order.
     *
     *
     * @var PostalAddress
     */
    protected $billingAddress;

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDue;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     *
     * @var \OpenActive\Enums\PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * The URL for sending a payment.
     *
     *
     * @var string
     */
    protected $paymentUrl;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var Person|Organization
     */
    protected $seller;

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Invoice
     */
    protected $partOfInvoice;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     *
     * @var string
     */
    protected $paymentMethodId;

    /**
     * Date order was placed.
     *
     *
     * @var DateTime|null
     */
    protected $orderDate;

    /**
     * Any discount applied (to an Order).
     *
     *
     * @var string|float|null
     */
    protected $discount;

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     *
     * @var Person|Organization
     */
    protected $merchant;

    /**
     * The item ordered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem
     */
    protected $orderedItem;

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDueDate;

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
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     *
     * @var Offer
     */
    protected $acceptedOffer;

    /**
     * The delivery of the parcel related to this order or order item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ParcelDelivery
     */
    protected $orderDelivery;

    /**
     * The identifier of the transaction.
     *
     *
     * @var string
     */
    protected $orderNumber;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var Organization|Person
     */
    protected $broker;

    /**
     * Party placing the order or paying the invoice.
     *
     *
     * @var Person|Organization
     */
    protected $customer;

    /**
     * A number that confirms the given order or payment has been received.
     *
     *
     * @var string
     */
    protected $confirmationNumber;

    /**
     * The current status of the order.
     *
     *
     * @var \OpenActive\Enums\OrderStatus|null
     */
    protected $orderStatus;

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
     * @return \OpenActive\Enums\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param \OpenActive\Enums\PaymentMethod|null $paymentMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentMethod($paymentMethod)
    {
        $types = array(
            "\OpenActive\Enums\PaymentMethod",
            "null",
        );

        $paymentMethod = self::checkTypes($paymentMethod, $types);

        $this->paymentMethod = $paymentMethod;
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
     * @return Organization|Person
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param Organization|Person $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

    /**
     * @return Person|Organization
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Person|Organization $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
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
     * @return \OpenActive\Enums\OrderStatus|null
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param \OpenActive\Enums\OrderStatus|null $orderStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderStatus($orderStatus)
    {
        $types = array(
            "\OpenActive\Enums\OrderStatus",
            "null",
        );

        $orderStatus = self::checkTypes($orderStatus, $types);

        $this->orderStatus = $orderStatus;
    }

}
