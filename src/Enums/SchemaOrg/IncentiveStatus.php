<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates a status for an incentive, such as whether it is active.
 *
 */
class IncentiveStatus
{
    const IncentiveStatusActive = \OpenActive\Enums\SchemaOrg\IncentiveStatus\IncentiveStatusActive::class;
    const IncentiveStatusInDevelopment = \OpenActive\Enums\SchemaOrg\IncentiveStatus\IncentiveStatusInDevelopment::class;
    const IncentiveStatusOnHold = \OpenActive\Enums\SchemaOrg\IncentiveStatus\IncentiveStatusOnHold::class;
    const IncentiveStatusRetired = \OpenActive\Enums\SchemaOrg\IncentiveStatus\IncentiveStatusRetired::class;
}
