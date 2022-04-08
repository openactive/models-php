<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalGuideline extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalGuideline";
    }

    public static function fieldList() {
        $fields = [
            "evidenceLevel" => "evidenceLevel",
            "evidenceOrigin" => "evidenceOrigin",
            "guidelineSubject" => "guidelineSubject",
            "guidelineDate" => "guidelineDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEvidenceLevel|string
     */
    protected $evidenceLevel;

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
     *
     *
     * @var string
     */
    protected $evidenceOrigin;

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $guidelineSubject;

    /**
     * Date on which this guideline's recommendation was made.
     *
     *
     * @var Date|null
     */
    protected $guidelineDate;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEvidenceLevel|string
     */
    public function getEvidenceLevel()
    {
        return $this->evidenceLevel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEvidenceLevel|string $evidenceLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvidenceLevel($evidenceLevel)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEvidenceLevel",
            "string",
        ];

        $evidenceLevel = self::checkTypes($evidenceLevel, $types);

        $this->evidenceLevel = $evidenceLevel;
    }

    /**
     * @return string
     */
    public function getEvidenceOrigin()
    {
        return $this->evidenceOrigin;
    }

    /**
     * @param string $evidenceOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvidenceOrigin($evidenceOrigin)
    {
        $types = [
            "string",
        ];

        $evidenceOrigin = self::checkTypes($evidenceOrigin, $types);

        $this->evidenceOrigin = $evidenceOrigin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    public function getGuidelineSubject()
    {
        return $this->guidelineSubject;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity|string $guidelineSubject
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGuidelineSubject($guidelineSubject)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "string",
        ];

        $guidelineSubject = self::checkTypes($guidelineSubject, $types);

        $this->guidelineSubject = $guidelineSubject;
    }

    /**
     * @return Date|null
     */
    public function getGuidelineDate()
    {
        return $this->guidelineDate;
    }

    /**
     * @param Date|null $guidelineDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGuidelineDate($guidelineDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $guidelineDate = self::checkTypes($guidelineDate, $types);

        $this->guidelineDate = $guidelineDate;
    }

}
