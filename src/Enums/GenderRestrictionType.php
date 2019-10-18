<?php

namespace OpenActive\Enums;

/**
 * Enumerated types for gender restrictions that are applied to Events
 *
 */
class GenderRestrictionType
{
    const NoRestriction = \OpenActive\Enums\OA\GenderRestrictionType\NoRestriction::class;
    const MaleOnly = \OpenActive\Enums\OA\GenderRestrictionType\MaleOnly::class;
    const FemaleOnly = \OpenActive\Enums\OA\GenderRestrictionType\FemaleOnly::class;
}
