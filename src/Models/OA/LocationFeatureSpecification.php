<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/LocationFeatureSpecification, which means that any of this type's properties within schema.org may also be used.
 *
 */
class LocationFeatureSpecification extends \OpenActive\Models\SchemaOrg\LocationFeatureSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "LocationFeatureSpecification";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "value" => "value",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A string, suitable for presentation in user interfaces.
     *
     * ```json
     * "name": "Bike Shed"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A boolean value indicating whether this ammenity is available.
     *
     *
     * @var bool|null
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
     * @return bool|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = [
            "bool",
            "null",
        ];

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

}
