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
            "holdingArchive" => "holdingArchive",
            "itemLocation" => "itemLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [object Object]
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ArchiveOrganization|string
     */
    protected $holdingArchive;

    /**
     * [object Object]
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $itemLocation;

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

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getItemLocation()
    {
        return $this->itemLocation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress $itemLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemLocation($itemLocation)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        ];

        $itemLocation = self::checkTypes($itemLocation, $types);

        $this->itemLocation = $itemLocation;
    }

}
