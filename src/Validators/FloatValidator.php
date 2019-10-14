<?php

namespace OpenActive\Validators;

class FloatValidator extends BaseValidator
{
    /**
     * Coerce given value to the type the validator is validating against.
     *
     * @param mixed $value The value to coerce.
     * @return float The coerced value
     */
    public function coerce($value)
    {
        return (float) $value;
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        return is_float($value);
    }
}
