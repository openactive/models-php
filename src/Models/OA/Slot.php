<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class Slot extends \OpenActive\Models\SchemaOrg\Event
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
     * The duration of the slot given in [ISO8601] format.
     *
     * ```json
     * "duration": "PT1H"
     * ```
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * URI to the FacilityUse that has this offer
     *
     * ```json
     * "facilityUse": "https://example.com/facility-use/1"
     * ```
     *
     * @var string
     */
    protected $facilityUse;

    /**
     * The maximum available courts or pitches at this time. Must be 0 or 1 for an IndividualFacilityUse.
     *
     * ```json
     * "maximumUses": 16
     * ```
     *
     * @var int|null
     */
    protected $maximumUses;

    /**
     * An array of schema:Offer that include the price of booking.
     *
     * ```json
     * "offers": {
     *   "type": "Offer",
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
     * The remaining available courts or pitches at this time. Must be 0 or 1 for an IndividualFacilityUse.
     *
     * ```json
     * "remainingUses": 5
     * ```
     *
     * @var int|null
     */
    protected $remainingUses;

    /**
     * The start date and time of the slot. Can be specified as a schema:Date or schema:DateTime
     *
     * ```json
     * "startDate": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $startDate;

    /**
     * The end date and time of the slot. Can be specified as a schema:Date or schema:DateTime
     * It is recommended that publishers provide either an schema:endDate or a schema:duration for an slot.
     *
     * ```json
     * "endDate": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     */
    protected $endDate;

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getFacilityUse()
    {
        return $this->facilityUse;
    }

    /**
     * @param string $facilityUse
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFacilityUse($facilityUse)
    {
        $types = array(
            "string",
        );

        $facilityUse = self::checkTypes($facilityUse, $types);

        $this->facilityUse = $facilityUse;
    }

    /**
     * @return int|null
     */
    public function getMaximumUses()
    {
        return $this->maximumUses;
    }

    /**
     * @param int|null $maximumUses
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMaximumUses($maximumUses)
    {
        $types = array(
            "int",
            "null",
        );

        $maximumUses = self::checkTypes($maximumUses, $types);

        $this->maximumUses = $maximumUses;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return int|null
     */
    public function getRemainingUses()
    {
        return $this->remainingUses;
    }

    /**
     * @param int|null $remainingUses
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRemainingUses($remainingUses)
    {
        $types = array(
            "int",
            "null",
        );

        $remainingUses = self::checkTypes($remainingUses, $types);

        $this->remainingUses = $remainingUses;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

}
