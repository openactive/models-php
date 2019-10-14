<?php

class ArrayValidator extends BaseValidator
{
    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        return is_array($value);
    }
}
