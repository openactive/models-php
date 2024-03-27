<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://pending.schema.org/EventSeries.
 *
 */
class EventSeries extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "EventSeries";
    }

    public static function fieldList() {
        $fields = [
            "startDate" => "startDate",
            "endDate" => "endDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The start date and time of the event. Can be specified as a schema:DateTime.
     *
     * ```json
     * "startDate": "2018-01-27T12:00:00Z"
     * ```
     *
     * @var DateTime|null
     * @deprecated This property is disinherited in this type, and must not be used.
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
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $endDate;

    /**
     * @return DateTime|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
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
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
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

}
