<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Product, which means that any of this type's properties within schema.org may also be used.
 *
 */
class FacilityUse extends \OpenActive\Models\SchemaOrg\Product
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "FacilityUse";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "accessibilityInformation" => "accessibilityInformation",
            "accessibilitySupport" => "accessibilitySupport",
            "activity" => "activity",
            "additionalAdmissionRestriction" => "additionalAdmissionRestriction",
            "attendeeInstructions" => "attendeeInstructions",
            "category" => "category",
            "customerAccountBookingRestriction" => "customerAccountBookingRestriction",
            "event" => "event",
            "hoursAvailable" => "hoursAvailable",
            "image" => "image",
            "individualFacilityUse" => "individualFacilityUse",
            "isOpenBookingWithCustomerAccountAllowed" => "isOpenBookingWithCustomerAccountAllowed",
            "location" => "location",
            "offers" => "offers",
            "provider" => "provider",
            "url" => "url",
            "formattedDescription" => "beta:formattedDescription",
            "isWheelchairAccessible" => "beta:isWheelchairAccessible",
            "video" => "beta:video",
            "sportsActivityLocation" => "beta:sportsActivityLocation",
            "offerValidityPeriod" => "beta:offerValidityPeriod",
            "facilityType" => "beta:facilityType",
            "facilitySetting" => "beta:facilitySetting",
            "bookingChannel" => "beta:bookingChannel",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
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
     * A plain text description of the facility use, which must not include HTML or other markup.
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
     *     "@type": "Concept",
     *     "@id": "https://openactive.io/accessibility-support#1393f2dc-3fcc-4be9-a99f-f1e51f5ad277",
     *     "prefLabel": "Visual impairment",
     *     "inScheme": "https://openactive.io/accessibility-support"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Concept[]
     */
    protected $accessibilitySupport;

    /**
     * Specifies the physical activity or activities that will take place during a facility use.
     *
     * ```json
     * "activity": [
     *   {
     *     "@type": "Concept",
     *     "@id": "https://openactive.io/activity-list#c0360db0-a817-4bae-9167-40f89b49fc9e",
     *     "prefLabel": "Badminton",
     *     "inScheme": "https://openactive.io/activity-list"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Concept[]
     */
    protected $activity;

    /**
     * Free text restrictions that must be displayed prominently to the user before booking. This property must only contain restrictions not described by `oa:ageRestriction` or `oa:genderRestriction`.
     *
     * ```json
     * "additionalAdmissionRestriction": [
     *   "Participants younger than 12 must be accompanied by an adult",
     *   "Participants must be comfortable standing for long periods of time"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $additionalAdmissionRestriction;

    /**
     * Provides additional notes and instructions for users of a facility, for example more information on how to find it, what to bring, etc. The value of this property must not include HTML or other markup.
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
     *     "@type": "Concept",
     *     "@id": "https://example.com/reference/categories#Top%20Club%20Level",
     *     "inScheme": "https://example.com/reference/categories",
     *     "prefLabel": "Top Club Level"
     *   }
     * ]
     * ```
     *
     * @var string[]|\OpenActive\Models\OA\Concept[]
     */
    protected $category;

    /**
     * Free text restrictions to display to the Customer at the browse stage, that may apply when using a Customer Account to make the booking.
     * Note that this property is in EARLY RELEASE AND IS SUBJECT TO CHANGE, as the [Customer Accounts proposal](https://github.com/openactive/customer-accounts) evolves.
     *
     * ```json
     * "customerAccountBookingRestriction": [
     *   "Gold members only",
     *   "Gym induction required"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $customerAccountBookingRestriction;

    /**
     * An array of slots of availability of this FacilityUse.
     *
     * ```json
     * "event": [
     *   {
     *     "@type": "Slot",
     *     "@id": "http://www.example.org/api/facility-uses/432#/event/2018-03-01T10:00:00Z",
     *     "startDate": "2018-03-01T11:00:00Z",
     *     "endDate": "2018-03-01T11:30:00Z",
     *     "duration": "PT30M",
     *     "remainingUses": 3,
     *     "maximumUses": 6
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Slot[]
     */
    protected $event;

    /**
     * The times the facility use is available
     *
     *
     * @var \OpenActive\Models\OA\OpeningHoursSpecification[]
     */
    protected $hoursAvailable;

    /**
     * An image or photo that depicts the facility use, e.g. a photo taken at a previous event.
     *
     * ```json
     * "image": [
     *   {
     *     "thumbnail": "http://example.com/static/image/speedball_thumbnail.jpg",
     *     "@type": "ImageObject",
     *     "url": "http://example.com/static/image/speedball_large.jpg"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\ImageObject[]
     */
    protected $image;

    /**
     * Inverse of the oa:aggregateFacilityUse property. Relates a oa:FacilityUse (e.g. an opportunity to play tennis at a specific location) to an oa:IndividualFacilityUse (e.g. an opportunity to play tennis on a specific court).
     *
     * ```json
     * "individualFacilityUse": [
     *   {
     *     "@type": "IndividualFacilityUse",
     *     "@id": "http://www.example.org/facility-uses/1",
     *     "name": "Tennis Court 1"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\IndividualFacilityUse[]
     */
    protected $individualFacilityUse;

    /**
     * Indicates that a Customer Account may be used to book that opportunity.
     * Note that this property is in EARLY RELEASE AND IS SUBJECT TO CHANGE, as the [Customer Accounts proposal](https://github.com/openactive/customer-accounts) evolves.
     *
     * ```json
     * "isOpenBookingWithCustomerAccountAllowed": "true"
     * ```
     *
     * @var bool|null
     */
    protected $isOpenBookingWithCustomerAccountAllowed;

    /**
     * The location at which the facility use will take place.
     *
     * ```json
     * "location": {
     *   "@type": "Place",
     *   "address": {
     *     "addressLocality": "New Malden",
     *     "addressRegion": "London",
     *     "postalCode": "NW5 3DU",
     *     "streetAddress": "Raynes Park High School, 46A West Barnes Lane",
     *     "@type": "PostalAddress"
     *   },
     *   "description": "Raynes Park High School in London",
     *   "geo": {
     *     "latitude": 51.4034423828125,
     *     "longitude": -0.2369088977575302,
     *     "@type": "GeoCoordinates"
     *   },
     *   "@id": "https://example.com/locations/1234ABCD",
     *   "identifier": "1234ABCD",
     *   "name": "Raynes Park High School",
     *   "telephone": "01253 473934"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Place
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
     * @var \OpenActive\Models\OA\Offer[]
     */
    protected $offers;

    /**
     * The organisation responsible for providing the facility
     *
     * ```json
     * "provider": {
     *   "@type": "Organization",
     *   "name": "Central Speedball Association",
     *   "url": "http://www.speedball-world.com"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Organization
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
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Sometimes a description is stored with formatting (e.g. href, bold, italics, embedded YouTube videos). This formatting can be useful for data consumers. This property must contain HTML.
     * 
     * If you are using this property, please join the discussion at proposal [#276](https://github.com/openactive/modelling-opportunity-data/issues/276).
     *
     *
     * @var string
     */
    protected $formattedDescription;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * A property that details whether the event is suitable for wheelchair access. Placed on Event as this field could be used to detail whether the Event is suitable, as well as the Place.
     * 
     * If you are using this property, please join the discussion at proposal [#166](https://github.com/openactive/modelling-opportunity-data/issues/166).
     *
     *
     * @var bool|null
     */
    protected $isWheelchairAccessible;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * A related video object.
     * 
     * If you are using this property, please join the discussion at proposal [#88](https://github.com/openactive/modelling-opportunity-data/issues/88).
     *
     *
     * @var \OpenActive\Models\VideoObject[]
     */
    protected $video;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Internal location of the event, e.g. Court 1
     * 
     * If you are using this property, please join the discussion at proposal [#110](https://github.com/openactive/modelling-opportunity-data/issues/110).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsActivityLocation[]
     */
    protected $sportsActivityLocation;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Duration before the event for which the associated Offers are valid
     * 
     * If you are using this property, please join the discussion at proposal [#204](https://github.com/openactive/modelling-opportunity-data/issues/204).
     *
     *
     * @var DateInterval|null
     */
    protected $offerValidityPeriod;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * The type of facility in use. See https://openactive.io/facility-types/.
     * 
     * If you are using this property, please join the discussion at proposal [#1](https://github.com/openactive/facility-types/issues/1).
     *
     *
     * @var \OpenActive\Models\Concept[]
     */
    protected $facilityType;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Whether the event or facility is indoor or outdoor.
     * 
     * If you are using this property, please join the discussion at proposal [#1](https://github.com/openactive/facility-types/issues/1).
     *
     *
     * @var \OpenActive\Enums\FacilitySettingType|null
     */
    protected $facilitySetting;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * The channels through which a booking can be made.
     * 
     * If you are using this property, please join the discussion at proposal [#161](https://github.com/openactive/modelling-opportunity-data/issues/161).
     *
     *
     * @var \OpenActive\Enums\BookingChannelType[]|null
     */
    protected $bookingChannel;

    /**
     * @return string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "string",
            "int",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
            "null",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

        $accessibilityInformation = self::checkTypes($accessibilityInformation, $types);

        $this->accessibilityInformation = $accessibilityInformation;
    }

    /**
     * @return \OpenActive\Models\OA\Concept[]
     */
    public function getAccessibilitySupport()
    {
        return $this->accessibilitySupport;
    }

    /**
     * @param \OpenActive\Models\OA\Concept[] $accessibilitySupport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilitySupport($accessibilitySupport)
    {
        $types = [
            "\OpenActive\Models\OA\Concept[]",
        ];

        $accessibilitySupport = self::checkTypes($accessibilitySupport, $types);

        $this->accessibilitySupport = $accessibilitySupport;
    }

    /**
     * @return \OpenActive\Models\OA\Concept[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param \OpenActive\Models\OA\Concept[] $activity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivity($activity)
    {
        $types = [
            "\OpenActive\Models\OA\Concept[]",
        ];

        $activity = self::checkTypes($activity, $types);

        $this->activity = $activity;
    }

    /**
     * @return string[]
     */
    public function getAdditionalAdmissionRestriction()
    {
        return $this->additionalAdmissionRestriction;
    }

    /**
     * @param string[] $additionalAdmissionRestriction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalAdmissionRestriction($additionalAdmissionRestriction)
    {
        $types = [
            "string[]",
        ];

        $additionalAdmissionRestriction = self::checkTypes($additionalAdmissionRestriction, $types);

        $this->additionalAdmissionRestriction = $additionalAdmissionRestriction;
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
        $types = [
            "string",
        ];

        $attendeeInstructions = self::checkTypes($attendeeInstructions, $types);

        $this->attendeeInstructions = $attendeeInstructions;
    }

    /**
     * @return string[]|\OpenActive\Models\OA\Concept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string[]|\OpenActive\Models\OA\Concept[] $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "string[]",
            "\OpenActive\Models\OA\Concept[]",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return string[]
     */
    public function getCustomerAccountBookingRestriction()
    {
        return $this->customerAccountBookingRestriction;
    }

    /**
     * @param string[] $customerAccountBookingRestriction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCustomerAccountBookingRestriction($customerAccountBookingRestriction)
    {
        $types = [
            "string[]",
        ];

        $customerAccountBookingRestriction = self::checkTypes($customerAccountBookingRestriction, $types);

        $this->customerAccountBookingRestriction = $customerAccountBookingRestriction;
    }

    /**
     * @return \OpenActive\Models\OA\Slot[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \OpenActive\Models\OA\Slot[] $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = [
            "\OpenActive\Models\OA\Slot[]",
        ];

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

    /**
     * @return \OpenActive\Models\OA\OpeningHoursSpecification[]
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param \OpenActive\Models\OA\OpeningHoursSpecification[] $hoursAvailable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = [
            "\OpenActive\Models\OA\OpeningHoursSpecification[]",
        ];

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return \OpenActive\Models\OA\ImageObject[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject[] $image
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = [
            "\OpenActive\Models\OA\ImageObject[]",
        ];

        $image = self::checkTypes($image, $types);

        $this->image = $image;
    }

    /**
     * @return \OpenActive\Models\OA\IndividualFacilityUse[]
     */
    public function getIndividualFacilityUse()
    {
        return $this->individualFacilityUse;
    }

    /**
     * @param \OpenActive\Models\OA\IndividualFacilityUse[] $individualFacilityUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIndividualFacilityUse($individualFacilityUse)
    {
        $types = [
            "\OpenActive\Models\OA\IndividualFacilityUse[]",
        ];

        $individualFacilityUse = self::checkTypes($individualFacilityUse, $types);

        $this->individualFacilityUse = $individualFacilityUse;
    }

    /**
     * @return bool|null
     */
    public function getIsOpenBookingWithCustomerAccountAllowed()
    {
        return $this->isOpenBookingWithCustomerAccountAllowed;
    }

    /**
     * @param bool|null $isOpenBookingWithCustomerAccountAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsOpenBookingWithCustomerAccountAllowed($isOpenBookingWithCustomerAccountAllowed)
    {
        $types = [
            "bool",
            "null",
        ];

        $isOpenBookingWithCustomerAccountAllowed = self::checkTypes($isOpenBookingWithCustomerAccountAllowed, $types);

        $this->isOpenBookingWithCustomerAccountAllowed = $isOpenBookingWithCustomerAccountAllowed;
    }

    /**
     * @return \OpenActive\Models\OA\Place
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param \OpenActive\Models\OA\Place $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = [
            "\OpenActive\Models\OA\Place",
        ];

        $location = self::checkTypes($location, $types);

        $this->location = $location;
    }

    /**
     * @return \OpenActive\Models\OA\Offer[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\OA\Offer[] $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\OA\Offer[]",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return \OpenActive\Models\OA\Organization
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\OA\Organization $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\OA\Organization",
        ];

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
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
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
        $types = [
            "string",
        ];

        $formattedDescription = self::checkTypes($formattedDescription, $types);

        $this->formattedDescription = $formattedDescription;
    }

    /**
     * @return bool|null
     */
    public function getIsWheelchairAccessible()
    {
        return $this->isWheelchairAccessible;
    }

    /**
     * @param bool|null $isWheelchairAccessible
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsWheelchairAccessible($isWheelchairAccessible)
    {
        $types = [
            "bool",
            "null",
        ];

        $isWheelchairAccessible = self::checkTypes($isWheelchairAccessible, $types);

        $this->isWheelchairAccessible = $isWheelchairAccessible;
    }

    /**
     * @return \OpenActive\Models\VideoObject[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\VideoObject[] $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = [
            "\OpenActive\Models\VideoObject[]",
        ];

        $video = self::checkTypes($video, $types);

        $this->video = $video;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsActivityLocation[]
     */
    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsActivityLocation[] $sportsActivityLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsActivityLocation($sportsActivityLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsActivityLocation[]",
        ];

        $sportsActivityLocation = self::checkTypes($sportsActivityLocation, $types);

        $this->sportsActivityLocation = $sportsActivityLocation;
    }

    /**
     * @return DateInterval|null
     */
    public function getOfferValidityPeriod()
    {
        return $this->offerValidityPeriod;
    }

    /**
     * @param DateInterval|null $offerValidityPeriod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOfferValidityPeriod($offerValidityPeriod)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $offerValidityPeriod = self::checkTypes($offerValidityPeriod, $types);

        $this->offerValidityPeriod = $offerValidityPeriod;
    }

    /**
     * @return \OpenActive\Models\Concept[]
     */
    public function getFacilityType()
    {
        return $this->facilityType;
    }

    /**
     * @param \OpenActive\Models\Concept[] $facilityType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFacilityType($facilityType)
    {
        $types = [
            "\OpenActive\Models\Concept[]",
        ];

        $facilityType = self::checkTypes($facilityType, $types);

        $this->facilityType = $facilityType;
    }

    /**
     * @return \OpenActive\Enums\FacilitySettingType|null
     */
    public function getFacilitySetting()
    {
        return $this->facilitySetting;
    }

    /**
     * @param \OpenActive\Enums\FacilitySettingType|null $facilitySetting
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFacilitySetting($facilitySetting)
    {
        $types = [
            "\OpenActive\Enums\FacilitySettingType",
            "null",
        ];

        $facilitySetting = self::checkTypes($facilitySetting, $types);

        $this->facilitySetting = $facilitySetting;
    }

    /**
     * @return \OpenActive\Enums\BookingChannelType[]|null
     */
    public function getBookingChannel()
    {
        return $this->bookingChannel;
    }

    /**
     * @param \OpenActive\Enums\BookingChannelType[]|null $bookingChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookingChannel($bookingChannel)
    {
        $types = [
            "\OpenActive\Enums\BookingChannelType[]",
            "null",
        ];

        $bookingChannel = self::checkTypes($bookingChannel, $types);

        $this->bookingChannel = $bookingChannel;
    }

}
