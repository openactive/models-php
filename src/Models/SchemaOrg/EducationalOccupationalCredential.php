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
            "educationalLevel" => "educationalLevel",
            "credentialCategory" => "credentialCategory",
            "recognizedBy" => "recognizedBy",
            "competencyRequired" => "competencyRequired",
            "validIn" => "validIn",
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
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
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
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $recognizedBy;

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $competencyRequired;

    /**
     * The geographic area where a permit or similar thing is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $validIn;

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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $credentialCategory = self::checkTypes($credentialCategory, $types);

        $this->credentialCategory = $credentialCategory;
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
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getCompetencyRequired()
    {
        return $this->competencyRequired;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $competencyRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCompetencyRequired($competencyRequired)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $competencyRequired = self::checkTypes($competencyRequired, $types);

        $this->competencyRequired = $competencyRequired;
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

}
