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
            "representativeOfPage" => "representativeOfPage",
            "thumbnail" => "thumbnail",
            "caption" => "caption",
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
     * Indicates whether this image is representative of the content of the page.
     *
     *
     * @var null|bool
     */
    protected $representativeOfPage;

    /**
     * Thumbnail image for an image or video.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $thumbnail;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="https://schema.org/encodingFormat">encodingFormat</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $caption;

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        );

        $exifData = self::checkTypes($exifData, $types);

        $this->exifData = $exifData;
    }

    /**
     * @return null|bool
     */
    public function getRepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    /**
     * @param null|bool $representativeOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepresentativeOfPage($representativeOfPage)
    {
        $types = array(
            "null",
            "bool",
        );

        $representativeOfPage = self::checkTypes($representativeOfPage, $types);

        $this->representativeOfPage = $representativeOfPage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject $thumbnail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnail($thumbnail)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ImageObject",
        );

        $thumbnail = self::checkTypes($thumbnail, $types);

        $this->thumbnail = $thumbnail;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $caption = self::checkTypes($caption, $types);

        $this->caption = $caption;
    }

}
