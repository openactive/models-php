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
        $isTypeArray = false;

        // If last 2 characters are "[]"
        if(substr($type, -2) === "[]") {
            // We are validating an array
            $isTypeArray = true;

            $validator = new ArrayOfValidator();
        }

        // If first letter of type is a lower case letter
        if(ctype_lower(substr($type, 0, 1)) === true) {
            // If we are validating an array
            if($isTypeArray === true) {
                // We are validating an array of native types

                // Build item validator name
                $itemValidatorName = ucfirst(substr($type, -2))."Validator";

                // We set the item validator on ArrayOfValidator and return
                // (fluid interface returns the validator itself)
                return $validator->setItemValidator(new $itemValidatorName());
            }

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

        // If we are validating an array
        if($isTypeArray === true) {
            // We are validating an array of objects

            $classname = substr($classname, 0, -2);

            return $validator->setItemValidator(
                new InstanceValidator($classname)
            );
        }

        return new InstanceValidator($classname);
    }
}
