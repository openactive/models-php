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
            "hasDefinedTerm" => "hasDefinedTerm",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A Defined Term contained in this term set.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $hasDefinedTerm;

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
