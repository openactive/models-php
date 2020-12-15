<?php

namespace OpenActive\Validators;

/**
 * Store and print all Currency values as string, this is to avoid floating point errors when serializing/deserializing
 * JSON.
 */
class CurrencyValidator extends BaseValidator
{
    /**
     * Coerce given value to the type the validator is validating against.
     * PLEASE NOTE: no checks are performed on the given $value.
     * It is therefore recommended to call the "run" method first before this.
     *
     * @param mixed $value The value to coerce.
     * @return string The coerced value
     */
    public function coerce($value)
    {
        return (string) $value;
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        return is_numeric($value);
    }
}
