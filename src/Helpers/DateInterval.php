<?php

namespace OpenActive\Helpers;

/**
 *
 */
class DateInterval
{
    /**
     * Returns an interval spec string (ISO 8601 format)
     * from a given DateInterval object.
     *
     * @param DateInterval $dateInterval
     * @return string
     */
    public static function specString($dateInterval)
    {
        if($dateInterval instanceof \DateInterval === FALSE) {
            throw new \Exception("Invalid argument type.");
        }

        // Reading all non-zero date parts.
        $date = array_filter(array(
            'Y' => $dateInterval->y,
            'M' => $dateInterval->m,
            'D' => $dateInterval->d
        ));

        // Reading all non-zero time parts.
        $time = array_filter(array(
            'H' => $dateInterval->h,
            'M' => $dateInterval->i,
            'S' => $dateInterval->s
        ));

        $specString = 'P';

        // Adding each part to the spec-string.
        foreach ($date as $key => $value) {
            $specString .= $value . $key;
        }
        if (count($time) > 0) {
            $specString .= 'T';
            foreach ($time as $key => $value) {
                $specString .= $value . $key;
            }
        }

        return $specString;
    }
}
