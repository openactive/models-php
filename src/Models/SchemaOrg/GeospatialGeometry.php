<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeospatialGeometry extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GeospatialGeometry";
    }

    public static function fieldList() {
        $fields = [
            "geoEquals" => "geoEquals",
            "geoWithin" => "geoWithin",
            "geoCovers" => "geoCovers",
            "geoCrosses" => "geoCrosses",
            "geoOverlaps" => "geoOverlaps",
            "geoDisjoint" => "geoDisjoint",
            "geoContains" => "geoContains",
            "geoTouches" => "geoTouches",
            "geoIntersects" => "geoIntersects",
            "geoCoveredBy" => "geoCoveredBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoEquals;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoWithin;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoCovers;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoCrosses;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoOverlaps;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common. They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoDisjoint;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoContains;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoTouches;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoIntersects;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    protected $geoCoveredBy;

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoEquals()
    {
        return $this->geoEquals;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoEquals
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoEquals($geoEquals)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoEquals = self::checkTypes($geoEquals, $types);

        $this->geoEquals = $geoEquals;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoWithin()
    {
        return $this->geoWithin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoWithin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoWithin($geoWithin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoWithin = self::checkTypes($geoWithin, $types);

        $this->geoWithin = $geoWithin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoCovers()
    {
        return $this->geoCovers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoCovers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCovers($geoCovers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoCovers = self::checkTypes($geoCovers, $types);

        $this->geoCovers = $geoCovers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoCrosses()
    {
        return $this->geoCrosses;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoCrosses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCrosses($geoCrosses)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoCrosses = self::checkTypes($geoCrosses, $types);

        $this->geoCrosses = $geoCrosses;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoOverlaps()
    {
        return $this->geoOverlaps;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoOverlaps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoOverlaps($geoOverlaps)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoOverlaps = self::checkTypes($geoOverlaps, $types);

        $this->geoOverlaps = $geoOverlaps;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoDisjoint()
    {
        return $this->geoDisjoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoDisjoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoDisjoint($geoDisjoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoDisjoint = self::checkTypes($geoDisjoint, $types);

        $this->geoDisjoint = $geoDisjoint;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoContains()
    {
        return $this->geoContains;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoContains
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoContains($geoContains)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoContains = self::checkTypes($geoContains, $types);

        $this->geoContains = $geoContains;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoTouches()
    {
        return $this->geoTouches;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoTouches
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoTouches($geoTouches)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoTouches = self::checkTypes($geoTouches, $types);

        $this->geoTouches = $geoTouches;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoIntersects()
    {
        return $this->geoIntersects;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoIntersects
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoIntersects($geoIntersects)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoIntersects = self::checkTypes($geoIntersects, $types);

        $this->geoIntersects = $geoIntersects;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string
     */
    public function getGeoCoveredBy()
    {
        return $this->geoCoveredBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry|string $geoCoveredBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCoveredBy($geoCoveredBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "string",
        ];

        $geoCoveredBy = self::checkTypes($geoCoveredBy, $types);

        $this->geoCoveredBy = $geoCoveredBy;
    }

}
