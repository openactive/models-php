<?php

namespace OpenActive\Enums;

/**
 * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
 *
 */
class MusicReleaseFormatType
{
    const DigitalAudioTapeFormat = \OpenActive\Enums\OA\MusicReleaseFormatType\DigitalAudioTapeFormat::class;
    const VinylFormat = \OpenActive\Enums\OA\MusicReleaseFormatType\VinylFormat::class;
    const CassetteFormat = \OpenActive\Enums\OA\MusicReleaseFormatType\CassetteFormat::class;
    const LaserDiscFormat = \OpenActive\Enums\OA\MusicReleaseFormatType\LaserDiscFormat::class;
    const DigitalFormat = \OpenActive\Enums\OA\MusicReleaseFormatType\DigitalFormat::class;
    const CDFormat = \OpenActive\Enums\OA\MusicReleaseFormatType\CDFormat::class;
    const DVDFormat = \OpenActive\Enums\OA\MusicReleaseFormatType\DVDFormat::class;
}
