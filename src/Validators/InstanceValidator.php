<?php

namespace OpenActive\Validators;

class InstanceValidator extends BaseValidator
{
    private $classname;
    public function __construct($classname)
    {
        $this->classname = $classname;
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        // instanceof does not throw any error
        // if the variable being tested is not an object,
        // it simply returns FALSE.
        return $value instanceof $this->classname;
    }
}
