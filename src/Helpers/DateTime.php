<?php

namespace OpenActive\Helpers;

/**
 * A set of helper methods around the global PHP DateTime class.
 */
class DateTime
{
    /**
     * Returns a ISO 8601 formatted date string from a given DateTime object.
     *
     * @param \DateTime $date
     * @return string
     * @see https://www.php.net/manual/en/function.date.php#refsect1-function.date-parameters
     */
    public static function iso8601($date)
    {
        if($date instanceof \DateTime === FALSE) {
            throw new \Exception("Invalid argument type.");
        }

        return $date->format("c");
    }
}
