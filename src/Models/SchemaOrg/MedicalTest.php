<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalTest extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalTest";
    }

    public static function fieldList() {
        $fields = [
            "usedToDiagnose" => "usedToDiagnose",
            "affectedBy" => "affectedBy",
            "normalRange" => "normalRange",
            "signDetected" => "signDetected",
            "usesDevice" => "usesDevice",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A condition the test is used to diagnose.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $usedToDiagnose;

    /**
     * Drugs that affect the test's results.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug|string
     */
    protected $affectedBy;

    /**
     * Range of acceptable values for a typical patient, when applicable.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\MedicalEnumeration|null
     */
    protected $normalRange;

    /**
     * A sign detected by the test.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSign|string
     */
    protected $signDetected;

    /**
     * Device used to perform the test.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalDevice|string
     */
    protected $usesDevice;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    public function getUsedToDiagnose()
    {
        return $this->usedToDiagnose;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition|string $usedToDiagnose
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsedToDiagnose($usedToDiagnose)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
            "string",
        ];

        $usedToDiagnose = self::checkTypes($usedToDiagnose, $types);

        $this->usedToDiagnose = $usedToDiagnose;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug|string
     */
    public function getAffectedBy()
    {
        return $this->affectedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug|string $affectedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAffectedBy($affectedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
            "string",
        ];

        $affectedBy = self::checkTypes($affectedBy, $types);

        $this->affectedBy = $affectedBy;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\MedicalEnumeration|null
     */
    public function getNormalRange()
    {
        return $this->normalRange;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\MedicalEnumeration|null $normalRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNormalRange($normalRange)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\MedicalEnumeration",
            "null",
        ];

        $normalRange = self::checkTypes($normalRange, $types);

        $this->normalRange = $normalRange;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalSign|string
     */
    public function getSignDetected()
    {
        return $this->signDetected;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSign|string $signDetected
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSignDetected($signDetected)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSign",
            "string",
        ];

        $signDetected = self::checkTypes($signDetected, $types);

        $this->signDetected = $signDetected;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalDevice|string
     */
    public function getUsesDevice()
    {
        return $this->usesDevice;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalDevice|string $usesDevice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsesDevice($usesDevice)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalDevice",
            "string",
        ];

        $usesDevice = self::checkTypes($usesDevice, $types);

        $this->usesDevice = $usesDevice;
    }

}
