<?php

namespace OpenActive\Validators;

class BaseModelValidator extends BaseValidator
{
    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        // With BaseModelValidator we are a bit more relaxed
        // in terms of checking the class name.
        // We allow the class to be an instanceof BaseModel
        // Or to be a sub class (BaseModel is one of its parent)
        if($value instanceof \OpenActive\BaseModel) {
            return true;
        }

        return is_subclass_of($value, "\OpenActive\BaseModel");
    }
}
