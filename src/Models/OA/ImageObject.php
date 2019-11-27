<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [ImageObject](https://schema.org/ImageObject), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class ImageObject extends \OpenActive\Models\SchemaOrg\ImageObject
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
            "thumbnail" => "thumbnail",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
