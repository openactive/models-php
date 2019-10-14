<?php

class BaseValidator implements ValidatorInterface
{
    /**
     * Coerce given value to the type the validator is validating against.
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
        // If first letter of type is a lower case letter
        if(ctype_lower(substr($type, 0, 1)) === true) {
            // We are validating a native type
            $validatorName = ucfirst($type)."Validator";

            return new $validatorName();
        }

        if($type === "DateTime" || $type === "DateInterval") {
            // Force global namespace on class
            $classname = "\\".$type;
        } else {
            // We force the namespace to OpenActive's
            // TODO: check whether it's SchemaOrg or OA's?
            $classname = "\\OpenActive\\Models\\".$type;
        }

        return new InstanceValidator($classname);
    }
}
