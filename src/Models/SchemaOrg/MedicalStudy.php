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
            "healthCondition" => "healthCondition",
            "status" => "status",
            "studySubject" => "studySubject",
            "sponsor" => "sponsor",
            "studyLocation" => "studyLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $healthCondition;

    /**
     * The status of the study (enumerated).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\EventStatusType|string|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|null
     */
    protected $status;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    protected $studySubject;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $sponsor;

    /**
     * The location in which the study is taking/took place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $studyLocation;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition $healthCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthCondition($healthCondition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
        ];

        $healthCondition = self::checkTypes($healthCondition, $types);

        $this->healthCondition = $healthCondition;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\EventStatusType|string|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EventStatusType|string|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|null $status
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatus($status)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "string",
            "\OpenActive\Models\SchemaOrg\MedicalStudyStatus",
            "null",
        ];

        $status = self::checkTypes($status, $types);

        $this->status = $status;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    public function getStudySubject()
    {
        return $this->studySubject;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity $studySubject
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStudySubject($studySubject)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
        ];

        $studySubject = self::checkTypes($studySubject, $types);

        $this->studySubject = $studySubject;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getStudyLocation()
    {
        return $this->studyLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $studyLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStudyLocation($studyLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $studyLocation = self::checkTypes($studyLocation, $types);

        $this->studyLocation = $studyLocation;
    }

}
