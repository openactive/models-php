<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Patient extends \OpenActive\Models\SchemaOrg\Person
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Patient";
    }

    public static function fieldList() {
        $fields = [
            "healthCondition" => "healthCondition",
            "drug" => "drug",
            "diagnosis" => "diagnosis",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $healthCondition;

    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug|string
     */
    protected $drug;

    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $diagnosis;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition|string $healthCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthCondition($healthCondition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
            "string",
        ];

        $healthCondition = self::checkTypes($healthCondition, $types);

        $this->healthCondition = $healthCondition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug|string
     */
    public function getDrug()
    {
        return $this->drug;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug|string $drug
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrug($drug)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
            "string",
        ];

        $drug = self::checkTypes($drug, $types);

        $this->drug = $drug;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition|string $diagnosis
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiagnosis($diagnosis)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
            "string",
        ];

        $diagnosis = self::checkTypes($diagnosis, $types);

        $this->diagnosis = $diagnosis;
    }

}
