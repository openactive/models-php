<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PropertyValue](https://schema.org/PropertyValue), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class PropertyValue extends \OpenActive\Models\SchemaOrg\PropertyValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PropertyValue";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "description" => "description",
            "propertyID" => "propertyID",
            "value" => "value",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of this PropertyValue
     *
     * ```json
     * "name": "Vendor ID"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * Additional human-readable version of the value of the property.
     *
     *
     * @var string
     */
    protected $description;

    /**
     * A commonly used identifier for the characteristic represented by the property
     *
     * ```json
     * "propertyID": "ActivePlaces"
     * ```
     *
     * @var string
     */
    protected $propertyID;

    /**
     * The actual value of this identifier
     *
     * ```json
     * "value": "SB1234"
     * ```
     *
     * @var string|int|null
     */
    protected $value;

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
     * @return string
     */
    public function getPropertyID()
    {
        return $this->propertyID;
    }

    /**
     * @param string $propertyID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPropertyID($propertyID)
    {
        $types = [
            "string",
        ];

        $propertyID = self::checkTypes($propertyID, $types);

        $this->propertyID = $propertyID;
    }

    /**
     * @return string|int|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string|int|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

}
