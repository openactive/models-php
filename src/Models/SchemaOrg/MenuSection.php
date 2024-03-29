<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MenuSection extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MenuSection";
    }

    public static function fieldList() {
        $fields = [
            "hasMenuSection" => "hasMenuSection",
            "hasMenuItem" => "hasMenuItem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MenuSection|string
     */
    protected $hasMenuSection;

    /**
     * A food or drink item contained in a menu or menu section.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MenuItem|string
     */
    protected $hasMenuItem;

    /**
     * @return \OpenActive\Models\SchemaOrg\MenuSection|string
     */
    public function getHasMenuSection()
    {
        return $this->hasMenuSection;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MenuSection|string $hasMenuSection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMenuSection($hasMenuSection)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MenuSection",
            "string",
        ];

        $hasMenuSection = self::checkTypes($hasMenuSection, $types);

        $this->hasMenuSection = $hasMenuSection;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MenuItem|string
     */
    public function getHasMenuItem()
    {
        return $this->hasMenuItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MenuItem|string $hasMenuItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMenuItem($hasMenuItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MenuItem",
            "string",
        ];

        $hasMenuItem = self::checkTypes($hasMenuItem, $types);

        $this->hasMenuItem = $hasMenuItem;
    }

}
