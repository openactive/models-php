<?php

namespace OpenActive\Concerns;

use OpenActive\Exceptions\InvalidArgumentException;
use OpenActive\Validators\BaseValidator;

trait TypeChecker
{
    /**
     * Check if the given value is of at least one of the given types.
     *
     * @param mixed $value
     * @param string[] $types
     * @return bool
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public static function checkTypes($value, $types)
    {
        foreach ($types as $type) {
            $validator = BaseValidator::getValidator($type);

            if ($validator->run($value) === true) {
                // If validation passes for the given type
                // We coerce the type to mitigate PHP loose types
                return $validator->coerce($value);
            }
        }

        // If validation does not pass for any of the provided types,
        // type invalid
        $location = self::getTypeCheckerErrorLocation();
        throw new InvalidArgumentException(
            "The first argument type does not match any of the declared parameter types (".
            implode(", ", $types).
            ") for ".json_encode($value)." at $location."
        );
    }

    /**
     * This method retrieves an approximate location of the type error for debugging purposes. This enables the user to
     * see at what location the validation failed
     *
     * @return string
     */
    private static function getTypeCheckerErrorLocation()
    {
        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        $location = [];
        $ns = 'OpenActive\\Models\\OA\\';
        foreach ($trace as $call) {
            if (0 !== strpos($call['class'], $ns)) {
                continue;
            }
            $location[] = preg_replace('/set([A-Z])/', '$1', $call['function']);
            $location[] = str_replace($ns, '', $call['class']);
        }

        return implode('.', array_reverse($location));
    }
}
