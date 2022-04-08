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
            "orderDelivery" => "orderDelivery",
            "billingAddress" => "billingAddress",
            "acceptedOffer" => "acceptedOffer",
            "merchant" => "merchant",
            "orderStatus" => "orderStatus",
            "confirmationNumber" => "confirmationNumber",
            "partOfInvoice" => "partOfInvoice",
            "orderNumber" => "orderNumber",
            "seller" => "seller",
            "customer" => "customer",
            "paymentDueDate" => "paymentDueDate",
            "broker" => "broker",
            "discountCode" => "discountCode",
            "discount" => "discount",
            "paymentMethodId" => "paymentMethodId",
            "paymentUrl" => "paymentUrl",
            "discountCurrency" => "discountCurrency",
            "paymentDue" => "paymentDue",
            "orderDate" => "orderDate",
            "isGift" => "isGift",
            "orderedItem" => "orderedItem",
            "paymentMethod" => "paymentMethod",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The delivery of the parcel related to this order or order item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ParcelDelivery|string
     */
    protected $orderDelivery;

    /**
     * The billing address for the order.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $billingAddress;

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $acceptedOffer;

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $merchant;

    /**
     * The current status of the order.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OrderStatus|string
     */
    protected $orderStatus;

    /**
     * A number that confirms the given order or payment has been received.
     *
     *
     * @var string
     */
    protected $confirmationNumber;

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Invoice|string
     */
    protected $partOfInvoice;

    /**
     * The identifier of the transaction.
     *
     *
     * @var string
     */
    protected $orderNumber;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $seller;

    /**
     * Party placing the order or paying the invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $customer;

    /**
     * The date that payment is due.
     *
     *
     * @var Date|DateTime|null
     */
    protected $paymentDueDate;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $broker;

    /**
     * Code used to redeem a discount.
     *
     *
     * @var string
     */
    protected $discountCode;

    /**
     * Any discount applied (to an Order).
     *
     *
     * @var string|Number|null
     */
    protected $discount;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     *
     * @var string
     */
    protected $paymentMethodId;

    /**
     * The URL for sending a payment.
     *
     *
     * @var string
     */
    protected $paymentUrl;

    /**
     * The currency of the discount.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR".
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
    protected $paymentDue;

    /**
     * Date order was placed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $orderDate;

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     *
     * @var bool|null
     */
    protected $isGift;

    /**
     * The item ordered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product|string
     */
    protected $orderedItem;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * @return \OpenActive\Models\SchemaOrg\ParcelDelivery|string
     */
    public function getOrderDelivery()
    {
        return $this->orderDelivery;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ParcelDelivery|string $orderDelivery
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderDelivery($orderDelivery)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ParcelDelivery",
            "string",
        ];

        $orderDelivery = self::checkTypes($orderDelivery, $types);

        $this->orderDelivery = $orderDelivery;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress|string $billingAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingAddress($billingAddress)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        ];

        $billingAddress = self::checkTypes($billingAddress, $types);

        $this->billingAddress = $billingAddress;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getAcceptedOffer()
    {
        return $this->acceptedOffer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|string $acceptedOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedOffer($acceptedOffer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $acceptedOffer = self::checkTypes($acceptedOffer, $types);

        $this->acceptedOffer = $acceptedOffer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $merchant
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchant($merchant)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $merchant = self::checkTypes($merchant, $types);

        $this->merchant = $merchant;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OrderStatus|string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OrderStatus|string $orderStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderStatus($orderStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OrderStatus",
            "string",
        ];

        $orderStatus = self::checkTypes($orderStatus, $types);

        $this->orderStatus = $orderStatus;
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
        $types = [
            "string",
        ];

        $confirmationNumber = self::checkTypes($confirmationNumber, $types);

        $this->confirmationNumber = $confirmationNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Invoice|string
     */
    public function getPartOfInvoice()
    {
        return $this->partOfInvoice;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Invoice|string $partOfInvoice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfInvoice($partOfInvoice)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Invoice",
            "string",
        ];

        $partOfInvoice = self::checkTypes($partOfInvoice, $types);

        $this->partOfInvoice = $partOfInvoice;
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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
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
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $paymentDueDate = self::checkTypes($paymentDueDate, $types);

        $this->paymentDueDate = $paymentDueDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
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
        $types = [
            "string",
        ];

        $discountCode = self::checkTypes($discountCode, $types);

        $this->discountCode = $discountCode;
    }

    /**
     * @return string|Number|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param string|Number|null $discount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscount($discount)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $discount = self::checkTypes($discount, $types);

        $this->discount = $discount;
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
        $types = [
            "string",
        ];

        $paymentMethodId = self::checkTypes($paymentMethodId, $types);

        $this->paymentMethodId = $paymentMethodId;
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
        $types = [
            "string",
        ];

        $paymentUrl = self::checkTypes($paymentUrl, $types);

        $this->paymentUrl = $paymentUrl;
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
        $types = [
            "string",
        ];

        $discountCurrency = self::checkTypes($discountCurrency, $types);

        $this->discountCurrency = $discountCurrency;
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
        $types = [
            "DateTime",
            "null",
        ];

        $paymentDue = self::checkTypes($paymentDue, $types);

        $this->paymentDue = $paymentDue;
    }

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
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $orderDate = self::checkTypes($orderDate, $types);

        $this->orderDate = $orderDate;
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
        $types = [
            "bool",
            "null",
        ];

        $isGift = self::checkTypes($isGift, $types);

        $this->isGift = $isGift;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product|string
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\OrderItem|\OpenActive\Models\SchemaOrg\Product|string $orderedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\OrderItem",
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
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
        $types = [
            "\OpenActive\Enums\SchemaOrg\PaymentMethod",
            "null",
        ];

        $paymentMethod = self::checkTypes($paymentMethod, $types);

        $this->paymentMethod = $paymentMethod;
    }

}
