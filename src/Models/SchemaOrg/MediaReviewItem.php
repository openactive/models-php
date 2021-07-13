<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MediaReviewItem extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MediaReviewItem";
    }

    public static function fieldList() {
        $fields = [
            "mediaItemAppearance" => "mediaItemAppearance",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * In the context of a [[MediaReview]], indicates specific media item(s) that are grouped using a [[MediaReviewItem]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $mediaItemAppearance;

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getMediaItemAppearance()
    {
        return $this->mediaItemAppearance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $mediaItemAppearance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMediaItemAppearance($mediaItemAppearance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $mediaItemAppearance = self::checkTypes($mediaItemAppearance, $types);

        $this->mediaItemAppearance = $mediaItemAppearance;
    }

}
