<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CategoryCodeSet extends \OpenActive\Models\SchemaOrg\DefinedTermSet
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CategoryCodeSet";
    }

    public static function fieldList() {
        $fields = [
            "hasCategoryCode" => "hasCategoryCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A Category code contained in this code set.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $hasCategoryCode;

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    public function getHasCategoryCode()
    {
        return $this->hasCategoryCode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|string $hasCategoryCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCategoryCode($hasCategoryCode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "string",
        ];

        $hasCategoryCode = self::checkTypes($hasCategoryCode, $types);

        $this->hasCategoryCode = $hasCategoryCode;
    }

}
