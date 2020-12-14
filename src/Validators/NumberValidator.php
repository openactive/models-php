<?php

namespace OpenActive\Validators;

class NumberValidator extends BaseValidator
{
    /**
     * To avoid floating point errors and rounding issues when serialising the JSON, we should store all numeric
     * types as a string.
     *
     * @param mixed $value
     * @return string
     */
    public function coerce($value)
    {
        return (string) $value;
    }

    public function run($value)
    {
        return is_numeric($value);
    }
}
