<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
 *
 */
class MusicReleaseFormatType
{
    const VinylFormat = \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType\VinylFormat::class;
    const DigitalAudioTapeFormat = \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType\DigitalAudioTapeFormat::class;
    const DVDFormat = \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType\DVDFormat::class;
    const LaserDiscFormat = \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType\LaserDiscFormat::class;
    const DigitalFormat = \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType\DigitalFormat::class;
    const CDFormat = \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType\CDFormat::class;
    const CassetteFormat = \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType\CassetteFormat::class;
}
