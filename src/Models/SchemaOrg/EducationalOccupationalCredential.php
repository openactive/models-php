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
            "validFor" => "validFor",
            "competencyRequired" => "competencyRequired",
            "educationalLevel" => "educationalLevel",
            "recognizedBy" => "recognizedBy",
            "validIn" => "validIn",
            "credentialCategory" => "credentialCategory",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of validity of a permit or similar thing.
     *
     *
     * @var DateInterval|string|null
     */
    protected $validFor;

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
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $educationalLevel;

    /**
     * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $recognizedBy;

    /**
     * The geographic area where a permit or similar thing is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $validIn;

    /**
     * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $credentialCategory;

    /**
     * @return DateInterval|string|null
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param DateInterval|string|null $validFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFor($validFor)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $validFor = self::checkTypes($validFor, $types);

        $this->validFor = $validFor;
    }

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
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getEducationalLevel()
    {
        return $this->educationalLevel;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $educationalLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalLevel($educationalLevel)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $educationalLevel = self::checkTypes($educationalLevel, $types);

        $this->educationalLevel = $educationalLevel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getRecognizedBy()
    {
        return $this->recognizedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $recognizedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecognizedBy($recognizedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $recognizedBy = self::checkTypes($recognizedBy, $types);

        $this->recognizedBy = $recognizedBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getValidIn()
    {
        return $this->validIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $validIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidIn($validIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $validIn = self::checkTypes($validIn, $types);

        $this->validIn = $validIn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getCredentialCategory()
    {
        return $this->credentialCategory;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $credentialCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCredentialCategory($credentialCategory)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $credentialCategory = self::checkTypes($credentialCategory, $types);

        $this->credentialCategory = $credentialCategory;
    }

}
