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

    /**
     * A food or drink item contained in a menu or menu section.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MenuItem
     */
    protected $hasMenuItem;

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MenuSection
     */
    protected $hasMenuSection;

    /**
     * @return \OpenActive\Models\SchemaOrg\MenuItem
     */
    public function getHasMenuItem()
    {
        return $this->hasMenuItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MenuItem $hasMenuItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMenuItem($hasMenuItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MenuItem",
        );

        $hasMenuItem = self::checkTypes($hasMenuItem, $types);

        $this->hasMenuItem = $hasMenuItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MenuSection
     */
    public function getHasMenuSection()
    {
        return $this->hasMenuSection;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MenuSection $hasMenuSection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMenuSection($hasMenuSection)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MenuSection",
        );

        $hasMenuSection = self::checkTypes($hasMenuSection, $types);

        $this->hasMenuSection = $hasMenuSection;
    }

}
