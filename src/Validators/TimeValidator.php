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
        $dateTimeFormat = "H:i:s";
        $time = \DateTime::createFromFormat($dateTimeFormat, $value);

        return $time !== false;
    }
}
