<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalProcedure extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalProcedure";
    }

    public static function fieldList() {
        $fields = [
            "procedureType" => "procedureType",
            "followup" => "followup",
            "status" => "status",
            "bodyLocation" => "bodyLocation",
            "preparation" => "preparation",
            "howPerformed" => "howPerformed",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalProcedureType
     */
    protected $procedureType;

    /**
     * Typical or recommended followup care after the procedure is performed.
     *
     *
     * @var string
     */
    protected $followup;

    /**
     * The status of the study (enumerated).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalStudyStatus|string|\OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    protected $status;

    /**
     * Location in the body of the anatomical structure.
     *
     *
     * @var string
     */
    protected $bodyLocation;

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MedicalEntity
     */
    protected $preparation;

    /**
     * How the procedure is performed.
     *
     *
     * @var string
     */
    protected $howPerformed;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalProcedureType
     */
    public function getProcedureType()
    {
        return $this->procedureType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalProcedureType $procedureType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProcedureType($procedureType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalProcedureType",
        ];

        $procedureType = self::checkTypes($procedureType, $types);

        $this->procedureType = $procedureType;
    }

    /**
     * @return string
     */
    public function getFollowup()
    {
        return $this->followup;
    }

    /**
     * @param string $followup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFollowup($followup)
    {
        $types = [
            "string",
        ];

        $followup = self::checkTypes($followup, $types);

        $this->followup = $followup;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalStudyStatus|string|\OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalStudyStatus|string|\OpenActive\Enums\SchemaOrg\EventStatusType|null $status
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatus($status)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalStudyStatus",
            "string",
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "null",
        ];

        $status = self::checkTypes($status, $types);

        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getBodyLocation()
    {
        return $this->bodyLocation;
    }

    /**
     * @param string $bodyLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBodyLocation($bodyLocation)
    {
        $types = [
            "string",
        ];

        $bodyLocation = self::checkTypes($bodyLocation, $types);

        $this->bodyLocation = $bodyLocation;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MedicalEntity
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MedicalEntity $preparation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPreparation($preparation)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
        ];

        $preparation = self::checkTypes($preparation, $types);

        $this->preparation = $preparation;
    }

    /**
     * @return string
     */
    public function getHowPerformed()
    {
        return $this->howPerformed;
    }

    /**
     * @param string $howPerformed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHowPerformed($howPerformed)
    {
        $types = [
            "string",
        ];

        $howPerformed = self::checkTypes($howPerformed, $types);

        $this->howPerformed = $howPerformed;
    }

}
