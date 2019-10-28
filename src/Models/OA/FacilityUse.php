<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class FacilityUse extends \OpenActive\Models\SchemaOrg\Product
{
    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the facility use
     *
     * ```json
     * "name": "Speedball"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A free text description of the facility use
     *
     * ```json
     * "description": "An fast paced game that incorporates netball, handball and football."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Provide additional, specific documentation for participants about how disabilities are, or can be supported at the Event.
     *
     * ```json
     * "accessibilityInformation": "This route has been British Cycling assessed as an accessible route, meaning it is suitable for the majority of adaptive bikes. The route will have no or low levels of traffic, there will be plenty of space and will have a good surface throughout. If you have any questions about using this route on an adaptive bike on this ride, please use visit https://www.letsride.co.uk/accessibility or call 0123 456 7000 and ask for the Recreation team."
     * ```
     *
     * @var string
     */
    protected $accessibilityInformation;

    /**
     * Used to specify the types of disabilities or impairments that are supported at an event.
     *
     * ```json
     * "accessibilitySupport": [
     *   {
     *     "type": "Concept",
     *     "id": "https://openactive.io/accessibility-support#1393f2dc-3fcc-4be9-a99f-f1e51f5ad277",
     *     "prefLabel": "Visual impairment",
     *     "inScheme": "https://openactive.io/accessibility-support"
     *   }
     * ]
     * ```
     *
     * @var Concept[]
     */
    protected $accessibilitySupport;

    /**
     * Specifies the physical activity or activities that will take place during a facility use.
     *
     * ```json
     * "activity": [
     *   {
     *     "type": "Concept",
     *     "id": "https://openactive.io/activity-list#c0360db0-a817-4bae-9167-40f89b49fc9e",
     *     "prefLabel": "Badminton",
     *     "inScheme": "https://openactive.io/activity-list"
     *   }
     * ]
     * ```
     *
     * @var Concept[]
     */
    protected $activity;

    /**
     * Provides additional notes and instructions for users of a facility. E.g. more information on how to find it, what to bring, etc.
     *
     * ```json
     * "attendeeInstructions": "The tennis court is locked with a keycode, so please ensure you book online in advance to gain access."
     * ```
     *
     * @var string
     */
    protected $attendeeInstructions;

    /**
     * Provides a set of tags that help categorise and describe a facility.
     *
     * ```json
     * "category": [
     *   {
     *     "id": "https://example.com/reference/categories#Top%20Club%20Level",
     *     "inScheme": "https://example.com/reference/categories",
     *     "prefLabel": "Top Club Level",
     *     "type": "Concept"
     *   }
     * ]
     * ```
     *
     * @var string[]|Concept[]
     */
    protected $category;

    /**
     * An array of slots of availability of this FacilityUse.
     *
     * ```json
     * "event": [
     *   {
     *     "type": "Slot",
     *     "id": "http://www.example.org/api/facility-uses/432#/event/2018-03-01T10:00:00Z",
     *     "startDate": "2018-03-01T11:00:00Z",
     *     "endDate": "2018-03-01T11:30:00Z",
     *     "duration": "PT30M",
     *     "remainingUses": 3,
     *     "maximumUses": 6
     *   }
     * ]
     * ```
     *
     * @var Slot[]
     */
    protected $event;

    /**
     * The times the facility use is available
     *
     *
     * @var OpeningHoursSpecification[]
     */
    protected $hoursAvailable;

    /**
     * An image or photo that depicts the facility use, e.g. a photo taken at a previous event.
     *
     * ```json
     * "image": [
     *   {
     *     "thumbnail": "http://example.com/static/image/speedball_thumbnail.jpg",
     *     "type": "ImageObject",
     *     "url": "http://example.com/static/image/speedball_large.jpg"
     *   }
     * ]
     * ```
     *
     * @var ImageObject[]
     */
    protected $image;

    /**
     * Inverse of the oa:aggregateFacilityUse property. Relates a oa:FacilityUse (e.g. an opportunity to play tennis at a specific location) to an oa:IndividualFacilityUse (e.g. an opportunity to play tennis on a specific court).
     *
     * ```json
     * "individualFacilityUse": [
     *   {
     *     "type": "IndividualFacilityUse",
     *     "id": "http://www.example.org/facility-uses/1",
     *     "name": "Tennis Court 1"
     *   }
     * ]
     * ```
     *
     * @var IndividualFacilityUse[]
     */
    protected $individualFacilityUse;

    /**
     * The location at which the facility use will take place.
     *
     * ```json
     * "location": {
     *   "address": {
     *     "addressLocality": "New Malden",
     *     "addressRegion": "London",
     *     "postalCode": "NW5 3DU",
     *     "streetAddress": "Raynes Park High School, 46A West Barnes Lane",
     *     "type": "PostalAddress"
     *   },
     *   "description": "Raynes Park High School in London",
     *   "geo": {
     *     "latitude": 51.4034423828125,
     *     "longitude": -0.2369088977575302,
     *     "type": "GeoCoordinates"
     *   },
     *   "id": "https://example.com/locations/1234ABCD",
     *   "identifier": "1234ABCD",
     *   "name": "Raynes Park High School",
     *   "telephone": "01253 473934",
     *   "type": "Place"
     * }
     * ```
     *
     * @var Place
     */
    protected $location;

    /**
     * An array of schema:Offer that include the price of booking.
     *
     * ```json
     * "offers": {
     *   "@type": "Offer",
     *   "identifier": "OX-AD",
     *   "name": "Adult",
     *   "price": 7.5,
     *   "priceCurrency": "GBP",
     *   "url": "https://profile.everyoneactive.com/booking?Site=0140&Activities=1402CBP20150217&Culture=en-GB"
     * }
     * ```
     *
     * @var Offer[]
     */
    protected $offers;

    /**
     * The possible actions that a user may make. e.g. Book.
     *
     * ```json
     * "potentialAction": [
     *   {
     *     "name": "Book",
     *     "target": {
     *       "encodingType": "application/vnd.openactive.v1.0+json",
     *       "httpMethod": "POST",
     *       "type": "EntryPoint",
     *       "url": "https://example.com/orders"
     *     },
     *     "type": "Action"
     *   }
     * ]
     * ```
     *
     * @var Action[]
     */
    protected $potentialAction;

    /**
     * The organisation responsible for providing the facility
     *
     * ```json
     * "provider": {
     *   "name": "Central Speedball Association",
     *   "type": "Organization",
     *   "url": "http://www.speedball-world.com"
     * }
     * ```
     *
     * @var Organization
     */
    protected $provider;

    /**
     * A URL to a web page (or section of a page) that describes the facility use.
     *
     * ```json
     * "url": "https://example.com/facility-use/1234"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAccessibilityInformation()
    {
        return $this->accessibilityInformation;
    }

    /**
     * @param string $accessibilityInformation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityInformation($accessibilityInformation)
    {
        $types = array(
            "string",
        );

        $accessibilityInformation = self::checkTypes($accessibilityInformation, $types);

        $this->accessibilityInformation = $accessibilityInformation;
    }

    /**
     * @return Concept[]
     */
    public function getAccessibilitySupport()
    {
        return $this->accessibilitySupport;
    }

    /**
     * @param Concept[] $accessibilitySupport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilitySupport($accessibilitySupport)
    {
        $types = array(
            "Concept[]",
        );

        $accessibilitySupport = self::checkTypes($accessibilitySupport, $types);

        $this->accessibilitySupport = $accessibilitySupport;
    }

    /**
     * @return Concept[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param Concept[] $activity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivity($activity)
    {
        $types = array(
            "Concept[]",
        );

        $activity = self::checkTypes($activity, $types);

        $this->activity = $activity;
    }

    /**
     * @return string
     */
    public function getAttendeeInstructions()
    {
        return $this->attendeeInstructions;
    }

    /**
     * @param string $attendeeInstructions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAttendeeInstructions($attendeeInstructions)
    {
        $types = array(
            "string",
        );

        $attendeeInstructions = self::checkTypes($attendeeInstructions, $types);

        $this->attendeeInstructions = $attendeeInstructions;
    }

    /**
     * @return string[]|Concept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string[]|Concept[] $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "string[]",
            "Concept[]",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return Slot[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Slot[] $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = array(
            "Slot[]",
        );

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

    /**
     * @return OpeningHoursSpecification[]
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param OpeningHoursSpecification[] $hoursAvailable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = array(
            "OpeningHoursSpecification[]",
        );

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return ImageObject[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param ImageObject[] $image
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = array(
            "ImageObject[]",
        );

        $image = self::checkTypes($image, $types);

        $this->image = $image;
    }

    /**
     * @return IndividualFacilityUse[]
     */
    public function getIndividualFacilityUse()
    {
        return $this->individualFacilityUse;
    }

    /**
     * @param IndividualFacilityUse[] $individualFacilityUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIndividualFacilityUse($individualFacilityUse)
    {
        $types = array(
            "IndividualFacilityUse[]",
        );

        $individualFacilityUse = self::checkTypes($individualFacilityUse, $types);

        $this->individualFacilityUse = $individualFacilityUse;
    }

    /**
     * @return Place
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Place $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = array(
            "Place",
        );

        $location = self::checkTypes($location, $types);

        $this->location = $location;
    }

    /**
     * @return Offer[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param Offer[] $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "Offer[]",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return Action[]
     */
    public function getPotentialAction()
    {
        return $this->potentialAction;
    }

    /**
     * @param Action[] $potentialAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPotentialAction($potentialAction)
    {
        $types = array(
            "Action[]",
        );

        $potentialAction = self::checkTypes($potentialAction, $types);

        $this->potentialAction = $potentialAction;
    }

    /**
     * @return Organization
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param Organization $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "Organization",
        );

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
