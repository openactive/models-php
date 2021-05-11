<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalSignOrSymptom extends \OpenActive\Models\SchemaOrg\MedicalCondition
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalSignOrSymptom";
    }

    public static function fieldList() {
        $fields = [
            "possibleTreatment" => "possibleTreatment",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy
     */
    protected $possibleTreatment;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTherapy
     */
    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTherapy $possibleTreatment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPossibleTreatment($possibleTreatment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
        ];

        $possibleTreatment = self::checkTypes($possibleTreatment, $types);

        $this->possibleTreatment = $possibleTreatment;
    }

}
