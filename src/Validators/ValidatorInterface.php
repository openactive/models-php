<?php

namespace OpenActive\Validators;

interface ValidatorInterface
{
    /**
     * Coerce given value to the type the validator is validating against.
     *
     * @param mixed $value The value to coerce.
     * @return mixed
     */
    public function coerce($value);

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value);
}
