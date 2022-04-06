<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CategoryCode extends \OpenActive\Models\SchemaOrg\DefinedTerm
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CategoryCode";
    }

    public static function fieldList() {
        $fields = [
            "codeValue" => "codeValue",
            "inCodeSet" => "inCodeSet",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A short textual code that uniquely identifies the value.
     *
     *
     * @var string
     */
    protected $codeValue;

    /**
     * A [[CategoryCodeSet]] that contains this category code.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCodeSet|string
     */
    protected $inCodeSet;

    /**
     * @return string
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * @param string $codeValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCodeValue($codeValue)
    {
        $types = [
            "string",
        ];

        $codeValue = self::checkTypes($codeValue, $types);

        $this->codeValue = $codeValue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCodeSet|string
     */
    public function getInCodeSet()
    {
        return $this->inCodeSet;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCodeSet|string $inCodeSet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInCodeSet($inCodeSet)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCodeSet",
            "string",
        ];

        $inCodeSet = self::checkTypes($inCodeSet, $types);

        $this->inCodeSet = $inCodeSet;
    }

}
