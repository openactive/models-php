<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class URL extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:URL";
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
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $category;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

}
