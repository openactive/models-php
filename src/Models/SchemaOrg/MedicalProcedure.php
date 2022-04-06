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
            "preparation" => "preparation",
            "bodyLocation" => "bodyLocation",
            "status" => "status",
            "howPerformed" => "howPerformed",
            "followup" => "followup",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalProcedureType|string
     */
    protected $procedureType;

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $preparation;

    /**
     * Location in the body of the anatomical structure.
     *
     *
     * @var string
     */
    protected $bodyLocation;

    /**
     * The status of the study (enumerated).
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\EventStatusType|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|null
     */
    protected $status;

    /**
     * How the procedure is performed.
     *
     *
     * @var string
     */
    protected $howPerformed;

    /**
     * Typical or recommended followup care after the procedure is performed.
     *
     *
     * @var string
     */
    protected $followup;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalProcedureType|string
     */
    public function getProcedureType()
    {
        return $this->procedureType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalProcedureType|string $procedureType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProcedureType($procedureType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalProcedureType",
            "string",
        ];

        $procedureType = self::checkTypes($procedureType, $types);

        $this->procedureType = $procedureType;
    }

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
     * @return string|\OpenActive\Enums\SchemaOrg\EventStatusType|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\EventStatusType|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|null $status
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatus($status)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "\OpenActive\Models\SchemaOrg\MedicalStudyStatus",
            "null",
        ];

        $status = self::checkTypes($status, $types);

        $this->status = $status;
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

}
