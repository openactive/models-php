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
     * <a class="localLink" href="https://schema.org/ArchiveOrganization">ArchiveOrganization</a> that holds, keeps or maintains the <a class="localLink" href="https://schema.org/ArchiveComponent">ArchiveComponent</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ArchiveOrganization
     */
    protected $holdingArchive;

    /**
     * Current location of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $itemLocation;

    /**
     * @return \OpenActive\Models\SchemaOrg\ArchiveOrganization
     */
    public function getHoldingArchive()
    {
        return $this->holdingArchive;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ArchiveOrganization $holdingArchive
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoldingArchive($holdingArchive)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ArchiveOrganization",
        );

        $holdingArchive = self::checkTypes($holdingArchive, $types);

        $this->holdingArchive = $holdingArchive;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getItemLocation()
    {
        return $this->itemLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string $itemLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemLocation($itemLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        );

        $itemLocation = self::checkTypes($itemLocation, $types);

        $this->itemLocation = $itemLocation;
    }

}
