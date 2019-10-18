<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Map extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     *
     *
     * @var Schema.NET.MapCategoryType|null
     */
    protected $mapType;

    /**
     * @return Schema.NET.MapCategoryType|null
     */
    public function getMapType()
    {
        return $this->mapType;
    }

    /**
     * @param Schema.NET.MapCategoryType|null $mapType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMapType($mapType)
    {
        $types = array(
            "Schema.NET.MapCategoryType",
            "null",
        );

        $mapType = self::checkTypes($mapType, $types);

        $this->mapType = $mapType;
    }

}
