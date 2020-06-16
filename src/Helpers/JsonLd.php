<?php

namespace OpenActive\Helpers;

use OpenActive\Helpers\DateInterval as DateIntervalHelper;
use OpenActive\Helpers\DateTime as DateTimeHelper;

class JsonLd
{
    /**
     * The default JSON-LD context for this package.
     *
     * @var array
     */
    public static $defaultContext = [
       "https://openactive.io/",
       "https://openactive.io/ns-beta"
   ];

    /**
     * Returns an associative array with the data ready for JSON-LD serialization.
     *
     * @param \OpenActive\BaseModel $obj The given instance to convert to JSON-LD
     * @param object|null $parent The parent node in the structure.
     * @param bool $schema Whether to add a Schema.org context
     * @return array
     */
    public static function prepareDataForSerialization($obj, $parent = null, $schema = false)
    {
        // Get fully qualified namespace of the object's class name
        $fq_classname = "\\".get_class($obj);

        // Get interval spec string, e.g. "P1D"
        if($fq_classname === "\\DateInterval") {
            return DateIntervalHelper::specString($obj);
        }

        // Get ISO 8601 date time representation,
        // e.g. "2019-01-01T00:00:00-08:00"
        if($fq_classname === "\\DateTime") {
            return DateTimeHelper::iso8601($obj);
        }

        // Get ISO 8601 date time representation,
        // e.g. "2019-01-01T00:00:00-08:00"
        if($fq_classname === "\\OpenActive\\Helpers\\Date") {
            return $obj->toISO8601();
        }

        // Enums should return memberVal const
        if(strpos($fq_classname, "\\OpenActive\\Enums\\") === 0) {
            return $obj::memberVal;
        }

        $data = array();

        // Add type to data if not an RpdeItem
        if (
            $fq_classname !== "\\OpenActive\\Rpde\\RpdeBody" &&
            $fq_classname !== "\\OpenActive\\Rpde\\RpdeItem"
        ) {
            $data["@type"] = $obj->getType();
        }

        // Only add context if object is subclass of BaseModel
        // and no parent, or parent is an RPDE item
        if (
            is_subclass_of($obj, "\\OpenActive\\BaseModel") &&
            (
                $parent === null ||
                (
                    is_object($parent) &&
                    $parent instanceof \OpenActive\Rpde\RpdeItem
                )
            )
        ) {
            $data["@context"] = array_merge(
                $schema ? ['https://schema.org'] : [],
                static::$defaultContext
            );
        }

        $fields = $obj->fieldList();

        // Loop all class methods, find the getters
        // and map defined attributes, normalizing attribute name
        foreach ($fields as $propName => $attrName) {
            $methodName = "get" . Str::pascal($propName);

            // Attribute value is the result of calling $methodName on $obj
            $attrValue = $obj->$methodName();

            if (is_array($attrValue)) {
                // If attribute value is an array,
                // get data for serialization from each of the item.
                foreach ($attrValue as $idx => $item) {
                    if (is_object($item)) {
                        // Get fully qualified namespace of the item's class name
                        $fq_classname = "\\".get_class($item);

                        $item = self::prepareDataForSerialization(
                            $item,
                            $attrValue,
                            $schema
                        );
                    }

                    $attrValue[$idx] = $item;
                }
            } elseif (is_object($attrValue)) {
                // If attribute value is an object,
                // get the data for the individual object

                // Get fully qualified namespace of the item's class name
                $fq_classname = "\\".get_class($attrValue);

                $attrValue = self::prepareDataForSerialization(
                    $attrValue,
                    $obj,
                    $schema
                );
            }

            $data[$attrName] = $attrValue;
        }

        // Remove empty elements
        return array_filter(
            $data,
            static function ($value, $key) {
                if (is_array($value) === true && count($value) === 0 && $key !== 'items') {
                    // Filter out empty arrays
                    return false;
                }

                // Filter out null values and empty strings
                return $value !== null && $value !== "";
            },
            ARRAY_FILTER_USE_BOTH
        );
    }
}
