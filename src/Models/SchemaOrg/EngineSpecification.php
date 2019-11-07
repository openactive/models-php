<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EngineSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EngineSpecification";
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     *
     *
     * @var \OpenActive\Enums\QualitativeValue|string|null
     */
    protected $fuelType;

    /**
     * @return \OpenActive\Enums\QualitativeValue|string|null
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * @param \OpenActive\Enums\QualitativeValue|string|null $fuelType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelType($fuelType)
    {
        $types = array(
            "\OpenActive\Enums\QualitativeValue",
            "string",
            "null",
        );

        $fuelType = self::checkTypes($fuelType, $types);

        $this->fuelType = $fuelType;
    }

}
