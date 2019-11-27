<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Invoice extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Invoice";
    }

    public static function fieldList() {
        $fields = [
            "paymentStatus" => "paymentStatus",
            "paymentDueDate" => "paymentDueDate",
            "broker" => "broker",
            "provider" => "provider",
            "referencesOrder" => "referencesOrder",
            "billingPeriod" => "billingPeriod",
            "accountId" => "accountId",
            "totalPaymentDue" => "totalPaymentDue",
            "minimumPaymentDue" => "minimumPaymentDue",
            "paymentMethodId" => "paymentMethodId",
            "paymentMethod" => "paymentMethod",
            "scheduledPaymentDate" => "scheduledPaymentDate",
            "confirmationNumber" => "confirmationNumber",
            "paymentDue" => "paymentDue",
            "category" => "category",
            "customer" => "customer",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PaymentStatusType|string|null
     */
    protected $paymentStatus;

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDueDate;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $broker;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $provider;

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Order
     */
    protected $referencesOrder;

    /**
     * The time interval used to compute the invoice.
     *
     *
     * @var DateInterval|null
     */
    protected $billingPeriod;

    /**
     * The identifier for the account the payment will be applied to.
     *
     *
     * @var string
     */
    protected $accountId;

    /**
     * The total amount due.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification
     */
    protected $totalPaymentDue;

    /**
     * The minimum payment required at this time.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification
     */
    protected $minimumPaymentDue;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     *
     * @var string
     */
    protected $paymentMethodId;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * The date the invoice is scheduled to be paid.
     *
     *
     * @var DateTime|null
     */
    protected $scheduledPaymentDate;

    /**
     * A number that confirms the given order or payment has been received.
     *
     *
     * @var string
     */
    protected $confirmationNumber;

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDue;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $category;

    /**
     * Party placing the order or paying the invoice.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $customer;

    /**
     * @return \OpenActive\Enums\SchemaOrg\PaymentStatusType|string|null
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PaymentStatusType|string|null $paymentStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentStatus($paymentStatus)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\PaymentStatusType",
            "string",
            "null",
        );

        $paymentStatus = self::checkTypes($paymentStatus, $types);

        $this->paymentStatus = $paymentStatus;
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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $broker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroker($broker)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $broker = self::checkTypes($broker, $types);

        $this->broker = $broker;
    }

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
     * @return \OpenActive\Models\SchemaOrg\Order
     */
    public function getReferencesOrder()
    {
        return $this->referencesOrder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Order $referencesOrder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReferencesOrder($referencesOrder)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Order",
        );

        $referencesOrder = self::checkTypes($referencesOrder, $types);

        $this->referencesOrder = $referencesOrder;
    }

    /**
     * @return DateInterval|null
     */
    public function getBillingPeriod()
    {
        return $this->billingPeriod;
    }

    /**
     * @param DateInterval|null $billingPeriod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBillingPeriod($billingPeriod)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $billingPeriod = self::checkTypes($billingPeriod, $types);

        $this->billingPeriod = $billingPeriod;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccountId($accountId)
    {
        $types = array(
            "string",
        );

        $accountId = self::checkTypes($accountId, $types);

        $this->accountId = $accountId;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification
     */
    public function getTotalPaymentDue()
    {
        return $this->totalPaymentDue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification $totalPaymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPaymentDue($totalPaymentDue)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
        );

        $totalPaymentDue = self::checkTypes($totalPaymentDue, $types);

        $this->totalPaymentDue = $totalPaymentDue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification
     */
    public function getMinimumPaymentDue()
    {
        return $this->minimumPaymentDue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification $minimumPaymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinimumPaymentDue($minimumPaymentDue)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
        );

        $minimumPaymentDue = self::checkTypes($minimumPaymentDue, $types);

        $this->minimumPaymentDue = $minimumPaymentDue;
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
     * @return DateTime|null
     */
    public function getScheduledPaymentDate()
    {
        return $this->scheduledPaymentDate;
    }

    /**
     * @param DateTime|null $scheduledPaymentDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScheduledPaymentDate($scheduledPaymentDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $scheduledPaymentDate = self::checkTypes($scheduledPaymentDate, $types);

        $this->scheduledPaymentDate = $scheduledPaymentDate;
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
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $customer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomer($customer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $customer = self::checkTypes($customer, $types);

        $this->customer = $customer;
    }

}
