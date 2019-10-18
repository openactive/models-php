<?php

namespace OpenActive\Enums;

/**
 * The status of an Action.
 *
 */
class ActionStatusType
{
    const PotentialActionStatus = \OpenActive\Enums\OA\ActionStatusType\PotentialActionStatus::class;
    const FailedActionStatus = \OpenActive\Enums\OA\ActionStatusType\FailedActionStatus::class;
    const CompletedActionStatus = \OpenActive\Enums\OA\ActionStatusType\CompletedActionStatus::class;
    const ActiveActionStatus = \OpenActive\Enums\OA\ActionStatusType\ActiveActionStatus::class;
}
