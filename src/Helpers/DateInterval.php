<?php

namespace OpenActive\Helpers;

use OpenActive\Exceptions\InvalidArgumentException;

/**
 * A set of helper methods around the global PHP DateInterval class.
 */
class DateInterval
{
    /**
     * Returns an interval spec string (ISO 8601 format)
     * from a given DateInterval object.
     *
     * @param \DateInterval $dateInterval
     * @return string
     * @see https://stackoverflow.com/a/25371691
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not a DateInterval.
     */
    public static function specString($dateInterval)
    {
        if($dateInterval instanceof \DateInterval === FALSE) {
            throw new InvalidArgumentException(
                "Invalid argument type. Argument must be an instance of type ".
                "\DateInterval."
            );
        }

        // Reading all non-zero date parts.
        $date = array_filter(array(
            "Y" => $dateInterval->y,
            "M" => $dateInterval->m,
            "D" => $dateInterval->d
        ));

        // Reading all non-zero time parts.
        $time = array_filter(array(
            "H" => $dateInterval->h,
            "M" => $dateInterval->i,
            "S" => $dateInterval->s
        ));

        $specString = "P";

        // Adding each part to the spec-string.
        foreach ($date as $key => $value) {
            $specString .= $value . $key;
        }
        if (count($time) > 0) {
            $specString .= "T";
            foreach ($time as $key => $value) {
                $specString .= $value . $key;
            }
        }

        return $specString;
    }

    /**
     * Returns the total number of seconds from a given DateInterval object.
     * Please note this solution is not 100% accurate
     *
     * @param \DateInterval $dateInterval
     * @return string
     * @see https://www.rapidtables.com/calc/time/seconds-in-year.html for refeerence over number of days a year
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not a DateInterval.
     */
    public static function toSeconds($dateInterval)
    {
        if($dateInterval instanceof \DateInterval === FALSE) {
            throw new InvalidArgumentException(
                "Invalid argument type. Argument must be an instance of type ".
                "\DateInterval."
            );
        }

        // Days in a year
        $daysInAYear = 365.2425;

        // Weigh all the date interval parts and put them in an array
        $dateIntervalParts = array(
            $dateInterval->s,
            $dateInterval->i * 60,
            $dateInterval->h * 60 * 60,
            $dateInterval->d * 60 * 60 * 24,
            $dateInterval->m * 60 * 60 * 24 * ($daysInAYear / 12),
            $dateInterval->y * 60 * 60 * 24 * $daysInAYear,
        );

        // The number of seconds is the sum of the weighted
        return array_reduce(
            $dateIntervalParts,
            function($carry, $item) { return $carry + $item; },
            0
        );
    }
}
