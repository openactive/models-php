<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * The status of an Action.
 *
 */
class ActionStatusType
{
    const PotentialActionStatus = \OpenActive\Enums\SchemaOrg\ActionStatusType\PotentialActionStatus::class;
    const FailedActionStatus = \OpenActive\Enums\SchemaOrg\ActionStatusType\FailedActionStatus::class;
    const CompletedActionStatus = \OpenActive\Enums\SchemaOrg\ActionStatusType\CompletedActionStatus::class;
    const ActiveActionStatus = \OpenActive\Enums\SchemaOrg\ActionStatusType\ActiveActionStatus::class;
}
