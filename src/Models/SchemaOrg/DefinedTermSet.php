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
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $hasDefinedTerm;

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getHasDefinedTerm()
    {
        return $this->hasDefinedTerm;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm $hasDefinedTerm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDefinedTerm($hasDefinedTerm)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $hasDefinedTerm = self::checkTypes($hasDefinedTerm, $types);

        $this->hasDefinedTerm = $hasDefinedTerm;
    }

}
