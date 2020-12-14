<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BroadcastEvent extends \OpenActive\Models\SchemaOrg\PublicationEvent
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BroadcastEvent";
    }

    public static function fieldList() {
        $fields = [
            "subtitleLanguage" => "subtitleLanguage",
            "videoFormat" => "videoFormat",
            "isLiveBroadcast" => "isLiveBroadcast",
            "broadcastOfEvent" => "broadcastOfEvent",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $subtitleLanguage;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     *
     * @var string
     */
    protected $videoFormat;

    /**
     * True is the broadcast is of a live event.
     *
     *
     * @var bool|null
     */
    protected $isLiveBroadcast;

    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $broadcastOfEvent;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getSubtitleLanguage()
    {
        return $this->subtitleLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $subtitleLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubtitleLanguage($subtitleLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $subtitleLanguage = self::checkTypes($subtitleLanguage, $types);

        $this->subtitleLanguage = $subtitleLanguage;
    }

    /**
     * @return string
     */
    public function getVideoFormat()
    {
        return $this->videoFormat;
    }

    /**
     * @param string $videoFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideoFormat($videoFormat)
    {
        $types = [
            "string",
        ];

        $videoFormat = self::checkTypes($videoFormat, $types);

        $this->videoFormat = $videoFormat;
    }

    /**
     * @return bool|null
     */
    public function getIsLiveBroadcast()
    {
        return $this->isLiveBroadcast;
    }

    /**
     * @param bool|null $isLiveBroadcast
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsLiveBroadcast($isLiveBroadcast)
    {
        $types = [
            "bool",
            "null",
        ];

        $isLiveBroadcast = self::checkTypes($isLiveBroadcast, $types);

        $this->isLiveBroadcast = $isLiveBroadcast;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getBroadcastOfEvent()
    {
        return $this->broadcastOfEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $broadcastOfEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastOfEvent($broadcastOfEvent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
        ];

        $broadcastOfEvent = self::checkTypes($broadcastOfEvent, $types);

        $this->broadcastOfEvent = $broadcastOfEvent;
    }

}
