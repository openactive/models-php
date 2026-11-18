<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DefinedTermSet extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DefinedTermSet";
    }

    public static function fieldList() {
        $fields = [
            "about" => "about",
            "hasDefinedTerm" => "hasDefinedTerm",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The subject matter of an object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $about;

    /**
     * A Defined Term contained in this term set.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $hasDefinedTerm;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $about
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbout($about)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $about = self::checkTypes($about, $types);

        $this->about = $about;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getHasDefinedTerm()
    {
        return $this->hasDefinedTerm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $hasDefinedTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDefinedTerm($hasDefinedTerm)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $hasDefinedTerm = self::checkTypes($hasDefinedTerm, $types);

        $this->hasDefinedTerm = $hasDefinedTerm;
    }

}
