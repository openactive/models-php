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
            "exifData" => "exifData",
            "embeddedTextCaption" => "embeddedTextCaption",
            "caption" => "caption",
            "representativeOfPage" => "representativeOfPage",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * exif data for this object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $exifData;

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     *
     *
     * @var string
     */
    protected $embeddedTextCaption;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $caption;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     *
     * @var bool|null
     */
    protected $representativeOfPage;

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
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $caption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCaption($caption)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        ];

        $caption = self::checkTypes($caption, $types);

        $this->caption = $caption;
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

}
