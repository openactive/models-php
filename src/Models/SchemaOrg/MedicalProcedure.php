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
            "preparation" => "preparation",
            "followup" => "followup",
            "howPerformed" => "howPerformed",
            "status" => "status",
            "procedureType" => "procedureType",
            "bodyLocation" => "bodyLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $preparation;

    /**
     * Typical or recommended followup care after the procedure is performed.
     *
     *
     * @var string
     */
    protected $followup;

    /**
     * How the procedure is performed.
     *
     *
     * @var string
     */
    protected $howPerformed;

    /**
     * The status of the study (enumerated).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\EventStatusType|string|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|null
     */
    protected $status;

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalProcedureType
     */
    protected $procedureType;

    /**
     * Location in the body of the anatomical structure.
     *
     *
     * @var string
     */
    protected $bodyLocation;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity|string $preparation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPreparation($preparation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "string",
        ];

        $preparation = self::checkTypes($preparation, $types);

        $this->preparation = $preparation;
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

}
