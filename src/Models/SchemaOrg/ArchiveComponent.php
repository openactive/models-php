<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ArchiveComponent extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ArchiveComponent";
    }

    public static function fieldList() {
        $fields = [
            "itemLocation" => "itemLocation",
            "holdingArchive" => "holdingArchive",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [object Object]
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress|string|\OpenActive\Models\SchemaOrg\Place
     */
    protected $itemLocation;

    /**
     * [object Object]
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ArchiveOrganization|string
     */
    protected $holdingArchive;

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress|string|\OpenActive\Models\SchemaOrg\Place
     */
    public function getItemLocation()
    {
        return $this->itemLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress|string|\OpenActive\Models\SchemaOrg\Place $itemLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemLocation($itemLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $itemLocation = self::checkTypes($itemLocation, $types);

        $this->itemLocation = $itemLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ArchiveOrganization|string
     */
    public function getHoldingArchive()
    {
        return $this->holdingArchive;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ArchiveOrganization|string $holdingArchive
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoldingArchive($holdingArchive)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ArchiveOrganization",
            "string",
        ];

        $holdingArchive = self::checkTypes($holdingArchive, $types);

        $this->holdingArchive = $holdingArchive;
    }

}
