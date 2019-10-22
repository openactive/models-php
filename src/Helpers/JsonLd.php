<?php

namespace OpenActive\Helpers;

use OpenActive\Helpers\DateInterval as DateIntervalHelper;
use OpenActive\Helpers\DateTime as DateTimeHelper;

class JsonLd
{
    /**
     *
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
     * @return array
     */
    public static function prepareDataForSerialization($obj)
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
        if(
            $fq_classname !== "\\OpenActive\\Rpde\\RpdeBody" &&
            $fq_classname !== "\\OpenActive\\Rpde\\RpdeItem"
        ) {
            $data["type"] = self::getType($obj);
        }

        // Add context only if a BaseModel (not RPDE stuff)
        if(is_subclass_of($obj, "\\OpenActive\\BaseModel")) {
            $data["@context"] = static::$defaultContext;
        }

        // Loop all class methods, find the getters
        // and map defined attributes, normalizing attribute name
        foreach($classMethods as $methodName) {
            if(substr($methodName, 0, 3) !== "get") {
                continue;
            }

            // Attribute name is method name without the leading "get" string,
            // and camel-cased
            $attrName = Str::camel(substr($methodName, 3));

            // Attribute value is the result of calling $methodName on $obj
            $attrValue = $obj->$methodName();

            if(is_array($attrValue)) {
                // If attribute value is an array,
                // get data for serialization from each of the item.
                foreach($attrValue as $idx => $item) {
                    if(is_object($item)) {
                        // Get fully qualified namespace of the item's class name
                        $fq_classname = "\\".get_class($item);

                        $item = self::prepareDataForSerialization(
                            $item
                        );
                    }

                    $attrValue[$idx] = $item;
                }
            } else if(is_object($attrValue)) {
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
                            $attrValue
                        );
                }
            }

            $data[$attrName] = $attrValue;
        }

        // Remove empty elements
        return array_filter(
            $data,
            function($value) {
                if(is_array($value) === TRUE && count($value) === 0) {
                    // Filter out empty arrays
                    return false;
                }

                // Filter out null values and empty strings
                return $value !== null && $value !== "";
            }
        );
    }

    /**
     * Remove all "@context" attributes from the given JSON-LD string,
     * leaving only the first occurrence.
     *
     * @param string $json
     * @return string
     * @see https://github.com/openactive/OpenActive.NET/blob/master/OpenActive.NET/OpenActiveSerializer.cs#L113 For .NET implementation
     */
    public static function removeAllButFirstContext($json)
    {
        // OpenActive beta's context JSON-LD representation
        $openActiveContextPropertyWithBeta = "\"@context\":[\"https:\\/\\/openactive.io\\/\",\"https:\\/\\/openactive.io\\/ns-beta\"],";

        // Get the index of the first character of context within the JSON
        $contextStartIndex = strpos($json, $openActiveContextPropertyWithBeta);

        // Get the index of first character after context within the JSON
        $contextEndIndex = $contextStartIndex +
            strlen($openActiveContextPropertyWithBeta) + 1;

        // The resulting JSON is the string before context (with context included),
        // with the additional context strings removed
        $json = substr($json, 0, $contextEndIndex).
            str_replace(
                $openActiveContextPropertyWithBeta,
                "",
                substr($json, $contextEndIndex)
            );

        return $json;
    }
}
