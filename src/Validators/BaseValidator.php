<?php

namespace OpenActive\Validators;

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
        // If last 2 characters are "[]"
        // We are validating an array
        $isTypeArray = substr($type, -2) === "[]";

        if($isTypeArray === true) {
            // Instantiate validator
            // The single item validator will be instantiated later
            // Once we know better if we are dealing with a native type or a class
            $validator = new ArrayOfValidator();
        }

        // If first letter of type is a lower case letter
        // We are validating a native type
        if(ctype_lower(substr($type, 0, 1)) === true) {
            // If we are validating an array
            // We are validating an array of native types
            if($isTypeArray === true) {
                // Build item validator name
                $itemValidatorName = ucfirst(substr($type, -2))."Validator";

                // Set the item validator on ArrayOfValidator and return
                // (fluid interface returns the validator itself)
                return $validator->setItemValidator(new $itemValidatorName());
            }

            // Build item validator name
            $validatorName = ucfirst($type)."Validator";

            return new $validatorName();
        }

        if($type === "DateTime" || $type === "DateInterval") {
            // Force global namespace on class
            $classname = "\\".$type;
        } else {
            // Force the namespace to OpenActive's
            // TODO: check whether it's SchemaOrg or OA's?
            $classname = "\\OpenActive\\Models\\".$type;
        }

        // If validating an array
        // it means validating an array of objects
        if($isTypeArray === true) {
            // Strip out last 2 characters "[]" to get original class name
            $classname = substr($classname, 0, -2);

            // Set the item validator on ArrayOfValidator and return
            // (fluid interface returns the validator itself)
            return $validator->setItemValidator(
                new InstanceValidator($classname)
            );
        }

        return new InstanceValidator($classname);
    }
}
