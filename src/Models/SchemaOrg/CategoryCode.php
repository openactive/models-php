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
     * A <a class="localLink" href="https://schema.org/CategoryCodeSet">CategoryCodeSet</a> that contains this category code.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CategoryCodeSet
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
        $types = array(
            "string",
        );

        $codeValue = self::checkTypes($codeValue, $types);

        $this->codeValue = $codeValue;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CategoryCodeSet
     */
    public function getInCodeSet()
    {
        return $this->inCodeSet;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CategoryCodeSet $inCodeSet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInCodeSet($inCodeSet)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CategoryCodeSet",
        );

        $inCodeSet = self::checkTypes($inCodeSet, $types);

        $this->inCodeSet = $inCodeSet;
    }

}
