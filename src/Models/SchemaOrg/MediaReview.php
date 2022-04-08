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
            "originalMediaContextDescription" => "originalMediaContextDescription",
            "mediaAuthenticityCategory" => "mediaAuthenticityCategory",
            "originalMediaLink" => "originalMediaLink",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Describes, in a [[MediaReview]] when dealing with [[DecontextualizedContent]], background information that can contribute to better interpretation of the [[MediaObject]].
     *
     *
     * @var string
     */
    protected $originalMediaContextDescription;

    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MediaManipulationRatingEnumeration|null
     */
    protected $mediaAuthenticityCategory;

    /**
     * Link to the page containing an original version of the content, or directly to an online copy of the original [[MediaObject]] content, e.g. video file.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject|\OpenActive\Models\SchemaOrg\WebPage
     */
    protected $originalMediaLink;

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
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject|\OpenActive\Models\SchemaOrg\WebPage
     */
    public function getOriginalMediaLink()
    {
        return $this->originalMediaLink;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject|\OpenActive\Models\SchemaOrg\WebPage $originalMediaLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginalMediaLink($originalMediaLink)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "\OpenActive\Models\SchemaOrg\WebPage",
        ];

        $originalMediaLink = self::checkTypes($originalMediaLink, $types);

        $this->originalMediaLink = $originalMediaLink;
    }

}
