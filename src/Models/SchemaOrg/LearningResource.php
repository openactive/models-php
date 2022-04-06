<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LearningResource extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LearningResource";
    }

    public static function fieldList() {
        $fields = [
            "teaches" => "teaches",
            "educationalLevel" => "educationalLevel",
            "assesses" => "assesses",
            "educationalUse" => "educationalUse",
            "educationalAlignment" => "educationalAlignment",
            "competencyRequired" => "competencyRequired",
            "learningResourceType" => "learningResourceType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $teaches;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $educationalLevel;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $assesses;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $educationalUse;

    /**
     * An alignment to an established educational framework.
     * 
     * This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AlignmentObject|string
     */
    protected $educationalAlignment;

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $competencyRequired;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $learningResourceType;

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getTeaches()
    {
        return $this->teaches;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $teaches
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTeaches($teaches)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $teaches = self::checkTypes($teaches, $types);

        $this->teaches = $teaches;
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
    public function getAssesses()
    {
        return $this->assesses;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $assesses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssesses($assesses)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $assesses = self::checkTypes($assesses, $types);

        $this->assesses = $assesses;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getEducationalUse()
    {
        return $this->educationalUse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $educationalUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalUse($educationalUse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $educationalUse = self::checkTypes($educationalUse, $types);

        $this->educationalUse = $educationalUse;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AlignmentObject|string
     */
    public function getEducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AlignmentObject|string $educationalAlignment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalAlignment($educationalAlignment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
            "string",
        ];

        $educationalAlignment = self::checkTypes($educationalAlignment, $types);

        $this->educationalAlignment = $educationalAlignment;
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
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getLearningResourceType()
    {
        return $this->learningResourceType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $learningResourceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLearningResourceType($learningResourceType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $learningResourceType = self::checkTypes($learningResourceType, $types);

        $this->learningResourceType = $learningResourceType;
    }

}
