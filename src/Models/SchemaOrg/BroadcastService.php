<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BroadcastService extends \OpenActive\Models\SchemaOrg\Service
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BroadcastService";
    }

    public static function fieldList() {
        $fields = [
            "broadcastFrequency" => "broadcastFrequency",
            "inLanguage" => "inLanguage",
            "parentService" => "parentService",
            "broadcastTimezone" => "broadcastTimezone",
            "hasBroadcastChannel" => "hasBroadcastChannel",
            "area" => "area",
            "broadcastDisplayName" => "broadcastDisplayName",
            "broadcastAffiliateOf" => "broadcastAffiliateOf",
            "broadcaster" => "broadcaster",
            "videoFormat" => "videoFormat",
            "callSign" => "callSign",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification
     */
    protected $broadcastFrequency;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $inLanguage;

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastService|string
     */
    protected $parentService;

    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for which the service bases its broadcasts.
     *
     *
     * @var string
     */
    protected $broadcastTimezone;

    /**
     * A broadcast channel of a broadcast service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastChannel|string
     */
    protected $hasBroadcastChannel;

    /**
     * The area within which users can expect to reach the broadcast service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $area;

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the network name.
     *
     *
     * @var string
     */
    protected $broadcastDisplayName;

    /**
     * The media network(s) whose content is broadcast on this station.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $broadcastAffiliateOf;

    /**
     * The organization owning or operating the broadcast service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $broadcaster;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     *
     * @var string
     */
    protected $videoFormat;

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     *
     * @var string
     */
    protected $callSign;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification
     */
    public function getBroadcastFrequency()
    {
        return $this->broadcastFrequency;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification $broadcastFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastFrequency($broadcastFrequency)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification",
        ];

        $broadcastFrequency = self::checkTypes($broadcastFrequency, $types);

        $this->broadcastFrequency = $broadcastFrequency;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BroadcastService|string
     */
    public function getParentService()
    {
        return $this->parentService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastService|string $parentService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParentService($parentService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BroadcastService",
            "string",
        ];

        $parentService = self::checkTypes($parentService, $types);

        $this->parentService = $parentService;
    }

    /**
     * @return string
     */
    public function getBroadcastTimezone()
    {
        return $this->broadcastTimezone;
    }

    /**
     * @param string $broadcastTimezone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastTimezone($broadcastTimezone)
    {
        $types = [
            "string",
        ];

        $broadcastTimezone = self::checkTypes($broadcastTimezone, $types);

        $this->broadcastTimezone = $broadcastTimezone;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BroadcastChannel|string
     */
    public function getHasBroadcastChannel()
    {
        return $this->hasBroadcastChannel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastChannel|string $hasBroadcastChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasBroadcastChannel($hasBroadcastChannel)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BroadcastChannel",
            "string",
        ];

        $hasBroadcastChannel = self::checkTypes($hasBroadcastChannel, $types);

        $this->hasBroadcastChannel = $hasBroadcastChannel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $area
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArea($area)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $area = self::checkTypes($area, $types);

        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getBroadcastDisplayName()
    {
        return $this->broadcastDisplayName;
    }

    /**
     * @param string $broadcastDisplayName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastDisplayName($broadcastDisplayName)
    {
        $types = [
            "string",
        ];

        $broadcastDisplayName = self::checkTypes($broadcastDisplayName, $types);

        $this->broadcastDisplayName = $broadcastDisplayName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBroadcastAffiliateOf()
    {
        return $this->broadcastAffiliateOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $broadcastAffiliateOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastAffiliateOf($broadcastAffiliateOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $broadcastAffiliateOf = self::checkTypes($broadcastAffiliateOf, $types);

        $this->broadcastAffiliateOf = $broadcastAffiliateOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBroadcaster()
    {
        return $this->broadcaster;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $broadcaster
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcaster($broadcaster)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $broadcaster = self::checkTypes($broadcaster, $types);

        $this->broadcaster = $broadcaster;
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
     * @return string
     */
    public function getCallSign()
    {
        return $this->callSign;
    }

    /**
     * @param string $callSign
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCallSign($callSign)
    {
        $types = [
            "string",
        ];

        $callSign = self::checkTypes($callSign, $types);

        $this->callSign = $callSign;
    }

}
