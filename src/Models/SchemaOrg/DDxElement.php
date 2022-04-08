<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DDxElement extends \OpenActive\Models\SchemaOrg\MedicalIntangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DDxElement";
    }

    public static function fieldList() {
        $fields = [
            "distinguishingSign" => "distinguishingSign",
            "diagnosis" => "diagnosis",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom|string
     */
    protected $distinguishingSign;

    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $diagnosis;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom|string
     */
    public function getDistinguishingSign()
    {
        return $this->distinguishingSign;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom|string $distinguishingSign
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistinguishingSign($distinguishingSign)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSignOrSymptom",
            "string",
        ];

        $distinguishingSign = self::checkTypes($distinguishingSign, $types);

        $this->distinguishingSign = $distinguishingSign;
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
