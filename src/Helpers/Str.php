<?php

namespace OpenActive\Helpers;

class Str
{
    /**
     * Convert a given value to camel case e.g. "camelCase".
     *
     * @param string $value
     * @return string
     */
    public static function camel($value)
    {
        return lcfirst(self::pascal($value));
    }

    /**
     * Convert a given value to pascal case e.g. "PascalCase".
     *
     * @param string $value
     * @return string
     */
    public static function pascal($value)
    {
        return preg_replace_callback(
            '/(?:^|_)([a-z])/',
            static function ($matches) {
                return strtoupper($matches[1]);
            },
            $value
        );
    }

    /**
     * Convert a given value to snake case e.g. "snake_case".
     * You can optionally specify a $delimiter string to use instead of "_".
     *
     * @param string $value
     * @param string $delimiter
     * @return string
     */
    public static function snake($value, $delimiter = "_")
    {
        return strtolower(preg_replace_callback(
            '/(?<=[a-z])([A-Z])/',
            static function ($matches) use ($delimiter) {
                return $delimiter . $matches[1];
            },
            $value
        ));
    }
}
