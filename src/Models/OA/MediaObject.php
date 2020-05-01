<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [MediaObject](https://schema.org/MediaObject), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class MediaObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "MediaObject";
    }

    public static function fieldList() {
        $fields = [
            "contentUrl" => "contentUrl",
            "embedUrl" => "embedUrl",
            "height" => "height",
            "thumbnail" => "thumbnail",
            "url" => "url",
            "width" => "width",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     * ```json
     * "contentUrl": "https://example.com/media/stayin/getfit"
     * ```
     *
     * @var string
     */
    protected $contentUrl;

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag.
     *
     * ```json
     * "embedUrl": "https://example.com/media/stayin/getfit"
     * ```
     *
     * @var string
     */
    protected $embedUrl;

    /**
     * The height of the media in pixels.
     *
     * ```json
     * "height": 300
     * ```
     *
     * @var int|null
     */
    protected $height;

    /**
     * The URL for a thumbnail image for the media.
     *
     *
     * @var \OpenActive\Models\OA\ImageObject[]
     */
    protected $thumbnail;

    /**
     * The URL for the page containing the media.
     *
     * ```json
     * "url": "https://example.com/media/stayin/getfit"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * The width of the media in pixels.
     *
     * ```json
     * "width": 400
     * ```
     *
     * @var int|null
     */
    protected $width;

    /**
     * @return string
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * @param string $contentUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentUrl($contentUrl)
    {
        $types = array(
            "string",
        );

        $contentUrl = self::checkTypes($contentUrl, $types);

        $this->contentUrl = $contentUrl;
    }

    /**
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    /**
     * @param string $embedUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmbedUrl($embedUrl)
    {
        $types = array(
            "string",
        );

        $embedUrl = self::checkTypes($embedUrl, $types);

        $this->embedUrl = $embedUrl;
    }

    /**
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int|null $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = array(
            "int",
            "null",
        );

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

    /**
     * @return \OpenActive\Models\OA\ImageObject[]
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject[] $thumbnail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnail($thumbnail)
    {
        $types = array(
            "\OpenActive\Models\OA\ImageObject[]",
        );

        $thumbnail = self::checkTypes($thumbnail, $types);

        $this->thumbnail = $thumbnail;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

    /**
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = array(
            "int",
            "null",
        );

        $width = self::checkTypes($width, $types);

        $this->width = $width;
    }

}
