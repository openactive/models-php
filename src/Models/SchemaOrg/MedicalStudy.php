<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalStudy extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalStudy";
    }

    public static function fieldList() {
        $fields = [
            "studyLocation" => "studyLocation",
            "studySubject" => "studySubject",
            "status" => "status",
            "sponsor" => "sponsor",
            "healthCondition" => "healthCondition",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The location in which the study is taking/took place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $studyLocation;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $studySubject;

    /**
     * The status of the study (enumerated).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|\OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    protected $status;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $sponsor;

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $healthCondition;

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getStudyLocation()
    {
        return $this->studyLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $studyLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStudyLocation($studyLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $studyLocation = self::checkTypes($studyLocation, $types);

        $this->studyLocation = $studyLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    public function getStudySubject()
    {
        return $this->studySubject;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity|string $studySubject
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStudySubject($studySubject)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "string",
        ];

        $studySubject = self::checkTypes($studySubject, $types);

        $this->studySubject = $studySubject;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|\OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|\OpenActive\Enums\SchemaOrg\EventStatusType|null $status
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatus($status)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\MedicalStudyStatus",
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "null",
        ];

        $status = self::checkTypes($status, $types);

        $this->status = $status;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

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

}
