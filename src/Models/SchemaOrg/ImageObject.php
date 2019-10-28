<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ImageObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * exif data for this object.
     *
     *
     * @var PropertyValue|string
     */
    protected $exifData;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     *
     * @var bool|null
     */
    protected $representativeOfPage;

    /**
     * Thumbnail image for an image or video.
     *
     *
     * @var ImageObject
     */
    protected $thumbnail;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="https://schema.org/encodingFormat">encodingFormat</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $caption;

    /**
     * @return PropertyValue|string
     */
    public function getExifData()
    {
        return $this->exifData;
    }

    /**
     * @param PropertyValue|string $exifData
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExifData($exifData)
    {
        $types = array(
            "PropertyValue",
            "string",
        );

        $exifData = self::checkTypes($exifData, $types);

        $this->exifData = $exifData;
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
        $types = array(
            "bool",
            "null",
        );

        $representativeOfPage = self::checkTypes($representativeOfPage, $types);

        $this->representativeOfPage = $representativeOfPage;
    }

    /**
     * @return ImageObject
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param ImageObject $thumbnail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnail($thumbnail)
    {
        $types = array(
            "ImageObject",
        );

        $thumbnail = self::checkTypes($thumbnail, $types);

        $this->thumbnail = $thumbnail;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        );

        $caption = self::checkTypes($caption, $types);

        $this->caption = $caption;
    }

}
