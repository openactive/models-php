<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/LocationFeatureSpecification, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Parking extends \OpenActive\Models\OA\LocationFeatureSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Parking";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A string, suitable for presentation in user interfaces.
     *
     * ```json
     * "name": "Roadside Parking"
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

}
