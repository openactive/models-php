<?php

namespace OpenActive\Validators;

class EnumValidator extends BaseValidator
{
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
     * @return int The coerced value
     */
    // public function coerce($value)
    // {
    //     return $value;
    // }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        // Enum value is usually in a URL form
        // Replace the base so that have a classname to use for the enum value
        $enumValueClassname = str_replace(
            array(
                "https://openactive.io/ns-beta#",
                "https://openactive.io/",
            ),
            "",
            $value
        );

        $fqEnumClassname = $this->classname."\\".$enumValueClassname;

        // $this->classname also represents the root namespace
        // of the enum value classname,
        // if a class with that namespace plus its name exists
        // and has the same value passed to the validator, pass!
        return class_exists($fqEnumClassname) &&
            $fqEnumClassname::memberVal === $value;
    }
}
