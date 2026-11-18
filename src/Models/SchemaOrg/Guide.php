<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Guide extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Guide";
    }

    public static function fieldList() {
        $fields = [
            "category" => "category",
            "reviewAspect" => "reviewAspect",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StructuredValue|string
     */
    protected $reviewAspect;

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\StructuredValue|string
     */
    public function getReviewAspect()
    {
        return $this->reviewAspect;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StructuredValue|string $reviewAspect
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewAspect($reviewAspect)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "string",
        ];

        $reviewAspect = self::checkTypes($reviewAspect, $types);

        $this->reviewAspect = $reviewAspect;
    }

}
