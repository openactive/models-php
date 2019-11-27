<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PropertyValueSpecification](https://schema.org/PropertyValueSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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
     * Descriptive help text for the field.
     *
     *
     * @var string
     */
    protected $description;

    /**
     * Specifies that a value for the field is required to proceed with the booking.
     *
     *
     * @var string
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
        $types = array(
            "string",
        );

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
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getValueRequired()
    {
        return $this->valueRequired;
    }

    /**
     * @param string $valueRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueRequired($valueRequired)
    {
        $types = array(
            "string",
        );

        $valueRequired = self::checkTypes($valueRequired, $types);

        $this->valueRequired = $valueRequired;
    }

}
