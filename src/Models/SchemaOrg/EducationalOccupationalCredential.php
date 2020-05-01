<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EducationalOccupationalCredential extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EducationalOccupationalCredential";
    }

    public static function fieldList() {
        $fields = [
            "competencyRequired" => "competencyRequired",
            "educationalLevel" => "educationalLevel",
            "credentialCategory" => "credentialCategory",
            "recognizedBy" => "recognizedBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $competencyRequired;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $educationalLevel;

    /**
     * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $credentialCategory;

    /**
     * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $recognizedBy;

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getCompetencyRequired()
    {
        return $this->competencyRequired;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $competencyRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCompetencyRequired($competencyRequired)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        );

        $competencyRequired = self::checkTypes($competencyRequired, $types);

        $this->competencyRequired = $competencyRequired;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getEducationalLevel()
    {
        return $this->educationalLevel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $educationalLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalLevel($educationalLevel)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        );

        $educationalLevel = self::checkTypes($educationalLevel, $types);

        $this->educationalLevel = $educationalLevel;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getCredentialCategory()
    {
        return $this->credentialCategory;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $credentialCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCredentialCategory($credentialCategory)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        );

        $credentialCategory = self::checkTypes($credentialCategory, $types);

        $this->credentialCategory = $credentialCategory;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getRecognizedBy()
    {
        return $this->recognizedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $recognizedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecognizedBy($recognizedBy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $recognizedBy = self::checkTypes($recognizedBy, $types);

        $this->recognizedBy = $recognizedBy;
    }

}
