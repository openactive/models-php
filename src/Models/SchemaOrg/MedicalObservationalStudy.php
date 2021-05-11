<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalObservationalStudy extends \OpenActive\Models\SchemaOrg\MedicalStudy
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalObservationalStudy";
    }

    public static function fieldList() {
        $fields = [
            "studyDesign" => "studyDesign",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifics about the observational study design (enumerated).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalObservationalStudyDesign
     */
    protected $studyDesign;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalObservationalStudyDesign
     */
    public function getStudyDesign()
    {
        return $this->studyDesign;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalObservationalStudyDesign $studyDesign
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStudyDesign($studyDesign)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalObservationalStudyDesign",
        ];

        $studyDesign = self::checkTypes($studyDesign, $types);

        $this->studyDesign = $studyDesign;
    }

}
