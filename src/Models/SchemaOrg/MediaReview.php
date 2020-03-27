<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MediaReview extends \OpenActive\Models\SchemaOrg\Review
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MediaReview";
    }

    public static function fieldList() {
        $fields = [
            "mediaAuthenticityCategory" => "mediaAuthenticityCategory",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration|null
     */
    protected $mediaAuthenticityCategory;

    /**
     * @return \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration|null
     */
    public function getMediaAuthenticityCategory()
    {
        return $this->mediaAuthenticityCategory;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration|null $mediaAuthenticityCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMediaAuthenticityCategory($mediaAuthenticityCategory)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration",
            "null",
        );

        $mediaAuthenticityCategory = self::checkTypes($mediaAuthenticityCategory, $types);

        $this->mediaAuthenticityCategory = $mediaAuthenticityCategory;
    }

}
