<?php

namespace OpenActive;

use OpenActive\Validators\BaseValidator;

trait TypeChecker
{
    /**
     * Check if the given value is of at least one of the given types.
     *
     * @param mixed $value
     * @param string[] $types
     * @return bool
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public static function checkTypes($value, $types)
    {
        foreach($types as $type) {
            $validator = BaseValidator::getValidator($type);

            if($validator->run($value) === true) {
                // If validation passes for the given type
                // We coerce the type to mitigate PHP loose types
                return $validator->coerce($value);
            }
        }

        // If validation does not pass for any of the provided types,
        // type invalid
        // TODO bootstrap TypeError for PHP<7 compatibility
        throw new \Exception(
            "The first argument type does not match any of the declared parameter types (".
            implode(", ", $types).
            ") for ".json_encode($value)."."
        );
    }
}
