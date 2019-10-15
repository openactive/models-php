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
    public static function camelCaseName($name)
    {
        return lcfirst(self::canonicalizeName($name));
    }

    /**
     * Convert a given value to pascal case e.g. "PascalCase".
     *
     * @param string $value
     * @return string
     */
    public static function canonicalizeName($name)
    {
        return preg_replace_callback(
            '/(?:^|_)([a-z])/',
            static function ($matches) {
                return strtoupper($matches[1]);
            },
            $name
        );
    }

    /**
     * Convert a given value to snake case e.g. "snake_case".
     *
     * @param string $value
     * @return string
     */
    public static function snakeName($name)
    {
        return strtolower(preg_replace_callback(
            '/(?<=[a-z])([A-Z])/',
            static function ($matches) {
                return '_' . $matches[1];
            },
            $name
        ));
    }
}
