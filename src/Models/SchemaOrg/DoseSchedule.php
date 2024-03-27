<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DoseSchedule extends \OpenActive\Models\SchemaOrg\MedicalIntangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DoseSchedule";
    }

    public static function fieldList() {
        $fields = [
            "doseValue" => "doseValue",
            "frequency" => "frequency",
            "targetPopulation" => "targetPopulation",
            "doseUnit" => "doseUnit",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The value of the dose, e.g. 500.
     *
     *
     * @var Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    protected $doseValue;

    /**
     * How often the dose is taken, e.g. 'daily'.
     *
     *
     * @var string
     */
    protected $frequency;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     *
     * @var string
     */
    protected $targetPopulation;

    /**
     * The unit of the dose, e.g. 'mg'.
     *
     *
     * @var string
     */
    protected $doseUnit;

    /**
     * @return Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    public function getDoseValue()
    {
        return $this->doseValue;
    }

    /**
     * @param Number|\OpenActive\Enums\SchemaOrg\QualitativeValue|null $doseValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDoseValue($doseValue)
    {
        $types = [
            "Number",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "null",
        ];

        $doseValue = self::checkTypes($doseValue, $types);

        $this->doseValue = $doseValue;
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param string $frequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFrequency($frequency)
    {
        $types = [
            "string",
        ];

        $frequency = self::checkTypes($frequency, $types);

        $this->frequency = $frequency;
    }

    /**
     * @return string
     */
    public function getTargetPopulation()
    {
        return $this->targetPopulation;
    }

    /**
     * @param string $targetPopulation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetPopulation($targetPopulation)
    {
        $types = [
            "string",
        ];

        $targetPopulation = self::checkTypes($targetPopulation, $types);

        $this->targetPopulation = $targetPopulation;
    }

    /**
     * @return string
     */
    public function getDoseUnit()
    {
        return $this->doseUnit;
    }

    /**
     * @param string $doseUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDoseUnit($doseUnit)
    {
        $types = [
            "string",
        ];

        $doseUnit = self::checkTypes($doseUnit, $types);

        $this->doseUnit = $doseUnit;
    }

}
