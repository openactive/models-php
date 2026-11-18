<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PhysicalActivity extends \OpenActive\Models\SchemaOrg\LifestyleModification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PhysicalActivity";
    }

    public static function fieldList() {
        $fields = [
            "associatedAnatomy" => "associatedAnatomy",
            "category" => "category",
            "epidemiology" => "epidemiology",
            "pathophysiology" => "pathophysiology",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\SuperficialAnatomy|string
     */
    protected $associatedAnatomy;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     *
     * @var string
     */
    protected $epidemiology;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     *
     * @var string
     */
    protected $pathophysiology;

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\SuperficialAnatomy|string
     */
    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\SuperficialAnatomy|string $associatedAnatomy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedAnatomy($associatedAnatomy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
            "\OpenActive\Models\SchemaOrg\SuperficialAnatomy",
            "string",
        ];

        $associatedAnatomy = self::checkTypes($associatedAnatomy, $types);

        $this->associatedAnatomy = $associatedAnatomy;
    }

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
     * @return string
     */
    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    /**
     * @param string $epidemiology
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpidemiology($epidemiology)
    {
        $types = [
            "string",
        ];

        $epidemiology = self::checkTypes($epidemiology, $types);

        $this->epidemiology = $epidemiology;
    }

    /**
     * @return string
     */
    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    /**
     * @param string $pathophysiology
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPathophysiology($pathophysiology)
    {
        $types = [
            "string",
        ];

        $pathophysiology = self::checkTypes($pathophysiology, $types);

        $this->pathophysiology = $pathophysiology;
    }

}
