<?php

namespace OpenActive\Validators;

class BaseValidator implements ValidatorInterface
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
        // For all the classes that inherit BaseValidator
        // that don't need to coerce,
        // This is a no-op
        return $value;
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        return false;
    }

    /**
     * Returns a validator instance from a given type name.
     *
     * @param string The type name
     * @return \OpenActive\Validators\ValidatorInterface
     */
    public static function getValidator($type)
    {
        // If last 2 characters are "[]"
        // We are validating an array
        $isTypeArray = substr($type, -2) === "[]";

        if($isTypeArray === true) {
            // Build item validator name
            // (remove last 2 characters "[]")
            $itemType = substr($type, 0, -2);

            // Instantiate validator
            return new ArrayOfValidator(BaseValidator::getValidator($itemType));
        }

        // If first letter of type is a lower case letter
        // We are validating a native type
        if(ctype_lower(substr($type, 0, 1)) === true) {
            // Build item validator name (FQ)
            $validatorName = "\\OpenActive\\Validators\\".ucfirst($type)."Validator";

            return new $validatorName();
        }

        // Force global namespace on class
        $classname = "\\".$type;

        if($type === "DateTime") {
            return new DateTimeValidator();
        }

        if($type === "DateInterval") {
            return new DateIntervalValidator();
        }

        // Add OpenActive's namespace
        // TODO: check whether it's SchemaOrg or OA's?
        $classname .= "\\OpenActive\\Models".$classname;

        return new InstanceValidator($classname);
    }
}
