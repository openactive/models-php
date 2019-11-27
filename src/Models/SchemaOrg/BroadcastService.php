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
            "callSign" => "callSign",
            "broadcaster" => "broadcaster",
            "hasBroadcastChannel" => "hasBroadcastChannel",
            "area" => "area",
            "broadcastDisplayName" => "broadcastDisplayName",
            "parentService" => "parentService",
            "broadcastAffiliateOf" => "broadcastAffiliateOf",
            "videoFormat" => "videoFormat",
            "broadcastTimezone" => "broadcastTimezone",
            "broadcastFrequency" => "broadcastFrequency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A <a href="https://en.wikipedia.org/wiki/Call_sign">callsign</a>, as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     *
     * @var string
     */
    protected $callSign;

    /**
     * The organization owning or operating the broadcast service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $broadcaster;

    /**
     * A broadcast channel of a broadcast service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastChannel
     */
    protected $hasBroadcastChannel;

    /**
     * The area within which users can expect to reach the broadcast service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
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
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastService
     */
    protected $parentService;

    /**
     * The media network(s) whose content is broadcast on this station.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $broadcastAffiliateOf;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     *
     * @var string
     */
    protected $videoFormat;

    /**
     * The timezone in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 format</a> for which the service bases its broadcasts
     *
     *
     * @var string
     */
    protected $broadcastTimezone;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification
     */
    protected $broadcastFrequency;

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
        $types = array(
            "string",
        );

        $callSign = self::checkTypes($callSign, $types);

        $this->callSign = $callSign;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getBroadcaster()
    {
        return $this->broadcaster;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $broadcaster
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcaster($broadcaster)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $broadcaster = self::checkTypes($broadcaster, $types);

        $this->broadcaster = $broadcaster;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BroadcastChannel
     */
    public function getHasBroadcastChannel()
    {
        return $this->hasBroadcastChannel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastChannel $hasBroadcastChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasBroadcastChannel($hasBroadcastChannel)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BroadcastChannel",
        );

        $hasBroadcastChannel = self::checkTypes($hasBroadcastChannel, $types);

        $this->hasBroadcastChannel = $hasBroadcastChannel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $area
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArea($area)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

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
        $types = array(
            "string",
        );

        $broadcastDisplayName = self::checkTypes($broadcastDisplayName, $types);

        $this->broadcastDisplayName = $broadcastDisplayName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BroadcastService
     */
    public function getParentService()
    {
        return $this->parentService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastService $parentService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParentService($parentService)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BroadcastService",
        );

        $parentService = self::checkTypes($parentService, $types);

        $this->parentService = $parentService;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getBroadcastAffiliateOf()
    {
        return $this->broadcastAffiliateOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $broadcastAffiliateOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastAffiliateOf($broadcastAffiliateOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $broadcastAffiliateOf = self::checkTypes($broadcastAffiliateOf, $types);

        $this->broadcastAffiliateOf = $broadcastAffiliateOf;
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
        $types = array(
            "string",
        );

        $videoFormat = self::checkTypes($videoFormat, $types);

        $this->videoFormat = $videoFormat;
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
        $types = array(
            "string",
        );

        $broadcastTimezone = self::checkTypes($broadcastTimezone, $types);

        $this->broadcastTimezone = $broadcastTimezone;
    }

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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification",
        );

        $broadcastFrequency = self::checkTypes($broadcastFrequency, $types);

        $this->broadcastFrequency = $broadcastFrequency;
    }

}
