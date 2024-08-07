<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TechArticle extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TechArticle";
    }

    public static function fieldList() {
        $fields = [
            "proficiencyLevel" => "proficiencyLevel",
            "dependencies" => "dependencies",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     *
     * @var string
     */
    protected $proficiencyLevel;

    /**
     * Prerequisites needed to fulfill steps in article.
     *
     *
     * @var string
     */
    protected $dependencies;

    /**
     * @return string
     */
    public function getProficiencyLevel()
    {
        return $this->proficiencyLevel;
    }

    /**
     * @param string $proficiencyLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProficiencyLevel($proficiencyLevel)
    {
        $types = [
            "string",
        ];

        $proficiencyLevel = self::checkTypes($proficiencyLevel, $types);

        $this->proficiencyLevel = $proficiencyLevel;
    }

    /**
     * @return string
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * @param string $dependencies
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDependencies($dependencies)
    {
        $types = [
            "string",
        ];

        $dependencies = self::checkTypes($dependencies, $types);

        $this->dependencies = $dependencies;
    }

}
