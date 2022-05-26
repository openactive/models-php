<?php

namespace OpenActive\Validators;

class TimeValidator extends BaseValidator
{
    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        if(!is_string($value)) {
            return false;
        }
        // user DateTime to parse the string to check it it a valid time string
        // alas it will add today's date so this created object cannot
        // Optionally include seconds
        $match = preg_match('/^(?<h>[0-9]{1,2}):(?<m>[0-9]{1,2})(:(?<s>[0-9]{1,2}))?$/', $value, $parts);
        if (!$match) {
            return false;
        }

        $time = \DateTime::createFromFormat('H:i:s', sprintf(
            '%02d:%02d:%02d',
            $parts['h'],
            $parts['m'],
            isset($parts['s']) ? $parts['s'] : 0
        ));

        return $time !== false;
    }
}
