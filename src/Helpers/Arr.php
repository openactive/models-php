<?php

namespace OpenActive\Helpers;

class Arr
{
    /**
     * Returns whether the given value is an associative array or not.
     *
     * @param array $value
     * @return bool
     */
    public static function isAssociative($value)
    {
        return count(array_filter(array_keys($value), 'is_string')) > 0;
    }
}
