<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ImageObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ImageObject";
    }

    public static function fieldList() {
        $fields = [
            "thumbnail" => "thumbnail",
            "embeddedTextCaption" => "embeddedTextCaption",
            "representativeOfPage" => "representativeOfPage",
            "exifData" => "exifData",
            "caption" => "caption",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Thumbnail image for an image or video.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $thumbnail;

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     *
     *
     * @var string
     */
    protected $embeddedTextCaption;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     *
     * @var bool|null
     */
    protected $representativeOfPage;

    /**
     * exif data for this object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $exifData;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $caption;

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $thumbnail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnail($thumbnail)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        ];

        $thumbnail = self::checkTypes($thumbnail, $types);

        $this->thumbnail = $thumbnail;
    }

    /**
     * @return string
     */
    public function getEmbeddedTextCaption()
    {
        return $this->embeddedTextCaption;
    }

    /**
     * @param string $embeddedTextCaption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmbeddedTextCaption($embeddedTextCaption)
    {
        $types = [
            "string",
        ];

        $embeddedTextCaption = self::checkTypes($embeddedTextCaption, $types);

        $this->embeddedTextCaption = $embeddedTextCaption;
    }

    /**
     * @return bool|null
     */
    public function getRepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    /**
     * @param bool|null $representativeOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepresentativeOfPage($representativeOfPage)
    {
        $types = [
            "bool",
            "null",
        ];

        $representativeOfPage = self::checkTypes($representativeOfPage, $types);

        $this->representativeOfPage = $representativeOfPage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getExifData()
    {
        return $this->exifData;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $exifData
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExifData($exifData)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $exifData = self::checkTypes($exifData, $types);

        $this->exifData = $exifData;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $caption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCaption($caption)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $caption = self::checkTypes($caption, $types);

        $this->caption = $caption;
    }

}
