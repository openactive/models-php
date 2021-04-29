<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://pending.schema.org/Schedule.
 *
 */
class PartialSchedule extends \OpenActive\Models\OA\Schedule
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PartialSchedule";
    }

    public static function fieldList() {
        $fields = [
            "idTemplate" => "idTemplate",
            "scheduledEventType" => "scheduledEventType",
            "urlTemplate" => "urlTemplate",
            "timeZone" => "beta:timeZone",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An RFC6570 compliant URI template that can be used to generate a unique identifier (`@id`) for every event described by the schedule. This property is required if the data provider is supporting third-party booking via the Open Booking API, or providing complimentary individual `subEvent`s.
     *
     * ```json
     * "idTemplate": "https://api.example.org/session-series/123/{startDate}"
     * ```
     *
     * @var string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $idTemplate;

    /**
     * The type of event this schedule related to.
     *
     * ```json
     * "scheduledEventType": "Event"
     * ```
     *
     * @var string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $scheduledEventType;

    /**
     * An RFC6570 compliant URI template that can be used to generate a unique `url` for every event described by the schedule. This property is required if the data provider wants to provide participants with a unique URL to book to attend an event.
     *
     * ```json
     * "urlTemplate": "https://example.org/session-series/123/{startDate}"
     * ```
     *
     * @var string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $urlTemplate;

    /**
     * [DEPRECATED: This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `scheduleTimezone` instead.]
     * The time zone used to generate occurrences, same as iCal TZID. E.g. 'Europe/London'.
     * 
     * If you are using this property, please join the discussion at proposal [#197](https://github.com/openactive/modelling-opportunity-data/issues/197).
     *
     *
     * @var string
     * @deprecated This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `scheduleTimezone` instead.
     */
    protected $timeZone;

    /**
     * @return string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getIdTemplate()
    {
        return $this->idTemplate;
    }

    /**
     * @param string $idTemplate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setIdTemplate($idTemplate)
    {
        $types = [
            "string",
        ];

        $idTemplate = self::checkTypes($idTemplate, $types);

        $this->idTemplate = $idTemplate;
    }

    /**
     * @return string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getScheduledEventType()
    {
        return $this->scheduledEventType;
    }

    /**
     * @param string $scheduledEventType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setScheduledEventType($scheduledEventType)
    {
        $types = [
            "string",
        ];

        $scheduledEventType = self::checkTypes($scheduledEventType, $types);

        $this->scheduledEventType = $scheduledEventType;
    }

    /**
     * @return string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getUrlTemplate()
    {
        return $this->urlTemplate;
    }

    /**
     * @param string $urlTemplate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setUrlTemplate($urlTemplate)
    {
        $types = [
            "string",
        ];

        $urlTemplate = self::checkTypes($urlTemplate, $types);

        $this->urlTemplate = $urlTemplate;
    }

    /**
     * @return string
     * @deprecated This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `scheduleTimezone` instead.
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This term has graduated from the beta namespace and is highly likely to be removed in future versions of this library, please use `scheduleTimezone` instead.
     */
    public function setTimeZone($timeZone)
    {
        $types = [
            "string",
        ];

        $timeZone = self::checkTypes($timeZone, $types);

        $this->timeZone = $timeZone;
    }

}
