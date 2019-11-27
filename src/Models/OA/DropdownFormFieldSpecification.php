<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PropertyValueSpecification](https://schema.org/PropertyValueSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class DropdownFormFieldSpecification extends \OpenActive\Models\OA\PropertyValueSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "DropdownFormFieldSpecification";
    }

    public static function fieldList() {
        $fields = [
            "valueOption" => "valueOption",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
