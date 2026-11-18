<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FinancialIncentive extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FinancialIncentive";
    }

    public static function fieldList() {
        $fields = [
            "areaServed" => "areaServed",
            "eligibleWithSupplier" => "eligibleWithSupplier",
            "incentiveAmount" => "incentiveAmount",
            "incentiveStatus" => "incentiveStatus",
            "incentiveType" => "incentiveType",
            "incentivizedItem" => "incentivizedItem",
            "incomeLimit" => "incomeLimit",
            "provider" => "provider",
            "publisher" => "publisher",
            "purchasePriceLimit" => "purchasePriceLimit",
            "purchaseType" => "purchaseType",
            "qualifiedExpense" => "qualifiedExpense",
            "validFrom" => "validFrom",
            "validThrough" => "validThrough",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    protected $areaServed;

    /**
     * The supplier of the incentivized item/service for which the incentive is valid for such as a utility company, merchant, or contractor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $eligibleWithSupplier;

    /**
     * Describes the amount that can be redeemed from this incentive.
     *     
     * <p>[[QuantitativeValue]]: Use this for incentives based on price (either raw amount or percentage-based). For a raw amount example, "You can claim $2,500 - $7,500 from the total cost of installation" would be represented as the following:</p>
     *     {
     *         "@type": "QuantitativeValue",
     *         “minValue”: 2500,
     *         “maxValue”: 7500,
     *         "unitCode": "USD"
     *     }
     * <p>[[QuantitativeValue]] can also be used for percentage amounts. In such cases, value is used to represent the incentive’s percentage, while maxValue represents a limit (if one exists) to that incentive. The unitCode should be 'P1' and the unitText should be '%', while valueReference should be used for holding the currency type. For example, "You can claim up to 30% of the total cost of installation, up to a maximum of $7,500" would be:</p>
     *     {
     *         "@type": "QuantitativeValue",
     *         "value": 30,
     *         "unitCode": "P1",
     *         "unitText": "%",
     *         “maxValue”: 7500,
     *         “valueReference”: “USD”
     *     }
     * <p>[[UnitPriceSpecification]]: Use this for incentives that are based on amounts rather than price. For example, a net metering rebate that pays $10/kWh, up to $1,000:</p>
     *     {
     *         "@type": "UnitPriceSpecification",
     *         "price": 10,
     *         "priceCurrency": "USD",
     *         "referenceQuantity": 1,
     *         "unitCode": "DO3",
     *         "unitText": "kw/h",
     *         "maxPrice": 1000,
     *         "description": "$10 / kwh up to $1000"
     *     }
     * <p>[[LoanOrCredit]]: Use for incentives that are loan based. For example, a loan of $4,000 - $50,000 with a repayment term of 10 years, interest free would look like:</p>
     *     {
     *         "@type": "LoanOrCredit",
     *         "loanTerm": {
     *                 "@type":"QuantitativeValue",
     *                 "value":"10",
     *                 "unitCode": "ANN"
     *             },
     *         "amount":[
     *             {
     *                 "@type": "QuantitativeValue",
     *                 "Name":"fixed interest rate",
     *                 "value":"0",
     *             },
     *         ],
     *         "amount":[
     *             {
     *                 "@type": "MonetaryAmount",
     *                 "Name":"min loan amount",
     *                 "value":"4000",
     *                 "currency":"CAD"
     *             },
     *             {
     *                 "@type": "MonetaryAmount",
     *                 "Name":"max loan amount",
     *                 "value":"50000",
     *                 "currency":"CAD"
     *             }
     *         ],
     *     }
     * 
     * In summary: <ul><li>Use [[QuantitativeValue]] for absolute/percentage-based incentives applied on the price of a good/service.</li>
     * <li>Use [[UnitPriceSpecification]] for incentives based on a per-unit basis (e.g. net metering).</li>
     * <li>Use [[LoanOrCredit]] for loans/credits.</li>
     * </ul>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\UnitPriceSpecification|string
     */
    protected $incentiveAmount;

    /**
     * The status of the incentive (active, on hold, retired, etc.).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\IncentiveStatus|null
     */
    protected $incentiveStatus;

    /**
     * The type of incentive offered (tax credit/rebate, tax deduction, tax waiver, subsidies, etc.).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\IncentiveType|null
     */
    protected $incentiveType;

    /**
     * The type or specific product(s) and/or service(s) being incentivized.
     * <p>DefinedTermSets are used for product and service categories such as the United Nations Standard Products and Services Code:</p>
     *     {
     *         "@type": "DefinedTerm",
     *         "inDefinedTermSet": "https://www.unspsc.org/",
     *         "termCode": "261315XX",
     *         "name": "Photovoltaic module"
     *     }
     * 
     * <p>For a specific product or service, use the Product type:</p>
     *     {
     *         "@type": "Product",
     *         "name": "Kenmore White 17" Microwave",
     *     }
     * For multiple different incentivized items, use multiple [[DefinedTerm]] or [[Product]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Product|string
     */
    protected $incentivizedItem;

    /**
     * Optional. Income limit for which the incentive is applicable for.
     *     
     * <p>If MonetaryAmount is specified, this should be based on annualized income (e.g. if an incentive is limited to those making <$114,000 annually):</p>
     *     {
     *         "@type": "MonetaryAmount",
     *         "maxValue": 114000,
     *         "currency": "USD",
     *     }
     * 
     * Use Text for incentives that are limited based on other criteria, for example if an incentive is only available to recipients making 120% of the median poverty income in their area.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $incomeLimit;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $provider;

    /**
     * The publisher of the article in question.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $publisher;

    /**
     * Optional. The maximum price the item can have and still qualify for this offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $purchasePriceLimit;

    /**
     * Optional. The type of purchase the consumer must make in order to qualify for this incentive.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PurchaseType|null
     */
    protected $purchaseType;

    /**
     * Optional. The types of expenses that are covered by the incentive. For example some incentives are only for the goods (tangible items) but the services (labor) are excluded.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType|null
     */
    protected $qualifiedExpense;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validThrough;

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getEligibleWithSupplier()
    {
        return $this->eligibleWithSupplier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $eligibleWithSupplier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleWithSupplier($eligibleWithSupplier)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $eligibleWithSupplier = self::checkTypes($eligibleWithSupplier, $types);

        $this->eligibleWithSupplier = $eligibleWithSupplier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\UnitPriceSpecification|string
     */
    public function getIncentiveAmount()
    {
        return $this->incentiveAmount;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LoanOrCredit|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\UnitPriceSpecification|string $incentiveAmount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentiveAmount($incentiveAmount)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\LoanOrCredit",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\UnitPriceSpecification",
            "string",
        ];

        $incentiveAmount = self::checkTypes($incentiveAmount, $types);

        $this->incentiveAmount = $incentiveAmount;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\IncentiveStatus|null
     */
    public function getIncentiveStatus()
    {
        return $this->incentiveStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\IncentiveStatus|null $incentiveStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentiveStatus($incentiveStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\IncentiveStatus",
            "null",
        ];

        $incentiveStatus = self::checkTypes($incentiveStatus, $types);

        $this->incentiveStatus = $incentiveStatus;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\IncentiveType|null
     */
    public function getIncentiveType()
    {
        return $this->incentiveType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\IncentiveType|null $incentiveType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentiveType($incentiveType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\IncentiveType",
            "null",
        ];

        $incentiveType = self::checkTypes($incentiveType, $types);

        $this->incentiveType = $incentiveType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Product|string
     */
    public function getIncentivizedItem()
    {
        return $this->incentivizedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Product|string $incentivizedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentivizedItem($incentivizedItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $incentivizedItem = self::checkTypes($incentivizedItem, $types);

        $this->incentivizedItem = $incentivizedItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getIncomeLimit()
    {
        return $this->incomeLimit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $incomeLimit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncomeLimit($incomeLimit)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $incomeLimit = self::checkTypes($incomeLimit, $types);

        $this->incomeLimit = $incomeLimit;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $publisher
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublisher($publisher)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $publisher = self::checkTypes($publisher, $types);

        $this->publisher = $publisher;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getPurchasePriceLimit()
    {
        return $this->purchasePriceLimit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $purchasePriceLimit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPurchasePriceLimit($purchasePriceLimit)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $purchasePriceLimit = self::checkTypes($purchasePriceLimit, $types);

        $this->purchasePriceLimit = $purchasePriceLimit;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\PurchaseType|null
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PurchaseType|null $purchaseType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPurchaseType($purchaseType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PurchaseType",
            "null",
        ];

        $purchaseType = self::checkTypes($purchaseType, $types);

        $this->purchaseType = $purchaseType;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType|null
     */
    public function getQualifiedExpense()
    {
        return $this->qualifiedExpense;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType|null $qualifiedExpense
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQualifiedExpense($qualifiedExpense)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\IncentiveQualifiedExpenseType",
            "null",
        ];

        $qualifiedExpense = self::checkTypes($qualifiedExpense, $types);

        $this->qualifiedExpense = $qualifiedExpense;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param Date|DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param Date|DateTime|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

}
