<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://pending.schema.org/VirtualLocation.
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
            "accessCode" => "accessCode",
            "accessId" => "accessId",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The name of the service that is providing remote access to the Opportunity.
     *
     * ```json
     * "name": "Zoom"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * A plain text description of the live stream, including any instructions to join. This description must not include HTML or other markup.
     *
     * ```json
     * "description": "Please log into Zoom a few minutes before the event, and mute your mic while you wait for the session to start."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * The password or pin required to access the `VirtualLocation` from any device, without requiring the URL, e.g. the meeting password.
     *
     * ```json
     * "accessCode": "211277"
     * ```
     *
     * @var string
     */
    protected $accessCode;

    /**
     * The identifier required to access the `VirtualLocation` from any device, without requiring the URL, e.g. the meeting ID.
     *
     * ```json
     * "accessId": "123456789"
     * ```
     *
     * @var string
     */
    protected $accessId;

    /**
     * The URL that enables remote access to the Opportunity, which should include encoded access credentials where possible.
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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * @param string $accessCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessCode($accessCode)
    {
        $types = [
            "string",
        ];

        $accessCode = self::checkTypes($accessCode, $types);

        $this->accessCode = $accessCode;
    }

    /**
     * @return string
     */
    public function getAccessId()
    {
        return $this->accessId;
    }

    /**
     * @param string $accessId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessId($accessId)
    {
        $types = [
            "string",
        ];

        $accessId = self::checkTypes($accessId, $types);

        $this->accessId = $accessId;
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
