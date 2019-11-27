<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Vehicle extends \OpenActive\Models\SchemaOrg\Product
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Vehicle";
    }

    public static function fieldList() {
        $fields = [
            "fuelConsumption" => "fuelConsumption",
            "callSign" => "callSign",
            "numberOfPreviousOwners" => "numberOfPreviousOwners",
            "numberOfForwardGears" => "numberOfForwardGears",
            "fuelEfficiency" => "fuelEfficiency",
            "cargoVolume" => "cargoVolume",
            "numberOfAxles" => "numberOfAxles",
            "steeringPosition" => "steeringPosition",
            "vehicleInteriorType" => "vehicleInteriorType",
            "vehicleEngine" => "vehicleEngine",
            "knownVehicleDamages" => "knownVehicleDamages",
            "numberOfDoors" => "numberOfDoors",
            "numberOfAirbags" => "numberOfAirbags",
            "fuelType" => "fuelType",
            "vehicleTransmission" => "vehicleTransmission",
            "mileageFromOdometer" => "mileageFromOdometer",
            "vehicleSeatingCapacity" => "vehicleSeatingCapacity",
            "driveWheelConfiguration" => "driveWheelConfiguration",
            "productionDate" => "productionDate",
            "purchaseDate" => "purchaseDate",
            "dateVehicleFirstRegistered" => "dateVehicleFirstRegistered",
            "vehicleModelDate" => "vehicleModelDate",
            "vehicleInteriorColor" => "vehicleInteriorColor",
            "vehicleIdentificationNumber" => "vehicleIdentificationNumber",
            "vehicleConfiguration" => "vehicleConfiguration",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).<br/><br/>
     * 
     * <ul>
     * <li>Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use <a class="localLink" href="https://schema.org/unitText">unitText</a> to indicate the unit of measurement, e.g. L/100 km.</li>
     * <li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="https://schema.org/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="https://schema.org/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
     * <li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="https://schema.org/valueReference">valueReference</a> to link the value for the fuel consumption to another value.</li>
     * </ul>
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $fuelConsumption;

    /**
     * A <a href="https://en.wikipedia.org/wiki/Call_sign">callsign</a>, as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     *
     * @var string
     */
    protected $callSign;

    /**
     * The number of owners of the vehicle, including the current one.<br/><br/>
     * 
     * Typical unit code(s): C62
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|float|null
     */
    protected $numberOfPreviousOwners;

    /**
     * The total number of forward gears available for the transmission system of the vehicle.<br/><br/>
     * 
     * Typical unit code(s): C62
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numberOfForwardGears;

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).<br/><br/>
     * 
     * <ul>
     * <li>Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use <a class="localLink" href="https://schema.org/unitText">unitText</a> to indicate the unit of measurement, e.g. mpg or km/L.</li>
     * <li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="https://schema.org/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="https://schema.org/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
     * <li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="https://schema.org/valueReference">valueReference</a> to link the value for the fuel economy to another value.</li>
     * </ul>
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $fuelEfficiency;

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.<br/><br/>
     * 
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet<br/><br/>
     * 
     * Note: You can use <a class="localLink" href="https://schema.org/minValue">minValue</a> and <a class="localLink" href="https://schema.org/maxValue">maxValue</a> to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $cargoVolume;

    /**
     * The number of axles.<br/><br/>
     * 
     * Typical unit code(s): C62
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numberOfAxles;

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SteeringPositionValue
     */
    protected $steeringPosition;

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
     *
     *
     * @var string
     */
    protected $vehicleInteriorType;

    /**
     * Information about the engine or engines of the vehicle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EngineSpecification
     */
    protected $vehicleEngine;

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     *
     * @var string
     */
    protected $knownVehicleDamages;

    /**
     * The number of doors.<br/><br/>
     * 
     * Typical unit code(s): C62
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|float|null
     */
    protected $numberOfDoors;

    /**
     * The number or type of airbags in the vehicle.
     *
     *
     * @var float|string|null
     */
    protected $numberOfAirbags;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $fuelType;

    /**
     * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $vehicleTransmission;

    /**
     * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.<br/><br/>
     * 
     * Typical unit code(s): KMT for kilometers, SMI for statute miles
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $mileageFromOdometer;

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.<br/><br/>
     * 
     * Typical unit code(s): C62 for persons.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $vehicleSeatingCapacity;

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DriveWheelConfigurationValue
     */
    protected $driveWheelConfiguration;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     *
     * @var DateTime|null
     */
    protected $productionDate;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     *
     * @var DateTime|null
     */
    protected $purchaseDate;

    /**
     * The date of the first registration of the vehicle with the respective public authorities.
     *
     *
     * @var DateTime|null
     */
    protected $dateVehicleFirstRegistered;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     *
     *
     * @var DateTime|null
     */
    protected $vehicleModelDate;

    /**
     * The color or color combination of the interior of the vehicle.
     *
     *
     * @var string
     */
    protected $vehicleInteriorColor;

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
     *
     *
     * @var string
     */
    protected $vehicleIdentificationNumber;

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     *
     * @var string
     */
    protected $vehicleConfiguration;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $fuelConsumption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelConsumption($fuelConsumption)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $fuelConsumption = self::checkTypes($fuelConsumption, $types);

        $this->fuelConsumption = $fuelConsumption;
    }

    /**
     * @return string
     */
    public function getCallSign()
    {
        return $this->callSign;
    }

    /**
     * @param string $callSign
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCallSign($callSign)
    {
        $types = array(
            "string",
        );

        $callSign = self::checkTypes($callSign, $types);

        $this->callSign = $callSign;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|float|null
     */
    public function getNumberOfPreviousOwners()
    {
        return $this->numberOfPreviousOwners;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|float|null $numberOfPreviousOwners
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPreviousOwners($numberOfPreviousOwners)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "float",
            "null",
        );

        $numberOfPreviousOwners = self::checkTypes($numberOfPreviousOwners, $types);

        $this->numberOfPreviousOwners = $numberOfPreviousOwners;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getNumberOfForwardGears()
    {
        return $this->numberOfForwardGears;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $numberOfForwardGears
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfForwardGears($numberOfForwardGears)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $numberOfForwardGears = self::checkTypes($numberOfForwardGears, $types);

        $this->numberOfForwardGears = $numberOfForwardGears;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getFuelEfficiency()
    {
        return $this->fuelEfficiency;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $fuelEfficiency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelEfficiency($fuelEfficiency)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $fuelEfficiency = self::checkTypes($fuelEfficiency, $types);

        $this->fuelEfficiency = $fuelEfficiency;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getCargoVolume()
    {
        return $this->cargoVolume;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $cargoVolume
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCargoVolume($cargoVolume)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $cargoVolume = self::checkTypes($cargoVolume, $types);

        $this->cargoVolume = $cargoVolume;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getNumberOfAxles()
    {
        return $this->numberOfAxles;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $numberOfAxles
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAxles($numberOfAxles)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $numberOfAxles = self::checkTypes($numberOfAxles, $types);

        $this->numberOfAxles = $numberOfAxles;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SteeringPositionValue
     */
    public function getSteeringPosition()
    {
        return $this->steeringPosition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SteeringPositionValue $steeringPosition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteeringPosition($steeringPosition)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SteeringPositionValue",
        );

        $steeringPosition = self::checkTypes($steeringPosition, $types);

        $this->steeringPosition = $steeringPosition;
    }

    /**
     * @return string
     */
    public function getVehicleInteriorType()
    {
        return $this->vehicleInteriorType;
    }

    /**
     * @param string $vehicleInteriorType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleInteriorType($vehicleInteriorType)
    {
        $types = array(
            "string",
        );

        $vehicleInteriorType = self::checkTypes($vehicleInteriorType, $types);

        $this->vehicleInteriorType = $vehicleInteriorType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EngineSpecification
     */
    public function getVehicleEngine()
    {
        return $this->vehicleEngine;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EngineSpecification $vehicleEngine
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleEngine($vehicleEngine)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\EngineSpecification",
        );

        $vehicleEngine = self::checkTypes($vehicleEngine, $types);

        $this->vehicleEngine = $vehicleEngine;
    }

    /**
     * @return string
     */
    public function getKnownVehicleDamages()
    {
        return $this->knownVehicleDamages;
    }

    /**
     * @param string $knownVehicleDamages
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnownVehicleDamages($knownVehicleDamages)
    {
        $types = array(
            "string",
        );

        $knownVehicleDamages = self::checkTypes($knownVehicleDamages, $types);

        $this->knownVehicleDamages = $knownVehicleDamages;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|float|null
     */
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|float|null $numberOfDoors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfDoors($numberOfDoors)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "float",
            "null",
        );

        $numberOfDoors = self::checkTypes($numberOfDoors, $types);

        $this->numberOfDoors = $numberOfDoors;
    }

    /**
     * @return float|string|null
     */
    public function getNumberOfAirbags()
    {
        return $this->numberOfAirbags;
    }

    /**
     * @param float|string|null $numberOfAirbags
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAirbags($numberOfAirbags)
    {
        $types = array(
            "float",
            "string",
            "null",
        );

        $numberOfAirbags = self::checkTypes($numberOfAirbags, $types);

        $this->numberOfAirbags = $numberOfAirbags;
    }

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

    /**
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getVehicleTransmission()
    {
        return $this->vehicleTransmission;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $vehicleTransmission
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleTransmission($vehicleTransmission)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        );

        $vehicleTransmission = self::checkTypes($vehicleTransmission, $types);

        $this->vehicleTransmission = $vehicleTransmission;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getMileageFromOdometer()
    {
        return $this->mileageFromOdometer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $mileageFromOdometer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMileageFromOdometer($mileageFromOdometer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $mileageFromOdometer = self::checkTypes($mileageFromOdometer, $types);

        $this->mileageFromOdometer = $mileageFromOdometer;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getVehicleSeatingCapacity()
    {
        return $this->vehicleSeatingCapacity;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $vehicleSeatingCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleSeatingCapacity($vehicleSeatingCapacity)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $vehicleSeatingCapacity = self::checkTypes($vehicleSeatingCapacity, $types);

        $this->vehicleSeatingCapacity = $vehicleSeatingCapacity;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DriveWheelConfigurationValue
     */
    public function getDriveWheelConfiguration()
    {
        return $this->driveWheelConfiguration;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DriveWheelConfigurationValue $driveWheelConfiguration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDriveWheelConfiguration($driveWheelConfiguration)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\DriveWheelConfigurationValue",
        );

        $driveWheelConfiguration = self::checkTypes($driveWheelConfiguration, $types);

        $this->driveWheelConfiguration = $driveWheelConfiguration;
    }

    /**
     * @return DateTime|null
     */
    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * @param DateTime|null $productionDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionDate($productionDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $productionDate = self::checkTypes($productionDate, $types);

        $this->productionDate = $productionDate;
    }

    /**
     * @return DateTime|null
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param DateTime|null $purchaseDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPurchaseDate($purchaseDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $purchaseDate = self::checkTypes($purchaseDate, $types);

        $this->purchaseDate = $purchaseDate;
    }

    /**
     * @return DateTime|null
     */
    public function getDateVehicleFirstRegistered()
    {
        return $this->dateVehicleFirstRegistered;
    }

    /**
     * @param DateTime|null $dateVehicleFirstRegistered
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateVehicleFirstRegistered($dateVehicleFirstRegistered)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $dateVehicleFirstRegistered = self::checkTypes($dateVehicleFirstRegistered, $types);

        $this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;
    }

    /**
     * @return DateTime|null
     */
    public function getVehicleModelDate()
    {
        return $this->vehicleModelDate;
    }

    /**
     * @param DateTime|null $vehicleModelDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleModelDate($vehicleModelDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $vehicleModelDate = self::checkTypes($vehicleModelDate, $types);

        $this->vehicleModelDate = $vehicleModelDate;
    }

    /**
     * @return string
     */
    public function getVehicleInteriorColor()
    {
        return $this->vehicleInteriorColor;
    }

    /**
     * @param string $vehicleInteriorColor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleInteriorColor($vehicleInteriorColor)
    {
        $types = array(
            "string",
        );

        $vehicleInteriorColor = self::checkTypes($vehicleInteriorColor, $types);

        $this->vehicleInteriorColor = $vehicleInteriorColor;
    }

    /**
     * @return string
     */
    public function getVehicleIdentificationNumber()
    {
        return $this->vehicleIdentificationNumber;
    }

    /**
     * @param string $vehicleIdentificationNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleIdentificationNumber($vehicleIdentificationNumber)
    {
        $types = array(
            "string",
        );

        $vehicleIdentificationNumber = self::checkTypes($vehicleIdentificationNumber, $types);

        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }

    /**
     * @return string
     */
    public function getVehicleConfiguration()
    {
        return $this->vehicleConfiguration;
    }

    /**
     * @param string $vehicleConfiguration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleConfiguration($vehicleConfiguration)
    {
        $types = array(
            "string",
        );

        $vehicleConfiguration = self::checkTypes($vehicleConfiguration, $types);

        $this->vehicleConfiguration = $vehicleConfiguration;
    }

}
