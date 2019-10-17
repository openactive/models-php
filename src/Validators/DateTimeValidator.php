<?php

namespace OpenActive\Validators;

use OpenActive\Helpers\DateTime as DateTimeHelper;

class DateTimeValidator extends BaseValidator
{
    /**
     * Coerce given value to the type the validator is validating against.
     * PLEASE NOTE: no checks are performed on the given $value.
     * It is therefore recommended to call the "run" method first before this.
     *
     * @param mixed $value The value to coerce.
     * @return mixed The same value.
     */
    public function coerce($value)
    {
        // instanceof does not throw any error
        // if the variable being tested is not an object,
        // it simply returns FALSE.
        if($value instanceof \DateTime) {
            return $value;
        }

        // If not passing a DateTime object, try and create one from $value
        // Assuming that the string will be a date in ISO 8601
        return \DateTime::createFromFormat("Y-m-d\TH:i:sP", $value);
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        // instanceof does not throw any error
        // if the variable being tested is not an object,
        // it simply returns FALSE.
        if($value instanceof \DateTime) {
            return true;
        }

        // If not a string - fail validation
        if(is_string($value) === FALSE) {
            return false;
        }

        // If not passing a DateTime object, try and create one from $value
        // Assuming that the string will be a date in ISO 8601
        $dateTime = \DateTime::createFromFormat("Y-m-d\TH:i:sP", $value);

        // If createFromFormat does not return false,
        // And formatting the resulting date yields the same original $value
        // Validation passes
        return $dateTime !== false
            && DateTimeHelper::iso8601($dateTime) === $value;
    }
}
