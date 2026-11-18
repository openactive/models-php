<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalWebPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalWebPage";
    }

    public static function fieldList() {
        $fields = [
            "aspect" => "aspect",
            "medicalAudience" => "medicalAudience",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An aspect of medical practice that is considered on the page, such as 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology', etc.
     *
     *
     * @var string
     */
    protected $aspect;

    /**
     * Medical audience for page.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalAudience|\OpenActive\Models\SchemaOrg\MedicalAudienceType|string
     */
    protected $medicalAudience;

    /**
     * @return string
     */
    public function getAspect()
    {
        return $this->aspect;
    }

    /**
     * @param string $aspect
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAspect($aspect)
    {
        $types = [
            "string",
        ];

        $aspect = self::checkTypes($aspect, $types);

        $this->aspect = $aspect;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalAudience|\OpenActive\Models\SchemaOrg\MedicalAudienceType|string
     */
    public function getMedicalAudience()
    {
        return $this->medicalAudience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalAudience|\OpenActive\Models\SchemaOrg\MedicalAudienceType|string $medicalAudience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedicalAudience($medicalAudience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalAudience",
            "\OpenActive\Models\SchemaOrg\MedicalAudienceType",
            "string",
        ];

        $medicalAudience = self::checkTypes($medicalAudience, $types);

        $this->medicalAudience = $medicalAudience;
    }

}
