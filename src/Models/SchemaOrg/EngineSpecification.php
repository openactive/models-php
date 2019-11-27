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

    public static function fieldList() {
        $fields = [
            "fuelType" => "fuelType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $fuelType;

    /**
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $fuelType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelType($fuelType)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        );

        $fuelType = self::checkTypes($fuelType, $types);

        $this->fuelType = $fuelType;
    }

}
