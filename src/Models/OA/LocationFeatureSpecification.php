<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [LocationFeatureSpecification](https://schema.org/LocationFeatureSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class LocationFeatureSpecification extends \OpenActive\Models\SchemaOrg\LocationFeatureSpecification
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return bool|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool|null $value
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = array(
            "bool",
            "null",
        );

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

}
