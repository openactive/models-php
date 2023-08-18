<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Event, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Event extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Event";
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
            "ageRange" => "ageRange",
            "ageRestriction" => "ageRestriction",
            "attendeeInstructions" => "attendeeInstructions",
            "category" => "category",
            "contributor" => "contributor",
            "customerAccountBookingRestriction" => "customerAccountBookingRestriction",
            "duration" => "duration",
            "eventAttendanceMode" => "eventAttendanceMode",
            "eventStatus" => "eventStatus",
            "genderRestriction" => "genderRestriction",
            "image" => "image",
            "isAccessibleForFree" => "isAccessibleForFree",
            "isCoached" => "isCoached",
            "isOpenBookingWithCustomerAccountAllowed" => "isOpenBookingWithCustomerAccountAllowed",
            "leader" => "leader",
            "level" => "level",
            "location" => "location",
            "maximumAttendeeCapacity" => "maximumAttendeeCapacity",
            "maximumVirtualAttendeeCapacity" => "maximumVirtualAttendeeCapacity",
            "meetingPoint" => "meetingPoint",
            "offers" => "offers",
            "organizer" => "organizer",
            "programme" => "programme",
            "remainingAttendeeCapacity" => "remainingAttendeeCapacity",
            "schedulingNote" => "schedulingNote",
            "startDate" => "startDate",
            "endDate" => "endDate",
            "subEvent" => "subEvent",
            "superEvent" => "superEvent",
            "url" => "url",
            "formattedDescription" => "beta:formattedDescription",
            "distance" => "beta:distance",
            "attendeeCount" => "beta:attendeeCount",
            "registrationCount" => "beta:registrationCount",
            "isWheelchairAccessible" => "beta:isWheelchairAccessible",
            "estimatedDuration" => "beta:estimatedDuration",
            "video" => "beta:video",
            "sportsActivityLocation" => "beta:sportsActivityLocation",
            "offerValidityPeriod" => "beta:offerValidityPeriod",
            "facilitySetting" => "beta:facilitySetting",
            "isVirtuallyCoached" => "beta:isVirtuallyCoached",
            "virtualLocation" => "beta:virtualLocation",
            "affiliatedLocation" => "beta:affiliatedLocation",
            "isInteractivityPreferred" => "beta:isInteractivityPreferred",
            "participantSuppliedEquipment" => "beta:participantSuppliedEquipment",
            "donationPaymentUrl" => "beta:donationPaymentUrl",
            "isFirstSessionAccessibleForFree" => "beta:isFirstSessionAccessibleForFree",
            "isScheduledAsSlots" => "beta:isScheduledAsSlots",
            "contactPoint" => "beta:contactPoint",
            "bookingChannel" => "beta:bookingChannel",
            "testOpenBookingFlow" => "test:testOpenBookingFlow",
            "testOpportunityCriteria" => "test:testOpportunityCriteria",
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
     * The name of the event
     *
     * ```json
     * "name": "Speedball"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A plain text description of the event, which must not include HTML or other markup.
     *
     * ```json
     * "description": "A fast paced game that incorporates netball, handball and football."
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
     * Specifies the physical activity or activities that will take place during an event.
     *
     * ```json
     * "activity": [
     *   {
     *     "@type": "Concept",
     *     "@id": "https://openactive.io/activity-list#5e78bcbe-36db-425a-9064-bf96d09cc351",
     *     "prefLabel": "Bodypump™",
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
     * Indicates that an event is recommended as being suitable for or is targetted at a specific age range.
     *
     * ```json
     * "ageRange": {
     *   "@type": "QuantitativeValue",
     *   "minValue": 50,
     *   "maxValue": 60
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     */
    protected $ageRange;

    /**
     * The enforced attendee age range requirement of the Event or Offer, that must be displayed prominently to the user before booking.
     *
     * ```json
     * "ageRestriction": {
     *   "@type": "QuantitativeValue",
     *   "minValue": 15,
     *   "maxValue": 60
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     */
    protected $ageRestriction;

    /**
     * Provides additional notes and instructions for event attendees, for example more information on how to find the event, what to bring, etc. The value of this property must not include HTML or other markup.
     *
     * ```json
     * "attendeeInstructions": "Ensure you bring trainers and a bottle of water."
     * ```
     *
     * @var string
     */
    protected $attendeeInstructions;

    /**
     * Provides a set of tags that help categorise and describe an event, e.g. its intensity, purpose, etc.
     *
     * ```json
     * "category": [
     *   "High Intensity"
     * ]
     * ```
     *
     * @var string[]|\OpenActive\Models\OA\Concept[]
     */
    protected $category;

    /**
     * A Person who contributes to the facilitation of the Event.
     *
     * ```json
     * "contributor": [
     *   {
     *     "@type": "Person",
     *     "familyName": "Smith",
     *     "givenName": "Nicole",
     *     "@id": "https://example.com/locations/1234ABCD/leaders/89",
     *     "identifier": 89
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Person[]
     */
    protected $contributor;

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
     * The duration of the event given in [ISO8601] format.
     *
     * ```json
     * "duration": "PT1H"
     * ```
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
     *
     * ```json
     * "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode"
     * ```
     *
     * @var \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration|null
     */
    protected $eventAttendanceMode;

    /**
     * The status of an event. Can be used to indicate rescheduled or cancelled events
     *
     * ```json
     * "eventStatus": "https://schema.org/EventScheduled"
     * ```
     *
     * @var \OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    protected $eventStatus;

    /**
     * Indicates that an event is restricted to male, female or a mixed audience. This information must be displayed prominently to the user before booking. If a gender restriction isn't specified then applications should assume that an event is suitable for a mixed audience.
     *
     * ```json
     * "genderRestriction": "https://openactive.io/FemaleOnly"
     * ```
     *
     * @var \OpenActive\Enums\GenderRestrictionType|null
     */
    protected $genderRestriction;

    /**
     * An image or photo that depicts the event, e.g. a photo taken at a previous event.
     *
     * ```json
     * "image": [
     *   {
     *     "@type": "ImageObject",
     *     "url": "http://example.com/static/image/speedball_large.jpg",
     *     "thumbnail": [
     *       {
     *         "@type": "ImageObject",
     *         "url": "http://example.com/static/image/speedball_thumbnail.jpg"
     *       }
     *     ]
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\ImageObject[]
     */
    protected $image;

    /**
     * Whether the Event is accessible without charge.
     *
     * ```json
     * "isAccessibleForFree": "true"
     * ```
     *
     * @var bool|null
     */
    protected $isAccessibleForFree;

    /**
     * A boolean property that indicates whether an Event will be coached. This flag allows an Event to be marked as being coached without having to specify a named individual as a coach. This addresses both privacy concerns and also scenarios where the actual coach may only be decided on the day.
     *
     * ```json
     * "isCoached": "true"
     * ```
     *
     * @var bool|null
     */
    protected $isCoached;

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
     * Refers to a person (schema:Person) who will be leading an event. E.g. a coach. This is a more specific role than an organiser or a contributor. The person will need to have given their consent for their personal information to be present in the Open Data.
     *
     * ```json
     * "leader": [
     *   {
     *     "@type": "Person",
     *     "familyName": "Smith",
     *     "givenName": "Nicole",
     *     "gender": "https://schema.org/Male",
     *     "@id": "https://example.com/locations/1234ABCD/leaders/89",
     *     "identifier": 89
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Person[]
     */
    protected $leader;

    /**
     * A general purpose property for specifying the suitability of an event for different participant “levels”. E.g. `Beginner`, `Intermediate`, `Advanced`. Or in the case of martial arts, specific belt requirements.
     *
     * ```json
     * "level": [
     *   "Beginner"
     * ]
     * ```
     *
     * @var string[]|\OpenActive\Models\OA\Concept[]
     */
    protected $level;

    /**
     * The location at which the event will take place. Or, in the case of events that may span multiple locations, the initial meeting or starting point.
     * Locations must be specified as a [Place](/models/place) complete with a fully described geographic location and/or address.
     *
     * ```json
     * "location": {
     *   "@type": "Place",
     *   "@id": "https://example.com/locations/1234ABCD",
     *   "identifier": "1234ABCD",
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
     *   "name": "Raynes Park High School",
     *   "telephone": "01253 473934"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Place|string
     */
    protected $location;

    /**
     * The maximum capacity of the Event.
     *
     * ```json
     * "maximumAttendeeCapacity": 30
     * ```
     *
     * @var int|null
     */
    protected $maximumAttendeeCapacity;

    /**
     * Indicates the maximum number of connections to a shared virtual space.
     *
     * ```json
     * "maximumVirtualAttendeeCapacity": 20
     * ```
     *
     * @var int|null
     */
    protected $maximumVirtualAttendeeCapacity;

    /**
     * Instructions for the attendees of an Event about where they should meet the organizer or leader at the start of the event. Some larger locations may have several possible meeting points, so this property provides additional more specific directions.
     *
     * ```json
     * "meetingPoint": "At the entrance to the park"
     * ```
     *
     * @var string
     */
    protected $meetingPoint;

    /**
     * An array of schema:Offer that include the price of attending.
     *
     * ```json
     * "offers": [
     *   {
     *     "@type": "Offer",
     *     "identifier": "OX-AD",
     *     "name": "Adult",
     *     "price": 3.3,
     *     "priceCurrency": "GBP",
     *     "url": "https://profile.everyoneactive.com/booking?Site=0140&Activities=1402CBP20150217&Culture=en-GB"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Offer[]
     */
    protected $offers;

    /**
     * The person or organization ultimately responsible for an event. An organizer might be an  schema:Organization or a schema:Person.
     *
     * ```json
     * "organizer": {
     *   "@type": "Organization",
     *   "@id": "https://id.bookingsystem.example.com/organizers/1",
     *   "name": "Central Speedball Association",
     *   "url": "http://www.speedball-world.com"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization
     */
    protected $organizer;

    /**
     * Indicates that an event will be organised according to a specific Programme.
     *
     * ```json
     * "programme": {
     *   "@type": "Brand",
     *   "name": "Play Ball!",
     *   "url": "http://example.org/brand/play-ball"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Brand
     */
    protected $programme;

    /**
     * The number of places that are still available for the Event.
     *
     * ```json
     * "remainingAttendeeCapacity": 20
     * ```
     *
     * @var int|null
     */
    protected $remainingAttendeeCapacity;

    /**
     * Provides a note from an organizer relating to how this Event is scheduled.
     *
     * ```json
     * "schedulingNote": "This event doesn't run during school holidays"
     * ```
     *
     * @var string
     */
    protected $schedulingNote;

    /**
     * The start date and time of the event. Can be specified as a schema:DateTime.
     *
     * ```json
     * "startDate": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $startDate;

    /**
     * The end date and time of the event. Can be specified as a schema:DateTime
     * It is recommended that publishers provide either an schema:endDate or a schema:duration for an event.
     *
     * ```json
     * "endDate": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $endDate;

    /**
     * Relates a parent event to a child event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A child event might be a specific instance of an Event within a schedule
     *
     *
     * @var \OpenActive\Models\OA\Event[]
     */
    protected $subEvent;

    /**
     * Relates a child event to a parent event. Properties describing the parent event can be assumed to apply to the child, unless otherwise specified. A parent event might specify a recurring schedule, of which the child event is one specific instance
     *
     *
     * @var \OpenActive\Models\OA\Event
     */
    protected $superEvent;

    /**
     * A URL to a web page (or section of a page) that describes the event.
     *
     * ```json
     * "url": "https://example.com/event/1234"
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
     * The distance of a run, cycle or other activity. Must also include units.
     * 
     * If you are using this property, please join the discussion at proposal [#275](https://github.com/openactive/modelling-opportunity-data/issues/275).
     *
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     */
    protected $distance;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * For events that have an unlimited number of tickets, captures the number of attendees (actual attendance).
     * 
     * If you are using this property, please join the discussion at proposal [#274](https://github.com/openactive/modelling-opportunity-data/issues/274).
     *
     *
     * @var int|null
     */
    protected $attendeeCount;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * For events that have an unlimited number of tickets, captures the number of registrations (intention to attend).
     * 
     * If you are using this property, please join the discussion at proposal [#273](https://github.com/openactive/modelling-opportunity-data/issues/273).
     *
     *
     * @var int|null
     */
    protected $registrationCount;

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
     * A property that allows an Event duration to be represented as a range (e.g. 0-30mins, 30-60mins, 60-90mins, 90+).
     * 
     * If you are using this property, please join the discussion at proposal [#201](https://github.com/openactive/modelling-opportunity-data/issues/201).
     *
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     */
    protected $estimatedDuration;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * A related video object.
     * 
     * If you are using this property, please join the discussion at proposal [#88](https://github.com/openactive/modelling-opportunity-data/issues/88).
     *
     *
     * @var \OpenActive\Models\OA\VideoObject[]
     */
    protected $video;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Internal location of the event, e.g. Court 1
     * 
     * If you are using this property, please join the discussion at proposal [#110](https://github.com/openactive/modelling-opportunity-data/issues/110).
     *
     *
     * @var \OpenActive\Models\OA\SportsActivityLocation[]
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
     * A property that indicates whether the event is led by a virtual coach. Only relevant if an event `isCoached`. If not provided is assumed to be `false`.
     * 
     * If you are using this property, please join the discussion at proposal [#71](https://github.com/openactive/modelling-opportunity-data/issues/71).
     *
     *
     * @var bool|null
     */
    protected $isVirtuallyCoached;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Describes a means of electronic access to a shared virtual space.
     * 
     * If you are using this property, please join the discussion at proposal [#224](https://github.com/openactive/modelling-opportunity-data/issues/224).
     *
     *
     * @var \OpenActive\Models\OA\VirtualLocation
     */
    protected $virtualLocation;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * The physical location affiliated with the virtual event, for example the original location of the event before it was moved online.
     * 
     * If you are using this property, please join the discussion at proposal [#227](https://github.com/openactive/modelling-opportunity-data/issues/227).
     *
     *
     * @var \OpenActive\Models\OA\Place
     */
    protected $affiliatedLocation;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Indicates whether the virtual event is interactive (e.g. Zoom with participant microphones and cameras on), or is just a one-way broadcast (e.g. Facebook Live, Instagram Live, Zoom with participant microphones and cameras off).
     * 
     * If you are using this property, please join the discussion at proposal [#230](https://github.com/openactive/modelling-opportunity-data/issues/230).
     *
     *
     * @var bool|null
     */
    protected $isInteractivityPreferred;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Indicates whether the participant must or may supply equipment for use in the Event.
     * 
     * If you are using this property, please join the discussion at proposal [#229](https://github.com/openactive/modelling-opportunity-data/issues/229).
     *
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     */
    protected $participantSuppliedEquipment;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * The URL of the webpage where the activity provider accepts donations.
     * 
     * If you are using this property, please join the discussion at proposal [#234](https://github.com/openactive/modelling-opportunity-data/issues/234).
     *
     *
     * @var string
     */
    protected $donationPaymentUrl;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * A property that indicates whether the first session is free.
     * 
     * If you are using this property, please join the discussion at proposal [#232](https://github.com/openactive/modelling-opportunity-data/issues/232).
     *
     *
     * @var bool|null
     */
    protected $isFirstSessionAccessibleForFree;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * A property that indicates whether the event contains a high frequency of occurrences. Intended as a UI hint for interfaces that represent these occurrences.
     * 
     * If you are using this property, please join the discussion at proposal [#301](https://github.com/openactive/modelling-opportunity-data/issues/301).
     *
     *
     * @var bool|null
     */
    protected $isScheduledAsSlots;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Contact details for an Event, where they are not specifically related to the `organizer` or `leader`.
     * 
     * If you are using this property, please join the discussion at proposal [#113](https://github.com/openactive/modelling-opportunity-data/issues/113).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $contactPoint;

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
     * [NOTICE: This property is part of the Open Booking API Test Interface, and MUST NOT be used in production.]
     *
     *
     * @var \OpenActive\Enums\TestOpenBookingFlowEnumeration|null
     */
    protected $testOpenBookingFlow;

    /**
     * [NOTICE: This property is part of the Open Booking API Test Interface, and MUST NOT be used in production.]
     * The opportunity criteria which the Event conforms to.
     *
     *
     * @var \OpenActive\Enums\TestOpportunityCriteriaEnumeration|null
     */
    protected $testOpportunityCriteria;

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
     * @return \OpenActive\Models\OA\QuantitativeValue
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAgeRange($ageRange)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $ageRange = self::checkTypes($ageRange, $types);

        $this->ageRange = $ageRange;
    }

    /**
     * @return \OpenActive\Models\OA\QuantitativeValue
     */
    public function getAgeRestriction()
    {
        return $this->ageRestriction;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRestriction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAgeRestriction($ageRestriction)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $ageRestriction = self::checkTypes($ageRestriction, $types);

        $this->ageRestriction = $ageRestriction;
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
     * @return \OpenActive\Models\OA\Person[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param \OpenActive\Models\OA\Person[] $contributor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContributor($contributor)
    {
        $types = [
            "\OpenActive\Models\OA\Person[]",
        ];

        $contributor = self::checkTypes($contributor, $types);

        $this->contributor = $contributor;
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
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration|null
     */
    public function getEventAttendanceMode()
    {
        return $this->eventAttendanceMode;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration|null $eventAttendanceMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEventAttendanceMode($eventAttendanceMode)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\EventAttendanceModeEnumeration",
            "null",
        ];

        $eventAttendanceMode = self::checkTypes($eventAttendanceMode, $types);

        $this->eventAttendanceMode = $eventAttendanceMode;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\EventStatusType|null
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EventStatusType|null $eventStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEventStatus($eventStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "null",
        ];

        $eventStatus = self::checkTypes($eventStatus, $types);

        $this->eventStatus = $eventStatus;
    }

    /**
     * @return \OpenActive\Enums\GenderRestrictionType|null
     */
    public function getGenderRestriction()
    {
        return $this->genderRestriction;
    }

    /**
     * @param \OpenActive\Enums\GenderRestrictionType|null $genderRestriction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGenderRestriction($genderRestriction)
    {
        $types = [
            "\OpenActive\Enums\GenderRestrictionType",
            "null",
        ];

        $genderRestriction = self::checkTypes($genderRestriction, $types);

        $this->genderRestriction = $genderRestriction;
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
     * @return bool|null
     */
    public function getIsCoached()
    {
        return $this->isCoached;
    }

    /**
     * @param bool|null $isCoached
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsCoached($isCoached)
    {
        $types = [
            "bool",
            "null",
        ];

        $isCoached = self::checkTypes($isCoached, $types);

        $this->isCoached = $isCoached;
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
     * @return \OpenActive\Models\OA\Person[]
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * @param \OpenActive\Models\OA\Person[] $leader
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeader($leader)
    {
        $types = [
            "\OpenActive\Models\OA\Person[]",
        ];

        $leader = self::checkTypes($leader, $types);

        $this->leader = $leader;
    }

    /**
     * @return string[]|\OpenActive\Models\OA\Concept[]
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string[]|\OpenActive\Models\OA\Concept[] $level
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLevel($level)
    {
        $types = [
            "string[]",
            "\OpenActive\Models\OA\Concept[]",
        ];

        $level = self::checkTypes($level, $types);

        $this->level = $level;
    }

    /**
     * @return \OpenActive\Models\OA\Place|string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param \OpenActive\Models\OA\Place|string $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = [
            "\OpenActive\Models\OA\Place",
            "string",
        ];

        $location = self::checkTypes($location, $types);

        $this->location = $location;
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
     * @return int|null
     */
    public function getMaximumVirtualAttendeeCapacity()
    {
        return $this->maximumVirtualAttendeeCapacity;
    }

    /**
     * @param int|null $maximumVirtualAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumVirtualAttendeeCapacity($maximumVirtualAttendeeCapacity)
    {
        $types = [
            "int",
            "null",
        ];

        $maximumVirtualAttendeeCapacity = self::checkTypes($maximumVirtualAttendeeCapacity, $types);

        $this->maximumVirtualAttendeeCapacity = $maximumVirtualAttendeeCapacity;
    }

    /**
     * @return string
     */
    public function getMeetingPoint()
    {
        return $this->meetingPoint;
    }

    /**
     * @param string $meetingPoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeetingPoint($meetingPoint)
    {
        $types = [
            "string",
        ];

        $meetingPoint = self::checkTypes($meetingPoint, $types);

        $this->meetingPoint = $meetingPoint;
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
     * @return \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param \OpenActive\Models\OA\Person|\OpenActive\Models\OA\Organization $organizer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOrganizer($organizer)
    {
        $types = [
            "\OpenActive\Models\OA\Person",
            "\OpenActive\Models\OA\Organization",
        ];

        $organizer = self::checkTypes($organizer, $types);

        $this->organizer = $organizer;
    }

    /**
     * @return \OpenActive\Models\OA\Brand
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * @param \OpenActive\Models\OA\Brand $programme
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramme($programme)
    {
        $types = [
            "\OpenActive\Models\OA\Brand",
        ];

        $programme = self::checkTypes($programme, $types);

        $this->programme = $programme;
    }

    /**
     * @return int|null
     */
    public function getRemainingAttendeeCapacity()
    {
        return $this->remainingAttendeeCapacity;
    }

    /**
     * @param int|null $remainingAttendeeCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRemainingAttendeeCapacity($remainingAttendeeCapacity)
    {
        $types = [
            "int",
            "null",
        ];

        $remainingAttendeeCapacity = self::checkTypes($remainingAttendeeCapacity, $types);

        $this->remainingAttendeeCapacity = $remainingAttendeeCapacity;
    }

    /**
     * @return string
     */
    public function getSchedulingNote()
    {
        return $this->schedulingNote;
    }

    /**
     * @param string $schedulingNote
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSchedulingNote($schedulingNote)
    {
        $types = [
            "string",
        ];

        $schedulingNote = self::checkTypes($schedulingNote, $types);

        $this->schedulingNote = $schedulingNote;
    }

    /**
     * @return DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return \OpenActive\Models\OA\Event[]
     */
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * @param \OpenActive\Models\OA\Event[] $subEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubEvent($subEvent)
    {
        $types = [
            "\OpenActive\Models\OA\Event[]",
        ];

        $subEvent = self::checkTypes($subEvent, $types);

        $this->subEvent = $subEvent;
    }

    /**
     * @return \OpenActive\Models\OA\Event
     */
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * @param \OpenActive\Models\OA\Event $superEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuperEvent($superEvent)
    {
        $types = [
            "\OpenActive\Models\OA\Event",
        ];

        $superEvent = self::checkTypes($superEvent, $types);

        $this->superEvent = $superEvent;
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
     * @return \OpenActive\Models\OA\QuantitativeValue
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $distance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistance($distance)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $distance = self::checkTypes($distance, $types);

        $this->distance = $distance;
    }

    /**
     * @return int|null
     */
    public function getAttendeeCount()
    {
        return $this->attendeeCount;
    }

    /**
     * @param int|null $attendeeCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAttendeeCount($attendeeCount)
    {
        $types = [
            "int",
            "null",
        ];

        $attendeeCount = self::checkTypes($attendeeCount, $types);

        $this->attendeeCount = $attendeeCount;
    }

    /**
     * @return int|null
     */
    public function getRegistrationCount()
    {
        return $this->registrationCount;
    }

    /**
     * @param int|null $registrationCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRegistrationCount($registrationCount)
    {
        $types = [
            "int",
            "null",
        ];

        $registrationCount = self::checkTypes($registrationCount, $types);

        $this->registrationCount = $registrationCount;
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
     * @return \OpenActive\Models\OA\QuantitativeValue
     */
    public function getEstimatedDuration()
    {
        return $this->estimatedDuration;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $estimatedDuration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedDuration($estimatedDuration)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $estimatedDuration = self::checkTypes($estimatedDuration, $types);

        $this->estimatedDuration = $estimatedDuration;
    }

    /**
     * @return \OpenActive\Models\OA\VideoObject[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\OA\VideoObject[] $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = [
            "\OpenActive\Models\OA\VideoObject[]",
        ];

        $video = self::checkTypes($video, $types);

        $this->video = $video;
    }

    /**
     * @return \OpenActive\Models\OA\SportsActivityLocation[]
     */
    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    /**
     * @param \OpenActive\Models\OA\SportsActivityLocation[] $sportsActivityLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSportsActivityLocation($sportsActivityLocation)
    {
        $types = [
            "\OpenActive\Models\OA\SportsActivityLocation[]",
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
     * @return bool|null
     */
    public function getIsVirtuallyCoached()
    {
        return $this->isVirtuallyCoached;
    }

    /**
     * @param bool|null $isVirtuallyCoached
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsVirtuallyCoached($isVirtuallyCoached)
    {
        $types = [
            "bool",
            "null",
        ];

        $isVirtuallyCoached = self::checkTypes($isVirtuallyCoached, $types);

        $this->isVirtuallyCoached = $isVirtuallyCoached;
    }

    /**
     * @return \OpenActive\Models\OA\VirtualLocation
     */
    public function getVirtualLocation()
    {
        return $this->virtualLocation;
    }

    /**
     * @param \OpenActive\Models\OA\VirtualLocation $virtualLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVirtualLocation($virtualLocation)
    {
        $types = [
            "\OpenActive\Models\OA\VirtualLocation",
        ];

        $virtualLocation = self::checkTypes($virtualLocation, $types);

        $this->virtualLocation = $virtualLocation;
    }

    /**
     * @return \OpenActive\Models\OA\Place
     */
    public function getAffiliatedLocation()
    {
        return $this->affiliatedLocation;
    }

    /**
     * @param \OpenActive\Models\OA\Place $affiliatedLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAffiliatedLocation($affiliatedLocation)
    {
        $types = [
            "\OpenActive\Models\OA\Place",
        ];

        $affiliatedLocation = self::checkTypes($affiliatedLocation, $types);

        $this->affiliatedLocation = $affiliatedLocation;
    }

    /**
     * @return bool|null
     */
    public function getIsInteractivityPreferred()
    {
        return $this->isInteractivityPreferred;
    }

    /**
     * @param bool|null $isInteractivityPreferred
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsInteractivityPreferred($isInteractivityPreferred)
    {
        $types = [
            "bool",
            "null",
        ];

        $isInteractivityPreferred = self::checkTypes($isInteractivityPreferred, $types);

        $this->isInteractivityPreferred = $isInteractivityPreferred;
    }

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     */
    public function getParticipantSuppliedEquipment()
    {
        return $this->participantSuppliedEquipment;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $participantSuppliedEquipment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParticipantSuppliedEquipment($participantSuppliedEquipment)
    {
        $types = [
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        ];

        $participantSuppliedEquipment = self::checkTypes($participantSuppliedEquipment, $types);

        $this->participantSuppliedEquipment = $participantSuppliedEquipment;
    }

    /**
     * @return string
     */
    public function getDonationPaymentUrl()
    {
        return $this->donationPaymentUrl;
    }

    /**
     * @param string $donationPaymentUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDonationPaymentUrl($donationPaymentUrl)
    {
        $types = [
            "string",
        ];

        $donationPaymentUrl = self::checkTypes($donationPaymentUrl, $types);

        $this->donationPaymentUrl = $donationPaymentUrl;
    }

    /**
     * @return bool|null
     */
    public function getIsFirstSessionAccessibleForFree()
    {
        return $this->isFirstSessionAccessibleForFree;
    }

    /**
     * @param bool|null $isFirstSessionAccessibleForFree
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsFirstSessionAccessibleForFree($isFirstSessionAccessibleForFree)
    {
        $types = [
            "bool",
            "null",
        ];

        $isFirstSessionAccessibleForFree = self::checkTypes($isFirstSessionAccessibleForFree, $types);

        $this->isFirstSessionAccessibleForFree = $isFirstSessionAccessibleForFree;
    }

    /**
     * @return bool|null
     */
    public function getIsScheduledAsSlots()
    {
        return $this->isScheduledAsSlots;
    }

    /**
     * @param bool|null $isScheduledAsSlots
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsScheduledAsSlots($isScheduledAsSlots)
    {
        $types = [
            "bool",
            "null",
        ];

        $isScheduledAsSlots = self::checkTypes($isScheduledAsSlots, $types);

        $this->isScheduledAsSlots = $isScheduledAsSlots;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint $contactPoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoint($contactPoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        ];

        $contactPoint = self::checkTypes($contactPoint, $types);

        $this->contactPoint = $contactPoint;
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

    /**
     * @return \OpenActive\Enums\TestOpenBookingFlowEnumeration|null
     */
    public function getTestOpenBookingFlow()
    {
        return $this->testOpenBookingFlow;
    }

    /**
     * @param \OpenActive\Enums\TestOpenBookingFlowEnumeration|null $testOpenBookingFlow
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTestOpenBookingFlow($testOpenBookingFlow)
    {
        $types = [
            "\OpenActive\Enums\TestOpenBookingFlowEnumeration",
            "null",
        ];

        $testOpenBookingFlow = self::checkTypes($testOpenBookingFlow, $types);

        $this->testOpenBookingFlow = $testOpenBookingFlow;
    }

    /**
     * @return \OpenActive\Enums\TestOpportunityCriteriaEnumeration|null
     */
    public function getTestOpportunityCriteria()
    {
        return $this->testOpportunityCriteria;
    }

    /**
     * @param \OpenActive\Enums\TestOpportunityCriteriaEnumeration|null $testOpportunityCriteria
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTestOpportunityCriteria($testOpportunityCriteria)
    {
        $types = [
            "\OpenActive\Enums\TestOpportunityCriteriaEnumeration",
            "null",
        ];

        $testOpportunityCriteria = self::checkTypes($testOpportunityCriteria, $types);

        $this->testOpportunityCriteria = $testOpportunityCriteria;
    }

}
