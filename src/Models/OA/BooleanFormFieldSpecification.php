<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/PropertyValueSpecification, which means that any of this type's properties within schema.org may also be used.
 *
 */
class BooleanFormFieldSpecification extends \OpenActive\Models\OA\PropertyValueSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "BooleanFormFieldSpecification";
    }

    public static function fieldList() {
        $fields = [
            "valueRequired" => "valueRequired",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifies that a value for the field is required to proceed with the booking.
     *
     *
     * @var bool|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $valueRequired;

    /**
     * @return bool|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getValueRequired()
    {
        return $this->valueRequired;
    }

    /**
     * @param bool|null $valueRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setValueRequired($valueRequired)
    {
        $types = [
            "bool",
            "null",
        ];

        $valueRequired = self::checkTypes($valueRequired, $types);

        $this->valueRequired = $valueRequired;
    }

}
