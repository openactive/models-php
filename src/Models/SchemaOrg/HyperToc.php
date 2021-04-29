<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HyperToc extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HyperToc";
    }

    public static function fieldList() {
        $fields = [
            "tocEntry" => "tocEntry",
            "associatedMedia" => "associatedMedia",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HyperTocEntry
     */
    protected $tocEntry;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $associatedMedia;

    /**
     * @return \OpenActive\Models\SchemaOrg\HyperTocEntry
     */
    public function getTocEntry()
    {
        return $this->tocEntry;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HyperTocEntry $tocEntry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTocEntry($tocEntry)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HyperTocEntry",
        ];

        $tocEntry = self::checkTypes($tocEntry, $types);

        $this->tocEntry = $tocEntry;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject $associatedMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedMedia($associatedMedia)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
        ];

        $associatedMedia = self::checkTypes($associatedMedia, $types);

        $this->associatedMedia = $associatedMedia;
    }

}
