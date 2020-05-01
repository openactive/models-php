<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EducationEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EducationEvent";
    }

    public static function fieldList() {
        $fields = [
            "educationalLevel" => "educationalLevel",
            "assesses" => "assesses",
            "teaches" => "teaches",
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
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $assesses;

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $teaches;

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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        );

        $assesses = self::checkTypes($assesses, $types);

        $this->assesses = $assesses;
    }

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        );

        $teaches = self::checkTypes($teaches, $types);

        $this->teaches = $teaches;
    }

}
