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
     * Coerce given value to the type the validator is validating against.
     * PLEASE NOTE: no checks are performed on the given $value.
     * It is therefore recommended to call the "run" method first before this.
     *
     * @param mixed $value The value to coerce.
     * @return mixed The same value.
     */
    public function coerce($value)
    {
        $newValue = [];
        foreach ($value as $key => $item) {
            $newValue[$key] = $this->itemValidator->coerce($item);
        }
        return $newValue;
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
        if ((new ArrayValidator())->run($value) === false) {
            return false;
        }

        foreach ($value as $item) {
            // If any of the provided items is not null nor an instance of the provided class name
            if (
                $nullValidator->run($item) === false &&
                $this->itemValidator->run($item) === false
            ) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the instance of the item validator.
     *
     * @return ValidatorInterface
     */
    public function getItemValidator()
    {
        return $this->itemValidator;
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
