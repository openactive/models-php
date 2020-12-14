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
            "educationalLevel" => "educationalLevel",
            "recognizedBy" => "recognizedBy",
            "validFor" => "validFor",
            "competencyRequired" => "competencyRequired",
            "validIn" => "validIn",
            "credentialCategory" => "credentialCategory",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $educationalLevel;

    /**
     * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $recognizedBy;

    /**
     * The duration of validity of a permit or similar thing.
     *
     *
     * @var DateInterval|null
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
     * The geographic area where a permit or similar thing is valid.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $validIn;

    /**
     * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $credentialCategory;

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $recognizedBy = self::checkTypes($recognizedBy, $types);

        $this->recognizedBy = $recognizedBy;
    }

    /**
     * @return DateInterval|null
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param DateInterval|null $validFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFor($validFor)
    {
        $types = [
            "DateInterval",
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
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getValidIn()
    {
        return $this->validIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $validIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidIn($validIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $validIn = self::checkTypes($validIn, $types);

        $this->validIn = $validIn;
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

}
