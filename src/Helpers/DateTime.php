<?php

namespace OpenActive\Helpers;

/**
 * A set of helper methods around the global PHP DateTime class.
 */
class DateTime
{
    /**
     * Returns a ISO 8601 formatted date-time string from a given DateTime object.
     * If the isDateOnly parameter is specified, return the ISO 8601 date string.
     *
     * @param \DateTime $date
     * @param bool|null $isDateOnly
     * @return string
     * @see https://www.php.net/manual/en/function.date.php#refsect1-function.date-parameters
     */
    public static function iso8601($date, $isDateOnly = false)
    {
        if($date instanceof \DateTime === FALSE) {
            throw new \Exception("Invalid argument type.");
        }

        // If only the date is needed, return ISO 8601 date format
        if($isDateOnly === true) {
            $format = "Y-m-d";

        // Otherwise perform the usual format e.g. 2019-01-01T12:00:00-08:00
        } else {
            $format = "Y-m-d\TH:i:sP";
        }

        return $date->format($format);
    }
}
