<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Place extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Place";
    }

    public static function fieldList() {
        $fields = [
            "aggregateRating" => "aggregateRating",
            "maps" => "maps",
            "faxNumber" => "faxNumber",
            "event" => "event",
            "openingHoursSpecification" => "openingHoursSpecification",
            "geo" => "geo",
            "geoEquals" => "geoEquals",
            "map" => "map",
            "hasDriveThroughService" => "hasDriveThroughService",
            "logo" => "logo",
            "additionalProperty" => "additionalProperty",
            "isAccessibleForFree" => "isAccessibleForFree",
            "geoOverlaps" => "geoOverlaps",
            "address" => "address",
            "geoIntersects" => "geoIntersects",
            "geoTouches" => "geoTouches",
            "containedIn" => "containedIn",
            "geoCovers" => "geoCovers",
            "hasMap" => "hasMap",
            "branchCode" => "branchCode",
            "telephone" => "telephone",
            "review" => "review",
            "photo" => "photo",
            "containsPlace" => "containsPlace",
            "events" => "events",
            "specialOpeningHoursSpecification" => "specialOpeningHoursSpecification",
            "publicAccess" => "publicAccess",
            "geoWithin" => "geoWithin",
            "smokingAllowed" => "smokingAllowed",
            "geoContains" => "geoContains",
            "globalLocationNumber" => "globalLocationNumber",
            "amenityFeature" => "amenityFeature",
            "tourBookingPage" => "tourBookingPage",
            "geoDisjoint" => "geoDisjoint",
            "isicV4" => "isicV4",
            "latitude" => "latitude",
            "photos" => "photos",
            "longitude" => "longitude",
            "reviews" => "reviews",
            "maximumAttendeeCapacity" => "maximumAttendeeCapacity",
            "geoCoveredBy" => "geoCoveredBy",
            "geoCrosses" => "geoCrosses",
            "slogan" => "slogan",
            "containedInPlace" => "containedInPlace",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * A URL to a map of the place.
     *
     *
     * @var string
     */
    protected $maps;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $event;

    /**
     * The opening hours of a certain place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    protected $openingHoursSpecification;

    /**
     * The geo coordinates of the place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoCoordinates|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $geo;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoEquals;

    /**
     * A URL to a map of the place.
     *
     *
     * @var string
     */
    protected $map;

    /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]], [[CovidTestingFacility]]) offers a service that can be used by driving through in a car. In the case of [[CovidTestingFacility]] such facilities could potentially help with social distancing from other potentially-infected users.
     *
     *
     * @var bool|null
     */
    protected $hasDriveThroughService;

    /**
     * An associated logo.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $logo;

    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue
     */
    protected $additionalProperty;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var bool|null
     */
    protected $isAccessibleForFree;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    protected $geoOverlaps;

    /**
     * Physical address of the item.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $address;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoIntersects;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: they have at least one boundary point in common, but no interior points." (a symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM) )
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoTouches;

    /**
     * The basic containment relation between a place and one that contains it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $containedIn;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    protected $geoCovers;

    /**
     * A URL to a map of the place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Map|string
     */
    protected $hasMap;

    /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.\n\nFor example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
     *       
     *
     *
     * @var string
     */
    protected $branchCode;

    /**
     * The telephone number.
     *
     *
     * @var string
     */
    protected $telephone;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * A photograph of this place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|\OpenActive\Models\SchemaOrg\Photograph
     */
    protected $photo;

    /**
     * The basic containment relation between a place and another that it contains.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $containsPlace;

    /**
     * Upcoming or past events associated with this place or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $events;

    /**
     * The special opening hours of a certain place.\n\nUse this to explicitly override general opening hours brought in scope by [[openingHoursSpecification]] or [[openingHours]].
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    protected $specialOpeningHoursSpecification;

    /**
     * A flag to signal that the [[Place]] is open to public visitors.  If this property is omitted there is no assumed default boolean value
     *
     *
     * @var bool|null
     */
    protected $publicAccess;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoWithin;

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
     *
     *
     * @var bool|null
     */
    protected $smokingAllowed;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    protected $geoContains;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     *
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LocationFeatureSpecification
     */
    protected $amenityFeature;

    /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
     *
     *
     * @var string
     */
    protected $tourBookingPage;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: they have no point in common. They form a set of disconnected geometries." (a symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM))
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    protected $geoDisjoint;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     *
     * @var string
     */
    protected $isicV4;

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     *
     * @var string|Number|null
     */
    protected $latitude;

    /**
     * Photographs of this place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|\OpenActive\Models\SchemaOrg\Photograph
     */
    protected $photos;

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     *
     * @var string|Number|null
     */
    protected $longitude;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $reviews;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     *
     * @var int|null
     */
    protected $maximumAttendeeCapacity;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoCoveredBy;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    protected $geoCrosses;

    /**
     * A slogan or motto associated with the item.
     *
     *
     * @var string
     */
    protected $slogan;

    /**
     * The basic containment relation between a place and one that contains it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $containedInPlace;

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AggregateRating",
        ];

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return string
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * @param string $maps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaps($maps)
    {
        $types = [
            "string",
        ];

        $maps = self::checkTypes($maps, $types);

        $this->maps = $maps;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFaxNumber($faxNumber)
    {
        $types = [
            "string",
        ];

        $faxNumber = self::checkTypes($faxNumber, $types);

        $this->faxNumber = $faxNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
        ];

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification $openingHoursSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpeningHoursSpecification($openingHoursSpecification)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
        ];

        $openingHoursSpecification = self::checkTypes($openingHoursSpecification, $types);

        $this->openingHoursSpecification = $openingHoursSpecification;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoCoordinates|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoCoordinates|\OpenActive\Models\SchemaOrg\GeoShape $geo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeo($geo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoCoordinates",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        ];

        $geo = self::checkTypes($geo, $types);

        $this->geo = $geo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoEquals()
    {
        return $this->geoEquals;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoEquals
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoEquals($geoEquals)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        ];

        $geoEquals = self::checkTypes($geoEquals, $types);

        $this->geoEquals = $geoEquals;
    }

    /**
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param string $map
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMap($map)
    {
        $types = [
            "string",
        ];

        $map = self::checkTypes($map, $types);

        $this->map = $map;
    }

    /**
     * @return bool|null
     */
    public function getHasDriveThroughService()
    {
        return $this->hasDriveThroughService;
    }

    /**
     * @param bool|null $hasDriveThroughService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDriveThroughService($hasDriveThroughService)
    {
        $types = [
            "bool",
            "null",
        ];

        $hasDriveThroughService = self::checkTypes($hasDriveThroughService, $types);

        $this->hasDriveThroughService = $hasDriveThroughService;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ImageObject",
        ];

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue $additionalProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
        ];

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return bool|null
     */
    public function getIsAccessibleForFree()
    {
        return $this->isAccessibleForFree;
    }

    /**
     * @param bool|null $isAccessibleForFree
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAccessibleForFree($isAccessibleForFree)
    {
        $types = [
            "bool",
            "null",
        ];

        $isAccessibleForFree = self::checkTypes($isAccessibleForFree, $types);

        $this->isAccessibleForFree = $isAccessibleForFree;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    public function getGeoOverlaps()
    {
        return $this->geoOverlaps;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place $geoOverlaps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoOverlaps($geoOverlaps)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $geoOverlaps = self::checkTypes($geoOverlaps, $types);

        $this->geoOverlaps = $geoOverlaps;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        ];

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoIntersects()
    {
        return $this->geoIntersects;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoIntersects
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoIntersects($geoIntersects)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        ];

        $geoIntersects = self::checkTypes($geoIntersects, $types);

        $this->geoIntersects = $geoIntersects;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoTouches()
    {
        return $this->geoTouches;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoTouches
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoTouches($geoTouches)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        ];

        $geoTouches = self::checkTypes($geoTouches, $types);

        $this->geoTouches = $geoTouches;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getContainedIn()
    {
        return $this->containedIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $containedIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedIn($containedIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $containedIn = self::checkTypes($containedIn, $types);

        $this->containedIn = $containedIn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    public function getGeoCovers()
    {
        return $this->geoCovers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place $geoCovers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCovers($geoCovers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $geoCovers = self::checkTypes($geoCovers, $types);

        $this->geoCovers = $geoCovers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Map|string
     */
    public function getHasMap()
    {
        return $this->hasMap;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Map|string $hasMap
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMap($hasMap)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Map",
            "string",
        ];

        $hasMap = self::checkTypes($hasMap, $types);

        $this->hasMap = $hasMap;
    }

    /**
     * @return string
     */
    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * @param string $branchCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBranchCode($branchCode)
    {
        $types = [
            "string",
        ];

        $branchCode = self::checkTypes($branchCode, $types);

        $this->branchCode = $branchCode;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTelephone($telephone)
    {
        $types = [
            "string",
        ];

        $telephone = self::checkTypes($telephone, $types);

        $this->telephone = $telephone;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
        ];

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject|\OpenActive\Models\SchemaOrg\Photograph
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|\OpenActive\Models\SchemaOrg\Photograph $photo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhoto($photo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "\OpenActive\Models\SchemaOrg\Photograph",
        ];

        $photo = self::checkTypes($photo, $types);

        $this->photo = $photo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getContainsPlace()
    {
        return $this->containsPlace;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $containsPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainsPlace($containsPlace)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $containsPlace = self::checkTypes($containsPlace, $types);

        $this->containsPlace = $containsPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $events
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvents($events)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
        ];

        $events = self::checkTypes($events, $types);

        $this->events = $events;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    public function getSpecialOpeningHoursSpecification()
    {
        return $this->specialOpeningHoursSpecification;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification $specialOpeningHoursSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpecialOpeningHoursSpecification($specialOpeningHoursSpecification)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
        ];

        $specialOpeningHoursSpecification = self::checkTypes($specialOpeningHoursSpecification, $types);

        $this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;
    }

    /**
     * @return bool|null
     */
    public function getPublicAccess()
    {
        return $this->publicAccess;
    }

    /**
     * @param bool|null $publicAccess
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublicAccess($publicAccess)
    {
        $types = [
            "bool",
            "null",
        ];

        $publicAccess = self::checkTypes($publicAccess, $types);

        $this->publicAccess = $publicAccess;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoWithin()
    {
        return $this->geoWithin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoWithin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoWithin($geoWithin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        ];

        $geoWithin = self::checkTypes($geoWithin, $types);

        $this->geoWithin = $geoWithin;
    }

    /**
     * @return bool|null
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * @param bool|null $smokingAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $types = [
            "bool",
            "null",
        ];

        $smokingAllowed = self::checkTypes($smokingAllowed, $types);

        $this->smokingAllowed = $smokingAllowed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    public function getGeoContains()
    {
        return $this->geoContains;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place $geoContains
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoContains($geoContains)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $geoContains = self::checkTypes($geoContains, $types);

        $this->geoContains = $geoContains;
    }

    /**
     * @return string
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * @param string $globalLocationNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $types = [
            "string",
        ];

        $globalLocationNumber = self::checkTypes($globalLocationNumber, $types);

        $this->globalLocationNumber = $globalLocationNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\LocationFeatureSpecification
     */
    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LocationFeatureSpecification $amenityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmenityFeature($amenityFeature)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\LocationFeatureSpecification",
        ];

        $amenityFeature = self::checkTypes($amenityFeature, $types);

        $this->amenityFeature = $amenityFeature;
    }

    /**
     * @return string
     */
    public function getTourBookingPage()
    {
        return $this->tourBookingPage;
    }

    /**
     * @param string $tourBookingPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTourBookingPage($tourBookingPage)
    {
        $types = [
            "string",
        ];

        $tourBookingPage = self::checkTypes($tourBookingPage, $types);

        $this->tourBookingPage = $tourBookingPage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    public function getGeoDisjoint()
    {
        return $this->geoDisjoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place $geoDisjoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoDisjoint($geoDisjoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $geoDisjoint = self::checkTypes($geoDisjoint, $types);

        $this->geoDisjoint = $geoDisjoint;
    }

    /**
     * @return string
     */
    public function getIsicV4()
    {
        return $this->isicV4;
    }

    /**
     * @param string $isicV4
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsicV4($isicV4)
    {
        $types = [
            "string",
        ];

        $isicV4 = self::checkTypes($isicV4, $types);

        $this->isicV4 = $isicV4;
    }

    /**
     * @return string|Number|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string|Number|null $latitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLatitude($latitude)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $latitude = self::checkTypes($latitude, $types);

        $this->latitude = $latitude;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject|\OpenActive\Models\SchemaOrg\Photograph
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|\OpenActive\Models\SchemaOrg\Photograph $photos
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhotos($photos)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "\OpenActive\Models\SchemaOrg\Photograph",
        ];

        $photos = self::checkTypes($photos, $types);

        $this->photos = $photos;
    }

    /**
     * @return string|Number|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string|Number|null $longitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLongitude($longitude)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $longitude = self::checkTypes($longitude, $types);

        $this->longitude = $longitude;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $reviews
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
        ];

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

    /**
     * @return int|null
     */
    public function getMaximumAttendeeCapacity()
    {
        return $this->maximumAttendeeCapacity;
    }

    /**
     * @param int|null $maximumAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumAttendeeCapacity($maximumAttendeeCapacity)
    {
        $types = [
            "int",
            "null",
        ];

        $maximumAttendeeCapacity = self::checkTypes($maximumAttendeeCapacity, $types);

        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoCoveredBy()
    {
        return $this->geoCoveredBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoCoveredBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCoveredBy($geoCoveredBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        ];

        $geoCoveredBy = self::checkTypes($geoCoveredBy, $types);

        $this->geoCoveredBy = $geoCoveredBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place
     */
    public function getGeoCrosses()
    {
        return $this->geoCrosses;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|\OpenActive\Models\SchemaOrg\Place $geoCrosses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCrosses($geoCrosses)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $geoCrosses = self::checkTypes($geoCrosses, $types);

        $this->geoCrosses = $geoCrosses;
    }

    /**
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSlogan($slogan)
    {
        $types = [
            "string",
        ];

        $slogan = self::checkTypes($slogan, $types);

        $this->slogan = $slogan;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getContainedInPlace()
    {
        return $this->containedInPlace;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $containedInPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedInPlace($containedInPlace)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $containedInPlace = self::checkTypes($containedInPlace, $types);

        $this->containedInPlace = $containedInPlace;
    }

}
