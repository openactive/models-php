<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [ImageObject](https://schema.org/ImageObject), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class ImageObject extends \OpenActive\Models\SchemaOrg\ImageObject
{
    /**
     * The URL for a thumbnail image for an image.
     *
     *
     * @var ImageObject[]
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
     * @return ImageObject[]
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param ImageObject[] $thumbnail
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setThumbnail($thumbnail)
    {
        $types = array(
            "ImageObject[]",
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
     * @throws \Exception If the provided argument is not of a supported type.
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
