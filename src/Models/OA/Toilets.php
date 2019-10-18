<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [LocationFeatureSpecification](https://schema.org/LocationFeatureSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Toilets extends \OpenActive\Models\OA\LocationFeatureSpecification
{
    /**
     * A string, suitable for presentation in user interfaces.
     *
     * ```json
     * "name": "Public Toilets"
     * ```
     *
     * @var string
     */
    protected $name;

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

}
