<?php

namespace OpenActive\Validators;

class IntValidator extends BaseValidator
{
    /**
     * Coerce given value to the type the validator is validating against.
     *
     * @param mixed $value The value to coerce.
     * @return int The coerced value
     */
    public function coerce($value)
    {
        return (int) $value;
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        return is_int($value);
    }
}
