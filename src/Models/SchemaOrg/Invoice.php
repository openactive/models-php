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

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var Organization|Person
     */
    protected $provider;

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDue;

    /**
     * The time interval used to compute the invoice.
     *
     *
     * @var DateInterval|null
     */
    protected $billingPeriod;

    /**
     * A number that confirms the given order or payment has been received.
     *
     *
     * @var string
     */
    protected $confirmationNumber;

    /**
     * The identifier for the account the payment will be applied to.
     *
     *
     * @var string
     */
    protected $accountId;

    /**
     * The date the invoice is scheduled to be paid.
     *
     *
     * @var DateTime|null
     */
    protected $scheduledPaymentDate;

    /**
     * Party placing the order or paying the invoice.
     *
     *
     * @var Person|Organization
     */
    protected $customer;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory
     */
    protected $category;

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     *
     * @var Schema.NET.PaymentStatusType|string|null
     */
    protected $paymentStatus;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     *
     * @var Organization|Person
     */
    protected $broker;

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     *
     *
     * @var Order
     */
    protected $referencesOrder;

    /**
     * The name of the credit card or other method of payment for the order.
     *
     *
     * @var Schema.NET.PaymentMethod|null
     */
    protected $paymentMethod;

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     *
     * @var string
     */
    protected $paymentMethodId;

    /**
     * The minimum payment required at this time.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|PriceSpecification
     */
    protected $minimumPaymentDue;

    /**
     * The total amount due.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|PriceSpecification
     */
    protected $totalPaymentDue;

    /**
     * The date that payment is due.
     *
     *
     * @var DateTime|null
     */
    protected $paymentDueDate;

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
     * @return string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\PhysicalActivityCategory",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return Schema.NET.PaymentStatusType|string|null
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @param Schema.NET.PaymentStatusType|string|null $paymentStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPaymentStatus($paymentStatus)
    {
        $types = array(
            "Schema.NET.PaymentStatusType",
            "string",
            "null",
        );

        $paymentStatus = self::checkTypes($paymentStatus, $types);

        $this->paymentStatus = $paymentStatus;
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
     * @return Order
     */
    public function getReferencesOrder()
    {
        return $this->referencesOrder;
    }

    /**
     * @param Order $referencesOrder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReferencesOrder($referencesOrder)
    {
        $types = array(
            "Order",
        );

        $referencesOrder = self::checkTypes($referencesOrder, $types);

        $this->referencesOrder = $referencesOrder;
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
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|PriceSpecification
     */
    public function getMinimumPaymentDue()
    {
        return $this->minimumPaymentDue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|PriceSpecification $minimumPaymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinimumPaymentDue($minimumPaymentDue)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "PriceSpecification",
        );

        $minimumPaymentDue = self::checkTypes($minimumPaymentDue, $types);

        $this->minimumPaymentDue = $minimumPaymentDue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|PriceSpecification
     */
    public function getTotalPaymentDue()
    {
        return $this->totalPaymentDue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|PriceSpecification $totalPaymentDue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalPaymentDue($totalPaymentDue)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "PriceSpecification",
        );

        $totalPaymentDue = self::checkTypes($totalPaymentDue, $types);

        $this->totalPaymentDue = $totalPaymentDue;
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

}
