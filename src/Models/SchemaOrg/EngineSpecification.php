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
            "enginePower" => "enginePower",
            "engineDisplacement" => "engineDisplacement",
            "engineType" => "engineType",
            "torque" => "torque",
            "fuelType" => "fuelType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The power of the vehicle's engine.
     *     Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS, with 1 PS = 735,49875 W)\n\n* Note 1: There are many different ways of measuring an engine's power. For an overview, see  [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).\n* Note 2: You can link to information about how the given value has been determined using the [[valueReference]] property.\n* Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $enginePower;

    /**
     * The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. \n\nTypical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches\n* Note 1: You can link to information about how the given value has been determined using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $engineDisplacement;

    /**
     * The type of engine or engines powering the vehicle.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $engineType;

    /**
     * The torque (turning force) of the vehicle's engine.\n\nTypical unit code(s): NU for newton metre (N m), F17 for pound-force per foot, or F48 for pound-force per inch\n\n* Note 1: You can link to information about how the given value has been determined (e.g. reference RPM) using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $torque;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    protected $fuelType;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getEnginePower()
    {
        return $this->enginePower;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $enginePower
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEnginePower($enginePower)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $enginePower = self::checkTypes($enginePower, $types);

        $this->enginePower = $enginePower;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getEngineDisplacement()
    {
        return $this->engineDisplacement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $engineDisplacement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEngineDisplacement($engineDisplacement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $engineDisplacement = self::checkTypes($engineDisplacement, $types);

        $this->engineDisplacement = $engineDisplacement;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getEngineType()
    {
        return $this->engineType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $engineType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEngineType($engineType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        ];

        $engineType = self::checkTypes($engineType, $types);

        $this->engineType = $engineType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getTorque()
    {
        return $this->torque;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $torque
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTorque($torque)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $torque = self::checkTypes($torque, $types);

        $this->torque = $torque;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null $fuelType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelType($fuelType)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "null",
        ];

        $fuelType = self::checkTypes($fuelType, $types);

        $this->fuelType = $fuelType;
    }

}
