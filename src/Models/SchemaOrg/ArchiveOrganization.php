<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ArchiveOrganization extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ArchiveOrganization";
    }

    public static function fieldList() {
        $fields = [
            "archiveHeld" => "archiveHeld",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [object Object]
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ArchiveComponent
     */
    protected $archiveHeld;

    /**
     * @return \OpenActive\Models\SchemaOrg\ArchiveComponent
     */
    public function getArchiveHeld()
    {
        return $this->archiveHeld;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ArchiveComponent $archiveHeld
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArchiveHeld($archiveHeld)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ArchiveComponent",
        ];

        $archiveHeld = self::checkTypes($archiveHeld, $types);

        $this->archiveHeld = $archiveHeld;
    }

}
