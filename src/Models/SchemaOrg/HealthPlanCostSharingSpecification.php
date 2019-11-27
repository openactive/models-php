<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HealthPlanCostSharingSpecification extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HealthPlanCostSharingSpecification";
    }

    public static function fieldList() {
        $fields = [
            "healthPlanCopayOption" => "healthPlanCopayOption",
            "healthPlanCopay" => "healthPlanCopay",
            "healthPlanCoinsuranceRate" => "healthPlanCoinsuranceRate",
            "healthPlanCoinsuranceOption" => "healthPlanCoinsuranceOption",
            "healthPlanPharmacyCategory" => "healthPlanPharmacyCategory",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
     *
     *
     * @var string
     */
    protected $healthPlanCopayOption;

    /**
     * Whether The copay amount.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification
     */
    protected $healthPlanCopay;

    /**
     * Whether The rate of coinsurance expressed as a number between 0.0 and 1.0.
     *
     *
     * @var float|null
     */
    protected $healthPlanCoinsuranceRate;

    /**
     * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
     *
     *
     * @var string
     */
    protected $healthPlanCoinsuranceOption;

    /**
     * The category or type of pharmacy associated with this cost sharing.
     *
     *
     * @var string
     */
    protected $healthPlanPharmacyCategory;

    /**
     * @return string
     */
    public function getHealthPlanCopayOption()
    {
        return $this->healthPlanCopayOption;
    }

    /**
     * @param string $healthPlanCopayOption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanCopayOption($healthPlanCopayOption)
    {
        $types = array(
            "string",
        );

        $healthPlanCopayOption = self::checkTypes($healthPlanCopayOption, $types);

        $this->healthPlanCopayOption = $healthPlanCopayOption;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification
     */
    public function getHealthPlanCopay()
    {
        return $this->healthPlanCopay;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification $healthPlanCopay
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanCopay($healthPlanCopay)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
        );

        $healthPlanCopay = self::checkTypes($healthPlanCopay, $types);

        $this->healthPlanCopay = $healthPlanCopay;
    }

    /**
     * @return float|null
     */
    public function getHealthPlanCoinsuranceRate()
    {
        return $this->healthPlanCoinsuranceRate;
    }

    /**
     * @param float|null $healthPlanCoinsuranceRate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanCoinsuranceRate($healthPlanCoinsuranceRate)
    {
        $types = array(
            "float",
            "null",
        );

        $healthPlanCoinsuranceRate = self::checkTypes($healthPlanCoinsuranceRate, $types);

        $this->healthPlanCoinsuranceRate = $healthPlanCoinsuranceRate;
    }

    /**
     * @return string
     */
    public function getHealthPlanCoinsuranceOption()
    {
        return $this->healthPlanCoinsuranceOption;
    }

    /**
     * @param string $healthPlanCoinsuranceOption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanCoinsuranceOption($healthPlanCoinsuranceOption)
    {
        $types = array(
            "string",
        );

        $healthPlanCoinsuranceOption = self::checkTypes($healthPlanCoinsuranceOption, $types);

        $this->healthPlanCoinsuranceOption = $healthPlanCoinsuranceOption;
    }

    /**
     * @return string
     */
    public function getHealthPlanPharmacyCategory()
    {
        return $this->healthPlanPharmacyCategory;
    }

    /**
     * @param string $healthPlanPharmacyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanPharmacyCategory($healthPlanPharmacyCategory)
    {
        $types = array(
            "string",
        );

        $healthPlanPharmacyCategory = self::checkTypes($healthPlanPharmacyCategory, $types);

        $this->healthPlanPharmacyCategory = $healthPlanPharmacyCategory;
    }

}
