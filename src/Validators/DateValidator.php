<?php

namespace OpenActive\Validators;

use OpenActive\Helpers\Date;

class DateValidator extends BaseValidator
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
        if ($value instanceof Date) {
            return $value;
        }
        return Date::createFromISO8601($value);
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        if ($value instanceof Date) {
            return true;
        }
        if (!is_string($value)) {
            return false;
        }
        if (preg_match(Date::ISO8601_REGEX, $value)) {
            return true;
        }

        return false;
    }
}
