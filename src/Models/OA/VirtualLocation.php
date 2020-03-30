<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [VirtualLocation](https://pending.schema.org/VirtualLocation), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class VirtualLocation extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "VirtualLocation";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "description" => "description",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the livestream.
     *
     * ```json
     * "name": "Zoom Room"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A free text description of the livestream, including any instructions to join.
     *
     * ```json
     * "description": "Please log into Zoom a few minutes before the event, and mute your mic while you wait for the session to start."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * The URL for the livestream.
     *
     * ```json
     * "url": "https://zoom.us/room/3fbCs0GVjgQ"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
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
