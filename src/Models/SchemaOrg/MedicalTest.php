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
            "affectedBy" => "affectedBy",
            "usedToDiagnose" => "usedToDiagnose",
            "usesDevice" => "usesDevice",
            "normalRange" => "normalRange",
            "signDetected" => "signDetected",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Drugs that affect the test's results.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug
     */
    protected $affectedBy;

    /**
     * A condition the test is used to diagnose.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $usedToDiagnose;

    /**
     * Device used to perform the test.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalDevice
     */
    protected $usesDevice;

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
     * @var \OpenActive\Models\SchemaOrg\MedicalSign
     */
    protected $signDetected;

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug
     */
    public function getAffectedBy()
    {
        return $this->affectedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug $affectedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAffectedBy($affectedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
        ];

        $affectedBy = self::checkTypes($affectedBy, $types);

        $this->affectedBy = $affectedBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    public function getUsedToDiagnose()
    {
        return $this->usedToDiagnose;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition $usedToDiagnose
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsedToDiagnose($usedToDiagnose)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
        ];

        $usedToDiagnose = self::checkTypes($usedToDiagnose, $types);

        $this->usedToDiagnose = $usedToDiagnose;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalDevice
     */
    public function getUsesDevice()
    {
        return $this->usesDevice;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalDevice $usesDevice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsesDevice($usesDevice)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalDevice",
        ];

        $usesDevice = self::checkTypes($usesDevice, $types);

        $this->usesDevice = $usesDevice;
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
     * @return \OpenActive\Models\SchemaOrg\MedicalSign
     */
    public function getSignDetected()
    {
        return $this->signDetected;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSign $signDetected
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSignDetected($signDetected)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSign",
        ];

        $signDetected = self::checkTypes($signDetected, $types);

        $this->signDetected = $signDetected;
    }

}
