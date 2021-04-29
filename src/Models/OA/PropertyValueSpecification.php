<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/PropertyValueSpecification, which means that any of this type's properties within schema.org may also be used.
 *
 */
class PropertyValueSpecification extends \OpenActive\Models\SchemaOrg\PropertyValueSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PropertyValueSpecification";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "description" => "description",
            "valueRequired" => "valueRequired",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Display label for the field.
     *
     *
     * @var string
     */
    protected $name;

    /**
     * Descriptive help plain text for the field, which must not include HTML or other markup.
     *
     *
     * @var string
     */
    protected $description;

    /**
     * Specifies that a value for the field is required to proceed with the booking.
     *
     *
     * @var bool|null
     */
    protected $valueRequired;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = [
            "string",
        ];

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return bool|null
     */
    public function getValueRequired()
    {
        return $this->valueRequired;
    }

    /**
     * @param bool|null $valueRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
