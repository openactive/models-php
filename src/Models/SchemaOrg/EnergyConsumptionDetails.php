<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EnergyConsumptionDetails extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EnergyConsumptionDetails";
    }

    public static function fieldList() {
        $fields = [
            "energyEfficiencyScaleMin" => "energyEfficiencyScaleMin",
            "hasEnergyEfficiencyCategory" => "hasEnergyEfficiencyCategory",
            "energyEfficiencyScaleMax" => "energyEfficiencyScaleMax",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifies the least energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to. For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration|string
     */
    protected $energyEfficiencyScaleMin;

    /**
     * Defines the energy efficiency Category (which could be either a rating out of range of values or a yes/no certification) for a product according to an international energy efficiency standard.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\EnergyEfficiencyEnumeration|null
     */
    protected $hasEnergyEfficiencyCategory;

    /**
     * Specifies the most energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to. For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration|string
     */
    protected $energyEfficiencyScaleMax;

    /**
     * @return \OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration|string
     */
    public function getEnergyEfficiencyScaleMin()
    {
        return $this->energyEfficiencyScaleMin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration|string $energyEfficiencyScaleMin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEnergyEfficiencyScaleMin($energyEfficiencyScaleMin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration",
            "string",
        ];

        $energyEfficiencyScaleMin = self::checkTypes($energyEfficiencyScaleMin, $types);

        $this->energyEfficiencyScaleMin = $energyEfficiencyScaleMin;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\EnergyEfficiencyEnumeration|null
     */
    public function getHasEnergyEfficiencyCategory()
    {
        return $this->hasEnergyEfficiencyCategory;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EnergyEfficiencyEnumeration|null $hasEnergyEfficiencyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasEnergyEfficiencyCategory($hasEnergyEfficiencyCategory)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\EnergyEfficiencyEnumeration",
            "null",
        ];

        $hasEnergyEfficiencyCategory = self::checkTypes($hasEnergyEfficiencyCategory, $types);

        $this->hasEnergyEfficiencyCategory = $hasEnergyEfficiencyCategory;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration|string
     */
    public function getEnergyEfficiencyScaleMax()
    {
        return $this->energyEfficiencyScaleMax;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration|string $energyEfficiencyScaleMax
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEnergyEfficiencyScaleMax($energyEfficiencyScaleMax)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EUEnergyEfficiencyEnumeration",
            "string",
        ];

        $energyEfficiencyScaleMax = self::checkTypes($energyEfficiencyScaleMax, $types);

        $this->energyEfficiencyScaleMax = $energyEfficiencyScaleMax;
    }

}
