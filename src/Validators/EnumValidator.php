<?php

namespace OpenActive\Validators;

use ReflectionClass;

class EnumValidator extends BaseValidator
{
    private $classname;
    public function __construct($classname)
    {
        $this->classname = $classname;
    }

    /**
     * Coerce given value to the type the validator is validating against.
     * PLEASE NOTE: no checks are performed on the given $value.
     * It is therefore recommended to call the "run" method first before this.
     *
     * @param mixed $value The value to coerce.
     * @return mixed The coerced value
     */
    public function coerce($value)
    {
        if (! is_string($value)) {
            return $value;
        }

        $fqEnumClassname = $this->getFullQualifiedEnumClassname($value);

        return new $fqEnumClassname();
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        if (! is_string($value) && ! is_object($value)) {
            return false;
        }

        if (is_object($value)) {
            $reflection = new \ReflectionClass($value);

            $classname = $reflection->getName();

            $memberVal = $reflection->getConstant('memberVal');

            if (
                $memberVal === false ||
                $reflection->getConstant('value') === false ||
                strpos($classname, 'OpenActive\Enums\\') !== 0
            ) {
                return false;
            }

            $value = $memberVal;
        }

        $fqEnumClassname = $this->getFullQualifiedEnumClassname($value);

        // $this->classname also represents the root namespace
        // of the enum value classname,
        // if a class with that namespace plus its name exists
        // and has the same value passed to the validator, pass!
        return class_exists($fqEnumClassname) &&
            $fqEnumClassname::memberVal === $value;
    }

    /**
     * Return the fully-qualified Enum classname from a given URL value
     *
     * @return string
     */
    private function getFullQualifiedEnumClassname($url)
    {
        // Enum value is usually in a URL form
        // Replace the base so that have a classname to use for the enum value
        $enumValueClassname = str_replace(
            array(
                "https://openactive.io/ns-beta#",
                "https://openactive.io/",
                "https://schema.org/",
                "http://purl.org/goodrelations/v1#",
            ),
            "",
            $url
        );

        return $this->classname."\\".$enumValueClassname;
    }
}
