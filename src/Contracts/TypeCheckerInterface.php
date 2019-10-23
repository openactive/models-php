<?php

namespace OpenActive\Contracts;

interface TypeCheckerInterface
{
    /**
     * Check if the given value is of at least one of the given types.
     *
     * @param mixed $value
     * @param string[] $types
     * @return bool
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public static function checkTypes($value, $types);
}
