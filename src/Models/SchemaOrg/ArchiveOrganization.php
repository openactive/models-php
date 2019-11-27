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
     * Collection, <a href="https://en.wikipedia.org/wiki/Fonds">fonds</a>, or item held, kept or maintained by an <a class="localLink" href="https://schema.org/ArchiveOrganization">ArchiveOrganization</a>.
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\ArchiveComponent",
        );

        $archiveHeld = self::checkTypes($archiveHeld, $types);

        $this->archiveHeld = $archiveHeld;
    }

}
