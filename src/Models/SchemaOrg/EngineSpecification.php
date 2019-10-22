<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EngineSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     *
     *
     * @var string|Schema.NET.QualitativeValue|null
     */
    protected $fuelType;

    /**
     * @return string|Schema.NET.QualitativeValue|null
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * @param string|Schema.NET.QualitativeValue|null $fuelType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFuelType($fuelType)
    {
        $types = array(
            "string",
            "Schema.NET.QualitativeValue",
            "null",
        );

        $fuelType = self::checkTypes($fuelType, $types);

        $this->fuelType = $fuelType;
    }

}
