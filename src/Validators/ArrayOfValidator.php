<?php

namespace OpenActive\Validators;

class ArrayOfValidator extends BaseValidator
{
    /**
     * The validator of the single array item.
     *
     * @var ValidatorInterface
     */
    protected $itemValidator;

    public function __construct($itemValidator)
    {
        $this->itemValidator = $itemValidator;
    }

    /**
     * Run validation on the given value.
     *
     * @param mixed $value The value to validate.
     * @return bool Whether validation passes or not.
     */
    public function run($value)
    {
        $nullValidator = new NullValidator();

        // Check if value is an array
        if((new ArrayValidator())->run($value) === false) {
            return false;
        }

        foreach($value as $item) {
            // If any of the provided items is not null nor an instance of the provided class name
            if(
                $nullValidator->run($item) === false &&
                $this->itemValidator->run($item) === false
            ) {
                return false;
            }
        }

        return true;
    }

    /**
     * Set the instance of the item validator.
     *
     * @param ValidatorInterface $itemValidator
     * @return $this
     */
    public function setItemValidator($itemValidator)
    {
        $this->itemValidator = $itemValidator;

        return $this;
    }
}
