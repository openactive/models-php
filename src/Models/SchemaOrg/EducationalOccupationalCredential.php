<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EducationalOccupationalCredential extends \OpenActive\Models\SchemaOrg\Credential
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
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
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
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

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
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $educationalLevel = self::checkTypes($educationalLevel, $types);

        $this->educationalLevel = $educationalLevel;
    }

}
