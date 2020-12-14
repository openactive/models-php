<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrugStrength extends \OpenActive\Models\SchemaOrg\MedicalIntangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrugStrength";
    }

    public static function fieldList() {
        $fields = [
            "maximumIntake" => "maximumIntake",
            "strengthUnit" => "strengthUnit",
            "strengthValue" => "strengthValue",
            "availableIn" => "availableIn",
            "activeIngredient" => "activeIngredient",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MaximumDoseSchedule
     */
    protected $maximumIntake;

    /**
     * The units of an active ingredient's strength, e.g. mg.
     *
     *
     * @var string
     */
    protected $strengthUnit;

    /**
     * The value of an active ingredient's strength, e.g. 325.
     *
     *
     * @var Number|null
     */
    protected $strengthValue;

    /**
     * The location in which the strength is available.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $availableIn;

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     *
     * @var string
     */
    protected $activeIngredient;

    /**
     * @return \OpenActive\Models\SchemaOrg\MaximumDoseSchedule
     */
    public function getMaximumIntake()
    {
        return $this->maximumIntake;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MaximumDoseSchedule $maximumIntake
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumIntake($maximumIntake)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MaximumDoseSchedule",
        ];

        $maximumIntake = self::checkTypes($maximumIntake, $types);

        $this->maximumIntake = $maximumIntake;
    }

    /**
     * @return string
     */
    public function getStrengthUnit()
    {
        return $this->strengthUnit;
    }

    /**
     * @param string $strengthUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStrengthUnit($strengthUnit)
    {
        $types = [
            "string",
        ];

        $strengthUnit = self::checkTypes($strengthUnit, $types);

        $this->strengthUnit = $strengthUnit;
    }

    /**
     * @return Number|null
     */
    public function getStrengthValue()
    {
        return $this->strengthValue;
    }

    /**
     * @param Number|null $strengthValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStrengthValue($strengthValue)
    {
        $types = [
            "Number",
            "null",
        ];

        $strengthValue = self::checkTypes($strengthValue, $types);

        $this->strengthValue = $strengthValue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getAvailableIn()
    {
        return $this->availableIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $availableIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableIn($availableIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $availableIn = self::checkTypes($availableIn, $types);

        $this->availableIn = $availableIn;
    }

    /**
     * @return string
     */
    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    /**
     * @param string $activeIngredient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActiveIngredient($activeIngredient)
    {
        $types = [
            "string",
        ];

        $activeIngredient = self::checkTypes($activeIngredient, $types);

        $this->activeIngredient = $activeIngredient;
    }

}
