<?php

namespace OpenActive\Validators;

class RpdeEnumValidator extends BaseValidator
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
        // RPDE enums work slightly different from the regular models'
        // In that they simply hold some constants with the accepted values
        // Checking if a "$value" is valid therefore simply means checking whether
        // The called enum contains at least a costant that matches the "$value"
        $reflectEnum = new \ReflectionClass($this->classname);

        return array_search($value, $reflectEnum->getConstants()) !== false;
    }
}
