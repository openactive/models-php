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
            "meetsEmissionStandard" => "meetsEmissionStandard",
            "knownVehicleDamages" => "knownVehicleDamages",
            "numberOfDoors" => "numberOfDoors",
            "vehicleSpecialUsage" => "vehicleSpecialUsage",
            "productionDate" => "productionDate",
            "mileageFromOdometer" => "mileageFromOdometer",
            "vehicleIdentificationNumber" => "vehicleIdentificationNumber",
            "numberOfAxles" => "numberOfAxles",
            "fuelConsumption" => "fuelConsumption",
            "vehicleInteriorColor" => "vehicleInteriorColor",
            "seatingCapacity" => "seatingCapacity",
            "cargoVolume" => "cargoVolume",
            "fuelEfficiency" => "fuelEfficiency",
            "driveWheelConfiguration" => "driveWheelConfiguration",
            "wheelbase" => "wheelbase",
            "fuelCapacity" => "fuelCapacity",
            "vehicleConfiguration" => "vehicleConfiguration",
            "payload" => "payload",
            "fuelType" => "fuelType",
            "vehicleInteriorType" => "vehicleInteriorType",
            "speed" => "speed",
            "emissionsCO2" => "emissionsCO2",
            "bodyType" => "bodyType",
            "trailerWeight" => "trailerWeight",
            "numberOfForwardGears" => "numberOfForwardGears",
            "numberOfAirbags" => "numberOfAirbags",
            "modelDate" => "modelDate",
            "dateVehicleFirstRegistered" => "dateVehicleFirstRegistered",
            "steeringPosition" => "steeringPosition",
            "numberOfPreviousOwners" => "numberOfPreviousOwners",
            "accelerationTime" => "accelerationTime",
            "weightTotal" => "weightTotal",
            "vehicleTransmission" => "vehicleTransmission",
            "vehicleEngine" => "vehicleEngine",
            "callSign" => "callSign",
            "tongueWeight" => "tongueWeight",
            "vehicleSeatingCapacity" => "vehicleSeatingCapacity",
            "vehicleModelDate" => "vehicleModelDate",
            "purchaseDate" => "purchaseDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates that the vehicle meets the respective emission standard.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    protected $meetsEmissionStandard;

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     *
     * @var string
     */
    protected $knownVehicleDamages;

    /**
     * The number of doors.\n\nTypical unit code(s): C62
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $numberOfDoors;

    /**
     * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\CarUsageType|string|null
     */
    protected $vehicleSpecialUsage;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     *
     * @var Date|null
     */
    protected $productionDate;

    /**
     * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.\n\nTypical unit code(s): KMT for kilometers, SMI for statute miles
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $mileageFromOdometer;

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
     *
     *
     * @var string
     */
    protected $vehicleIdentificationNumber;

    /**
     * The number of axles.\n\nTypical unit code(s): C62
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $numberOfAxles;

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).\n\n* Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use [[unitText]] to indicate the unit of measurement, e.g. L/100 km.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value for the fuel consumption to another value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $fuelConsumption;

    /**
     * The color or color combination of the interior of the vehicle.
     *
     *
     * @var string
     */
    protected $vehicleInteriorColor;

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons 
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $seatingCapacity;

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.\n\nTypical unit code(s): LTR for liters, FTQ for cubic foot/feet\n\nNote: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $cargoVolume;

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).\n\n* Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use [[unitText]] to indicate the unit of measurement, e.g. mpg or km/L.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value for the fuel economy to another value.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $fuelEfficiency;

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DriveWheelConfigurationValue
     */
    protected $driveWheelConfiguration;

    /**
     * The distance between the centers of the front and rear wheels.\n\nTypical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $wheelbase;

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for storage, this should indicate the total of all storage of the same type.\n\nTypical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $fuelCapacity;

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     *
     * @var string
     */
    protected $vehicleConfiguration;

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of [[weight]] and [[payload]]\n* Note 2: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 3: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $payload;

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    protected $fuelType;

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
     *
     *
     * @var string
     */
    protected $vehicleInteriorType;

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range (indicated by [[maxValue]] should be the maximum speed achievable under regular conditions.\n\nTypical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for knot\n\n*Note 1: Use [[minValue]] and [[maxValue]] to indicate the range. Typically, the minimal value is zero.\n* Note 2: There are many different ways of measuring the speed range. You can link to information about how the given value has been determined using the [[valueReference]] property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $speed;

    /**
     * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value, since there is no UN/CEFACT Common Code for "g/km".
     *
     *
     * @var Number|null
     */
    protected $emissionsCO2;

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $bodyType;

    /**
     * The permitted weight of a trailer attached to the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $trailerWeight;

    /**
     * The total number of forward gears available for the transmission system of the vehicle.\n\nTypical unit code(s): C62
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $numberOfForwardGears;

    /**
     * The number or type of airbags in the vehicle.
     *
     *
     * @var string|Number|null
     */
    protected $numberOfAirbags;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     *
     *
     * @var Date|null
     */
    protected $modelDate;

    /**
     * The date of the first registration of the vehicle with the respective public authorities.
     *
     *
     * @var Date|null
     */
    protected $dateVehicleFirstRegistered;

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SteeringPositionValue|string
     */
    protected $steeringPosition;

    /**
     * The number of owners of the vehicle, including the current one.\n\nTypical unit code(s): C62
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $numberOfPreviousOwners;

    /**
     * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.\n\nTypical unit code(s): SEC for seconds\n\n* Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in the [[name]] of the [[QuantitativeValue]], or use [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100 km/h to specify the reference speeds.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $accelerationTime;

    /**
     * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $weightTotal;

    /**
     * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $vehicleTransmission;

    /**
     * Information about the engine or engines of the vehicle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EngineSpecification|string
     */
    protected $vehicleEngine;

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     *
     * @var string
     */
    protected $callSign;

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $tongueWeight;

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $vehicleSeatingCapacity;

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     *
     *
     * @var Date|null
     */
    protected $vehicleModelDate;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     *
     * @var Date|null
     */
    protected $purchaseDate;

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    public function getMeetsEmissionStandard()
    {
        return $this->meetsEmissionStandard;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null $meetsEmissionStandard
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeetsEmissionStandard($meetsEmissionStandard)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "null",
        ];

        $meetsEmissionStandard = self::checkTypes($meetsEmissionStandard, $types);

        $this->meetsEmissionStandard = $meetsEmissionStandard;
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
        $types = [
            "string",
        ];

        $knownVehicleDamages = self::checkTypes($knownVehicleDamages, $types);

        $this->knownVehicleDamages = $knownVehicleDamages;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $numberOfDoors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfDoors($numberOfDoors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $numberOfDoors = self::checkTypes($numberOfDoors, $types);

        $this->numberOfDoors = $numberOfDoors;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\CarUsageType|string|null
     */
    public function getVehicleSpecialUsage()
    {
        return $this->vehicleSpecialUsage;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\CarUsageType|string|null $vehicleSpecialUsage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleSpecialUsage($vehicleSpecialUsage)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\CarUsageType",
            "string",
            "null",
        ];

        $vehicleSpecialUsage = self::checkTypes($vehicleSpecialUsage, $types);

        $this->vehicleSpecialUsage = $vehicleSpecialUsage;
    }

    /**
     * @return Date|null
     */
    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * @param Date|null $productionDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionDate($productionDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $productionDate = self::checkTypes($productionDate, $types);

        $this->productionDate = $productionDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getMileageFromOdometer()
    {
        return $this->mileageFromOdometer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $mileageFromOdometer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMileageFromOdometer($mileageFromOdometer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $mileageFromOdometer = self::checkTypes($mileageFromOdometer, $types);

        $this->mileageFromOdometer = $mileageFromOdometer;
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
        $types = [
            "string",
        ];

        $vehicleIdentificationNumber = self::checkTypes($vehicleIdentificationNumber, $types);

        $this->vehicleIdentificationNumber = $vehicleIdentificationNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getNumberOfAxles()
    {
        return $this->numberOfAxles;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $numberOfAxles
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAxles($numberOfAxles)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $numberOfAxles = self::checkTypes($numberOfAxles, $types);

        $this->numberOfAxles = $numberOfAxles;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $fuelConsumption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelConsumption($fuelConsumption)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $fuelConsumption = self::checkTypes($fuelConsumption, $types);

        $this->fuelConsumption = $fuelConsumption;
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
        $types = [
            "string",
        ];

        $vehicleInteriorColor = self::checkTypes($vehicleInteriorColor, $types);

        $this->vehicleInteriorColor = $vehicleInteriorColor;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getSeatingCapacity()
    {
        return $this->seatingCapacity;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $seatingCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeatingCapacity($seatingCapacity)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $seatingCapacity = self::checkTypes($seatingCapacity, $types);

        $this->seatingCapacity = $seatingCapacity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getCargoVolume()
    {
        return $this->cargoVolume;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $cargoVolume
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCargoVolume($cargoVolume)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $cargoVolume = self::checkTypes($cargoVolume, $types);

        $this->cargoVolume = $cargoVolume;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getFuelEfficiency()
    {
        return $this->fuelEfficiency;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $fuelEfficiency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelEfficiency($fuelEfficiency)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $fuelEfficiency = self::checkTypes($fuelEfficiency, $types);

        $this->fuelEfficiency = $fuelEfficiency;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DriveWheelConfigurationValue",
        ];

        $driveWheelConfiguration = self::checkTypes($driveWheelConfiguration, $types);

        $this->driveWheelConfiguration = $driveWheelConfiguration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWheelbase()
    {
        return $this->wheelbase;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $wheelbase
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWheelbase($wheelbase)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $wheelbase = self::checkTypes($wheelbase, $types);

        $this->wheelbase = $wheelbase;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getFuelCapacity()
    {
        return $this->fuelCapacity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $fuelCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFuelCapacity($fuelCapacity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $fuelCapacity = self::checkTypes($fuelCapacity, $types);

        $this->fuelCapacity = $fuelCapacity;
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
        $types = [
            "string",
        ];

        $vehicleConfiguration = self::checkTypes($vehicleConfiguration, $types);

        $this->vehicleConfiguration = $vehicleConfiguration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $payload
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPayload($payload)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $payload = self::checkTypes($payload, $types);

        $this->payload = $payload;
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
        $types = [
            "string",
        ];

        $vehicleInteriorType = self::checkTypes($vehicleInteriorType, $types);

        $this->vehicleInteriorType = $vehicleInteriorType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $speed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpeed($speed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $speed = self::checkTypes($speed, $types);

        $this->speed = $speed;
    }

    /**
     * @return Number|null
     */
    public function getEmissionsCO2()
    {
        return $this->emissionsCO2;
    }

    /**
     * @param Number|null $emissionsCO2
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmissionsCO2($emissionsCO2)
    {
        $types = [
            "Number",
            "null",
        ];

        $emissionsCO2 = self::checkTypes($emissionsCO2, $types);

        $this->emissionsCO2 = $emissionsCO2;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $bodyType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBodyType($bodyType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        ];

        $bodyType = self::checkTypes($bodyType, $types);

        $this->bodyType = $bodyType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getTrailerWeight()
    {
        return $this->trailerWeight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $trailerWeight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrailerWeight($trailerWeight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $trailerWeight = self::checkTypes($trailerWeight, $types);

        $this->trailerWeight = $trailerWeight;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getNumberOfForwardGears()
    {
        return $this->numberOfForwardGears;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $numberOfForwardGears
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfForwardGears($numberOfForwardGears)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $numberOfForwardGears = self::checkTypes($numberOfForwardGears, $types);

        $this->numberOfForwardGears = $numberOfForwardGears;
    }

    /**
     * @return string|Number|null
     */
    public function getNumberOfAirbags()
    {
        return $this->numberOfAirbags;
    }

    /**
     * @param string|Number|null $numberOfAirbags
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfAirbags($numberOfAirbags)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $numberOfAirbags = self::checkTypes($numberOfAirbags, $types);

        $this->numberOfAirbags = $numberOfAirbags;
    }

    /**
     * @return Date|null
     */
    public function getModelDate()
    {
        return $this->modelDate;
    }

    /**
     * @param Date|null $modelDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setModelDate($modelDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $modelDate = self::checkTypes($modelDate, $types);

        $this->modelDate = $modelDate;
    }

    /**
     * @return Date|null
     */
    public function getDateVehicleFirstRegistered()
    {
        return $this->dateVehicleFirstRegistered;
    }

    /**
     * @param Date|null $dateVehicleFirstRegistered
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateVehicleFirstRegistered($dateVehicleFirstRegistered)
    {
        $types = [
            "Date",
            "null",
        ];

        $dateVehicleFirstRegistered = self::checkTypes($dateVehicleFirstRegistered, $types);

        $this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SteeringPositionValue|string
     */
    public function getSteeringPosition()
    {
        return $this->steeringPosition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SteeringPositionValue|string $steeringPosition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteeringPosition($steeringPosition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SteeringPositionValue",
            "string",
        ];

        $steeringPosition = self::checkTypes($steeringPosition, $types);

        $this->steeringPosition = $steeringPosition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getNumberOfPreviousOwners()
    {
        return $this->numberOfPreviousOwners;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $numberOfPreviousOwners
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPreviousOwners($numberOfPreviousOwners)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $numberOfPreviousOwners = self::checkTypes($numberOfPreviousOwners, $types);

        $this->numberOfPreviousOwners = $numberOfPreviousOwners;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getAccelerationTime()
    {
        return $this->accelerationTime;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $accelerationTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccelerationTime($accelerationTime)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $accelerationTime = self::checkTypes($accelerationTime, $types);

        $this->accelerationTime = $accelerationTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWeightTotal()
    {
        return $this->weightTotal;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $weightTotal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWeightTotal($weightTotal)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $weightTotal = self::checkTypes($weightTotal, $types);

        $this->weightTotal = $weightTotal;
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
        $types = [
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        ];

        $vehicleTransmission = self::checkTypes($vehicleTransmission, $types);

        $this->vehicleTransmission = $vehicleTransmission;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EngineSpecification|string
     */
    public function getVehicleEngine()
    {
        return $this->vehicleEngine;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EngineSpecification|string $vehicleEngine
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleEngine($vehicleEngine)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EngineSpecification",
            "string",
        ];

        $vehicleEngine = self::checkTypes($vehicleEngine, $types);

        $this->vehicleEngine = $vehicleEngine;
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
        $types = [
            "string",
        ];

        $callSign = self::checkTypes($callSign, $types);

        $this->callSign = $callSign;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getTongueWeight()
    {
        return $this->tongueWeight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $tongueWeight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTongueWeight($tongueWeight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $tongueWeight = self::checkTypes($tongueWeight, $types);

        $this->tongueWeight = $tongueWeight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getVehicleSeatingCapacity()
    {
        return $this->vehicleSeatingCapacity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $vehicleSeatingCapacity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleSeatingCapacity($vehicleSeatingCapacity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $vehicleSeatingCapacity = self::checkTypes($vehicleSeatingCapacity, $types);

        $this->vehicleSeatingCapacity = $vehicleSeatingCapacity;
    }

    /**
     * @return Date|null
     */
    public function getVehicleModelDate()
    {
        return $this->vehicleModelDate;
    }

    /**
     * @param Date|null $vehicleModelDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVehicleModelDate($vehicleModelDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $vehicleModelDate = self::checkTypes($vehicleModelDate, $types);

        $this->vehicleModelDate = $vehicleModelDate;
    }

    /**
     * @return Date|null
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param Date|null $purchaseDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPurchaseDate($purchaseDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $purchaseDate = self::checkTypes($purchaseDate, $types);

        $this->purchaseDate = $purchaseDate;
    }

}
