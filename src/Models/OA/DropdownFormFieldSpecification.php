<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PropertyValueSpecification](https://schema.org/PropertyValueSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class DropdownFormFieldSpecification extends \OpenActive\Models\OA\PropertyValueSpecification
{
    /**
     * Specifies an array of display values for the dropdown.
     *
     *
     * @var string[]
     */
    protected $valueOption;

    /**
     * @return string[]
     */
    public function getValueOption()
    {
        return $this->valueOption;
    }

    /**
     * @param string[] $valueOption
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValueOption($valueOption)
    {
        $types = array(
            "string[]",
        );

        $valueOption = self::checkTypes($valueOption, $types);

        $this->valueOption = $valueOption;
    }

}
