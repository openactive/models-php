<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Recommendation extends \OpenActive\Models\SchemaOrg\Review
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Recommendation";
    }

    public static function fieldList() {
        $fields = [
            "category" => "category",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null
     */
    protected $category;

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

}
