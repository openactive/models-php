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
            "originalMediaLink" => "originalMediaLink",
            "mediaAuthenticityCategory" => "mediaAuthenticityCategory",
            "originalMediaContextDescription" => "originalMediaContextDescription",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Link to the page containing an original version of the content, or directly to an online copy of the original [[MediaObject]] content, e.g. video file.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebPage|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $originalMediaLink;

    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration|null
     */
    protected $mediaAuthenticityCategory;

    /**
     * Describes, in a [[MediaReview]] when dealing with [[DecontextualizedContent]], background information that can contribute to better interpretation of the [[MediaObject]].
     *
     *
     * @var string
     */
    protected $originalMediaContextDescription;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebPage|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getOriginalMediaLink()
    {
        return $this->originalMediaLink;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebPage|\OpenActive\Models\SchemaOrg\MediaObject $originalMediaLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginalMediaLink($originalMediaLink)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebPage",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        ];

        $originalMediaLink = self::checkTypes($originalMediaLink, $types);

        $this->originalMediaLink = $originalMediaLink;
    }

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
        $types = [
            "\OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration",
            "null",
        ];

        $mediaAuthenticityCategory = self::checkTypes($mediaAuthenticityCategory, $types);

        $this->mediaAuthenticityCategory = $mediaAuthenticityCategory;
    }

    /**
     * @return string
     */
    public function getOriginalMediaContextDescription()
    {
        return $this->originalMediaContextDescription;
    }

    /**
     * @param string $originalMediaContextDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginalMediaContextDescription($originalMediaContextDescription)
    {
        $types = [
            "string",
        ];

        $originalMediaContextDescription = self::checkTypes($originalMediaContextDescription, $types);

        $this->originalMediaContextDescription = $originalMediaContextDescription;
    }

}
