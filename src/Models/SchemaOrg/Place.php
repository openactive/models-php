<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Place extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoWithin;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoContains;

    /**
     * A photograph of this place.
     *
     *
     * @var ImageObject|\OpenActive\Models\SchemaOrg\Photograph
     */
    protected $photo;

    /**
     * Physical address of the item.
     *
     *
     * @var PostalAddress|string
     */
    protected $address;

    /**
     * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     *
     *
     * @var string|decimal|null
     */
    protected $latitude;

    /**
     * The opening hours of a certain place.
     *
     *
     * @var OpeningHoursSpecification
     */
    protected $openingHoursSpecification;

    /**
     * Upcoming or past events associated with this place or organization.
     *
     *
     * @var Event
     */
    protected $events;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * The basic containment relation between a place and one that contains it.
     *
     *
     * @var Place
     */
    protected $containedInPlace;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place
     */
    protected $geoOverlaps;

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
     *
     *
     * @var bool|null
     */
    protected $smokingAllowed;

    /**
     * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     *
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     *
     * @var int|null
     */
    protected $maximumAttendeeCapacity;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $reviews;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place
     */
    protected $geoCrosses;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * Photographs of this place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Photograph|ImageObject
     */
    protected $photos;

    /**
     * A URL to a map of the place.
     *
     *
     * @var string
     */
    protected $map;

    /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.<br/><br/>
     * 
     * For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
     *
     *
     * @var string
     */
    protected $branchCode;

    /**
     * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     *
     *
     * @var decimal|string|null
     */
    protected $longitude;

    /**
     * A URL to a map of the place.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Map
     */
    protected $hasMap;

    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>
     * 
     * Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     *
     *
     * @var PropertyValue
     */
    protected $additionalProperty;

    /**
     * The special opening hours of a certain place.<br/><br/>
     * 
     * Use this to explicitly override general opening hours brought in scope by <a class="localLink" href="https://schema.org/openingHoursSpecification">openingHoursSpecification</a> or <a class="localLink" href="https://schema.org/openingHours">openingHours</a>.
     *
     *
     * @var OpeningHoursSpecification
     */
    protected $specialOpeningHoursSpecification;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
     *
     *
     * @var LocationFeatureSpecification
     */
    protected $amenityFeature;

    /**
     * An associated logo.
     *
     *
     * @var ImageObject|string
     */
    protected $logo;

    /**
     * The telephone number.
     *
     *
     * @var string
     */
    protected $telephone;

    /**
     * The geo coordinates of the place.
     *
     *
     * @var GeoCoordinates|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $geo;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoCovers;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>. "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship)
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoEquals;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * The basic containment relation between a place and one that contains it.
     *
     *
     * @var Place
     */
    protected $containedIn;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     *
     * @var Event
     */
    protected $event;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: they have at least one boundary point in common, but no interior points." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a> )
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoTouches;

    /**
     * The basic containment relation between a place and another that it contains.
     *
     *
     * @var Place
     */
    protected $containsPlace;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: they have no point in common. They form a set of disconnected geometries." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place
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
     * A slogan or motto associated with the item.
     *
     *
     * @var string
     */
    protected $slogan;

    /**
     * A URL to a map of the place.
     *
     *
     * @var string
     */
    protected $maps;

    /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoIntersects;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var bool|null
     */
    protected $isAccessibleForFree;

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    protected $geoCoveredBy;

    /**
     * A flag to signal that the <a class="localLink" href="https://schema.org/Place">Place</a> is open to public visitors.  If this property is omitted there is no assumed default boolean value
     *
     *
     * @var bool|null
     */
    protected $publicAccess;

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * Sometimes a description is stored with formatting (e.g. href, bold, italics, embedded YouTube videos). This formatting can be useful for data consumers.
     *
     *
     * @var string
     */
    protected $formattedDescription;

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoWithin()
    {
        return $this->geoWithin;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoWithin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoWithin($geoWithin)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        );

        $geoWithin = self::checkTypes($geoWithin, $types);

        $this->geoWithin = $geoWithin;
    }

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoContains()
    {
        return $this->geoContains;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoContains
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoContains($geoContains)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        );

        $geoContains = self::checkTypes($geoContains, $types);

        $this->geoContains = $geoContains;
    }

    /**
     * @return ImageObject|\OpenActive\Models\SchemaOrg\Photograph
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param ImageObject|\OpenActive\Models\SchemaOrg\Photograph $photo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhoto($photo)
    {
        $types = array(
            "ImageObject",
            "\OpenActive\Models\SchemaOrg\Photograph",
        );

        $photo = self::checkTypes($photo, $types);

        $this->photo = $photo;
    }

    /**
     * @return PostalAddress|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param PostalAddress|string $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "PostalAddress",
            "string",
        );

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return string|decimal|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string|decimal|null $latitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLatitude($latitude)
    {
        $types = array(
            "string",
            "decimal",
            "null",
        );

        $latitude = self::checkTypes($latitude, $types);

        $this->latitude = $latitude;
    }

    /**
     * @return OpeningHoursSpecification
     */
    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    /**
     * @param OpeningHoursSpecification $openingHoursSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpeningHoursSpecification($openingHoursSpecification)
    {
        $types = array(
            "OpeningHoursSpecification",
        );

        $openingHoursSpecification = self::checkTypes($openingHoursSpecification, $types);

        $this->openingHoursSpecification = $openingHoursSpecification;
    }

    /**
     * @return Event
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event $events
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvents($events)
    {
        $types = array(
            "Event",
        );

        $events = self::checkTypes($events, $types);

        $this->events = $events;
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
        $types = array(
            "string",
        );

        $faxNumber = self::checkTypes($faxNumber, $types);

        $this->faxNumber = $faxNumber;
    }

    /**
     * @return Place
     */
    public function getContainedInPlace()
    {
        return $this->containedInPlace;
    }

    /**
     * @param Place $containedInPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedInPlace($containedInPlace)
    {
        $types = array(
            "Place",
        );

        $containedInPlace = self::checkTypes($containedInPlace, $types);

        $this->containedInPlace = $containedInPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place
     */
    public function getGeoOverlaps()
    {
        return $this->geoOverlaps;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place $geoOverlaps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoOverlaps($geoOverlaps)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "Place",
        );

        $geoOverlaps = self::checkTypes($geoOverlaps, $types);

        $this->geoOverlaps = $geoOverlaps;
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
        $types = array(
            "bool",
            "null",
        );

        $smokingAllowed = self::checkTypes($smokingAllowed, $types);

        $this->smokingAllowed = $smokingAllowed;
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
        $types = array(
            "string",
        );

        $globalLocationNumber = self::checkTypes($globalLocationNumber, $types);

        $this->globalLocationNumber = $globalLocationNumber;
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
        $types = array(
            "int",
            "null",
        );

        $maximumAttendeeCapacity = self::checkTypes($maximumAttendeeCapacity, $types);

        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place
     */
    public function getGeoCrosses()
    {
        return $this->geoCrosses;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place $geoCrosses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCrosses($geoCrosses)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "Place",
        );

        $geoCrosses = self::checkTypes($geoCrosses, $types);

        $this->geoCrosses = $geoCrosses;
    }

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\AggregateRating",
        );

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Photograph|ImageObject
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Photograph|ImageObject $photos
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPhotos($photos)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Photograph",
            "ImageObject",
        );

        $photos = self::checkTypes($photos, $types);

        $this->photos = $photos;
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
        $types = array(
            "string",
        );

        $map = self::checkTypes($map, $types);

        $this->map = $map;
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
        $types = array(
            "string",
        );

        $branchCode = self::checkTypes($branchCode, $types);

        $this->branchCode = $branchCode;
    }

    /**
     * @return decimal|string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param decimal|string|null $longitude
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLongitude($longitude)
    {
        $types = array(
            "decimal",
            "string",
            "null",
        );

        $longitude = self::checkTypes($longitude, $types);

        $this->longitude = $longitude;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Map
     */
    public function getHasMap()
    {
        return $this->hasMap;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Map $hasMap
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMap($hasMap)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Map",
        );

        $hasMap = self::checkTypes($hasMap, $types);

        $this->hasMap = $hasMap;
    }

    /**
     * @return PropertyValue
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param PropertyValue $additionalProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = array(
            "PropertyValue",
        );

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return OpeningHoursSpecification
     */
    public function getSpecialOpeningHoursSpecification()
    {
        return $this->specialOpeningHoursSpecification;
    }

    /**
     * @param OpeningHoursSpecification $specialOpeningHoursSpecification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpecialOpeningHoursSpecification($specialOpeningHoursSpecification)
    {
        $types = array(
            "OpeningHoursSpecification",
        );

        $specialOpeningHoursSpecification = self::checkTypes($specialOpeningHoursSpecification, $types);

        $this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;
    }

    /**
     * @return LocationFeatureSpecification
     */
    public function getAmenityFeature()
    {
        return $this->amenityFeature;
    }

    /**
     * @param LocationFeatureSpecification $amenityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmenityFeature($amenityFeature)
    {
        $types = array(
            "LocationFeatureSpecification",
        );

        $amenityFeature = self::checkTypes($amenityFeature, $types);

        $this->amenityFeature = $amenityFeature;
    }

    /**
     * @return ImageObject|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param ImageObject|string $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = array(
            "ImageObject",
            "string",
        );

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
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
        $types = array(
            "string",
        );

        $telephone = self::checkTypes($telephone, $types);

        $this->telephone = $telephone;
    }

    /**
     * @return GeoCoordinates|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param GeoCoordinates|\OpenActive\Models\SchemaOrg\GeoShape $geo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeo($geo)
    {
        $types = array(
            "GeoCoordinates",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        );

        $geo = self::checkTypes($geo, $types);

        $this->geo = $geo;
    }

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoCovers()
    {
        return $this->geoCovers;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoCovers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCovers($geoCovers)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        );

        $geoCovers = self::checkTypes($geoCovers, $types);

        $this->geoCovers = $geoCovers;
    }

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoEquals()
    {
        return $this->geoEquals;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoEquals
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoEquals($geoEquals)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        );

        $geoEquals = self::checkTypes($geoEquals, $types);

        $this->geoEquals = $geoEquals;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return Place
     */
    public function getContainedIn()
    {
        return $this->containedIn;
    }

    /**
     * @param Place $containedIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainedIn($containedIn)
    {
        $types = array(
            "Place",
        );

        $containedIn = self::checkTypes($containedIn, $types);

        $this->containedIn = $containedIn;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = array(
            "Event",
        );

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoTouches()
    {
        return $this->geoTouches;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoTouches
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoTouches($geoTouches)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        );

        $geoTouches = self::checkTypes($geoTouches, $types);

        $this->geoTouches = $geoTouches;
    }

    /**
     * @return Place
     */
    public function getContainsPlace()
    {
        return $this->containsPlace;
    }

    /**
     * @param Place $containsPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainsPlace($containsPlace)
    {
        $types = array(
            "Place",
        );

        $containsPlace = self::checkTypes($containsPlace, $types);

        $this->containsPlace = $containsPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place
     */
    public function getGeoDisjoint()
    {
        return $this->geoDisjoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeospatialGeometry|Place $geoDisjoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoDisjoint($geoDisjoint)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
            "Place",
        );

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
        $types = array(
            "string",
        );

        $isicV4 = self::checkTypes($isicV4, $types);

        $this->isicV4 = $isicV4;
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
        $types = array(
            "string",
        );

        $slogan = self::checkTypes($slogan, $types);

        $this->slogan = $slogan;
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
        $types = array(
            "string",
        );

        $maps = self::checkTypes($maps, $types);

        $this->maps = $maps;
    }

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoIntersects()
    {
        return $this->geoIntersects;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoIntersects
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoIntersects($geoIntersects)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        );

        $geoIntersects = self::checkTypes($geoIntersects, $types);

        $this->geoIntersects = $geoIntersects;
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
        $types = array(
            "bool",
            "null",
        );

        $isAccessibleForFree = self::checkTypes($isAccessibleForFree, $types);

        $this->isAccessibleForFree = $isAccessibleForFree;
    }

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry
     */
    public function getGeoCoveredBy()
    {
        return $this->geoCoveredBy;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeospatialGeometry $geoCoveredBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoCoveredBy($geoCoveredBy)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeospatialGeometry",
        );

        $geoCoveredBy = self::checkTypes($geoCoveredBy, $types);

        $this->geoCoveredBy = $geoCoveredBy;
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
        $types = array(
            "bool",
            "null",
        );

        $publicAccess = self::checkTypes($publicAccess, $types);

        $this->publicAccess = $publicAccess;
    }

    /**
     * @return string
     */
    public function getFormattedDescription()
    {
        return $this->formattedDescription;
    }

    /**
     * @param string $formattedDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFormattedDescription($formattedDescription)
    {
        $types = array(
            "string",
        );

        $formattedDescription = self::checkTypes($formattedDescription, $types);

        $this->formattedDescription = $formattedDescription;
    }

}
