<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * A value indicating a special usage of a car, e.g. commercial rental, driving school, or as a taxi.
 *
 */
class CarUsageType
{
    const TaxiVehicleUsage = \OpenActive\Enums\SchemaOrg\CarUsageType\TaxiVehicleUsage::class;
    const RentalVehicleUsage = \OpenActive\Enums\SchemaOrg\CarUsageType\RentalVehicleUsage::class;
    const DrivingSchoolVehicleUsage = \OpenActive\Enums\SchemaOrg\CarUsageType\DrivingSchoolVehicleUsage::class;
}
