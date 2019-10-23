<?php

namespace OpenActive\Validators;

use OpenActive\Helpers\DateInterval as DateIntervalHelper;

class DateIntervalValidator extends BaseValidator
{
    /**
     * Coerce given value to the type the validator is validating against.
     * PLEASE NOTE: no checks are performed on the given $value.
     * It is therefore recommended to call the "run" method first before this.
     *
     * @param mixed $value The value to coerce.
     * @return mixed The same value.
     * @throws \Exception When $value cannot be parsed as a \DateInterval
     */
    public function coerce($value)
    {
        // instanceof does not throw any error
        // if the variable being tested is not an object,
        // it simply returns FALSE.
        if ($value instanceof \DateInterval) {
            return $value;
        }

        // If not passing a DateInterval object, try and create one from $value
        // Assuming that the string will be an interval spec in ISO 8601 format
        return new \DateInterval($value);
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
        if ($value instanceof \DateInterval) {
            return true;
        }

        // If not a string - fail validation
        if (is_string($value) === false) {
            return false;
        }

        // If not passing a DateInterval object, try and create one from $value
        try {
            $dateInterval = new \DateInterval($value);
        } catch (\Exception $e) {
            // If the string is not a valid interval spec in ISO 8601 format,
            // Fail validation
            return false;
        }

        // Double check that the created interval returns the same interval spec
        // As $value if so, validation passes
        return $dateInterval !== false &&
            DateIntervalHelper::specString($dateInterval) === $value;
    }
}
