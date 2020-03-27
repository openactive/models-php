<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [ImageObject](https://schema.org/ImageObject), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class ImageObject extends \OpenActive\Models\OA\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "ImageObject";
    }

    public static function fieldList() {
        $fields = [
            "contentUrl" => "contentUrl",
            "embedUrl" => "embedUrl",
            "thumbnail" => "thumbnail",
            "url" => "url",
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
     * @deprecated This property is disinherited in this type, and must not be used.
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
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $embedUrl;

    /**
     * The URL for a thumbnail image for an image.
     *
     *
     * @var \OpenActive\Models\OA\ImageObject[]
     */
    protected $thumbnail;

    /**
     * The URL for the display resolution image.
     *
     * ```json
     * "url": "http://example.com/static/image/speedball_large.jpg"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * @return string
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * @param string $contentUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
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
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    /**
     * @param string $embedUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
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

}
