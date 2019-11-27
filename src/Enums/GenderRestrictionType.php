<?php

namespace OpenActive\Enums;

/**
 * Enumerated types for gender restrictions that are applied to Events
 *
 */
class GenderRestrictionType
{
    const NoRestriction = \OpenActive\Enums\GenderRestrictionType\NoRestriction::class;
    const MaleOnly = \OpenActive\Enums\GenderRestrictionType\MaleOnly::class;
    const FemaleOnly = \OpenActive\Enums\GenderRestrictionType\FemaleOnly::class;
}
