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
     * Returns the JSON-LD type from a given thing.
     *
     * @param \OpenActive\BaseModel $thing
     * @return string
     */
    public static function getType($thing)
    {
        // Append "type" attribute for all other classes
        $reflect = new \ReflectionClass($thing);

        // Type is just the non-FQ class name
        return $reflect->getShortName();
    }

    /**
     * Returns an associative array with the data ready for JSON-LD serialization.
     *
     * @param \OpenActive\BaseModel $obj The given instance to convert to JSON-LD
     * @param object|null $parent The parent node in the structure.
     * @return array
     */
    public static function prepareDataForSerialization($obj, $parent = null)
    {
        // Get all defined methods for the object
        // Please note we don't use get_object_vars() here,
        // As it would only return the public attributes
        // (BaseModel's are all protected)
        $classMethods = get_class_methods($obj);

        // Get fully qualified namespace of the object's class name
        $fq_classname = "\\".get_class($obj);

        $data = array();

        // Add type to data if not an RpdeItem
        if (
            $fq_classname !== "\\OpenActive\\Rpde\\RpdeBody" &&
            $fq_classname !== "\\OpenActive\\Rpde\\RpdeItem"
        ) {
            $data["type"] = self::getType($obj);
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
            $data["@context"] = static::$defaultContext;
        }

        // Loop all class methods, find the getters
        // and map defined attributes, normalizing attribute name
        foreach ($classMethods as $methodName) {
            if (substr($methodName, 0, 3) !== "get") {
                continue;
            }

            // Attribute name is method name without the leading "get" string,
            // and camel-cased
            $attrName = Str::camel(substr($methodName, 3));

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
                            $attrValue
                        );
                    }

                    $attrValue[$idx] = $item;
                }
            } elseif (is_object($attrValue)) {
                // If attribute value is an object,
                // get the data for the individual object

                // Get fully qualified namespace of the item's class name
                $fq_classname = "\\".get_class($attrValue);

                switch ($fq_classname) {
                    case "\\DateInterval":
                        // Get interval spec string, e.g. "P1D"
                        $attrValue = DateIntervalHelper::specString($attrValue);
                        break;
                    case "\\DateTime":
                        // Get ISO 8601 date time representation,
                        // e.g. "2019-01-01T00:00:00-08:00"
                        $attrValue = DateTimeHelper::iso8601($attrValue);
                        break;
                    default:
                        $attrValue = self::prepareDataForSerialization(
                            $attrValue,
                            $obj
                        );
                }
            }

            $data[$attrName] = $attrValue;
        }

        // Remove empty elements
        return array_filter(
            $data,
            function ($value) {
                if (is_array($value) === true && count($value) === 0) {
                    // Filter out empty arrays
                    return false;
                }

                // Filter out null values and empty strings
                return $value !== null && $value !== "";
            }
        );
    }
}
