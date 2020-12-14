<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Schedule](https://pending.schema.org/Schedule), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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
            "timeZone" => "beta:timeZone",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * [DEPRECATED: This beta property is now deprecated, please use `schema:scheduleTimezone` instead.] The time zone used to generate occurrences, same as iCal TZID. E.g. 'Europe/London'.
     * 
     * If you are using this property, please join the discussion at proposal [#197](https://github.com/openactive/modelling-opportunity-data/issues/197).
     *
     *
     * @var string
     */
    protected $timeZone;

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
