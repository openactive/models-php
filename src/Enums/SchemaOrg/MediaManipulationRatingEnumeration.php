<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 *  Codes for use with the [[mediaAuthenticityCategory]] property, indicating the authenticity of a media object (in the context of how it was published or shared). In general these codes are not mutually exclusive, although some combinations (such as 'original' versus 'transformed', 'edited' and 'staged') would be contradictory if applied in the same [[MediaReview]]. Note that the application of these codes is with regard to a piece of media shared or published in a particular context.
 *
 */
class MediaManipulationRatingEnumeration
{
    const OriginalMediaContent = \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration\OriginalMediaContent::class;
    const TransformedContent = \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration\TransformedContent::class;
    const StagedContent = \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration\StagedContent::class;
    const EditedOrCroppedContent = \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration\EditedOrCroppedContent::class;
    const DecontextualizedContent = \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration\DecontextualizedContent::class;
    const SatireOrParodyContent = \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration\SatireOrParodyContent::class;
}
