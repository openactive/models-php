<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MerchantReturnPolicySeasonalOverride extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MerchantReturnPolicySeasonalOverride";
    }

    public static function fieldList() {
        $fields = [
            "merchantReturnDays" => "merchantReturnDays",
            "endDate" => "endDate",
            "returnPolicyCategory" => "returnPolicyCategory",
            "startDate" => "startDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     *
     *
     * @var Date|DateTime|int|null
     */
    protected $merchantReturnDays;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $endDate;

    /**
     * Specifies an applicable return policy (from an enumeration).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    protected $returnPolicyCategory;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     *
     * @var Date|DateTime|null
     */
    protected $startDate;

    /**
     * @return Date|DateTime|int|null
     */
    public function getMerchantReturnDays()
    {
        return $this->merchantReturnDays;
    }

    /**
     * @param Date|DateTime|int|null $merchantReturnDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchantReturnDays($merchantReturnDays)
    {
        $types = [
            "Date",
            "DateTime",
            "int",
            "null",
        ];

        $merchantReturnDays = self::checkTypes($merchantReturnDays, $types);

        $this->merchantReturnDays = $merchantReturnDays;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date|DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    public function getReturnPolicyCategory()
    {
        return $this->returnPolicyCategory;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null $returnPolicyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnPolicyCategory($returnPolicyCategory)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration",
            "null",
        ];

        $returnPolicyCategory = self::checkTypes($returnPolicyCategory, $types);

        $this->returnPolicyCategory = $returnPolicyCategory;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date|DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

}
