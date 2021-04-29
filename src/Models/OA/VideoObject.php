<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/VideoObject, which means that any of this type's properties within schema.org may also be used.
 *
 */
class VideoObject extends \OpenActive\Models\OA\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "VideoObject";
    }

    public static function fieldList() {
        $fields = [
            "thumbnail" => "thumbnail",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The URL for a thumbnail image for the video.
     *
     *
     * @var \OpenActive\Models\OA\ImageObject[]
     */
    protected $thumbnail;

    /**
     * The URL for the video.
     *
     * ```json
     * "url": "https://www.youtube.com/watch?v=3fbCs0GVjgQ"
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
        $types = [
            "\OpenActive\Models\OA\ImageObject[]",
        ];

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
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
