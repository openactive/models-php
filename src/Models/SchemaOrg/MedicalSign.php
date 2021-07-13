<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalSign extends \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalSign";
    }

    public static function fieldList() {
        $fields = [
            "identifyingExam" => "identifyingExam",
            "identifyingTest" => "identifyingTest",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A physical examination that can identify this sign.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PhysicalExam|string
     */
    protected $identifyingExam;

    /**
     * A diagnostic test that can identify this sign.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    protected $identifyingTest;

    /**
     * @return \OpenActive\Models\SchemaOrg\PhysicalExam|string
     */
    public function getIdentifyingExam()
    {
        return $this->identifyingExam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PhysicalExam|string $identifyingExam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifyingExam($identifyingExam)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PhysicalExam",
            "string",
        ];

        $identifyingExam = self::checkTypes($identifyingExam, $types);

        $this->identifyingExam = $identifyingExam;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    public function getIdentifyingTest()
    {
        return $this->identifyingTest;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTest|string $identifyingTest
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifyingTest($identifyingTest)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTest",
            "string",
        ];

        $identifyingTest = self::checkTypes($identifyingTest, $types);

        $this->identifyingTest = $identifyingTest;
    }

}
