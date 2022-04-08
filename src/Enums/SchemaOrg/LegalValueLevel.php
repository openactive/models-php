<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * A list of possible levels for the legal validity of a legislation.
 *
 */
class LegalValueLevel
{
    const DefinitiveLegalValue = \OpenActive\Enums\SchemaOrg\LegalValueLevel\DefinitiveLegalValue::class;
    const UnofficialLegalValue = \OpenActive\Enums\SchemaOrg\LegalValueLevel\UnofficialLegalValue::class;
    const OfficialLegalValue = \OpenActive\Enums\SchemaOrg\LegalValueLevel\OfficialLegalValue::class;
    const AuthoritativeLegalValue = \OpenActive\Enums\SchemaOrg\LegalValueLevel\AuthoritativeLegalValue::class;
}
