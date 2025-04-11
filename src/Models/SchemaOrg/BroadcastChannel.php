<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BroadcastChannel extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BroadcastChannel";
    }

    public static function fieldList() {
        $fields = [
            "broadcastFrequency" => "broadcastFrequency",
            "inBroadcastLineup" => "inBroadcastLineup",
            "broadcastChannelId" => "broadcastChannelId",
            "broadcastServiceTier" => "broadcastServiceTier",
            "providesBroadcastService" => "providesBroadcastService",
            "genre" => "genre",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequencies of AM and FM radio channels, e.g. "87 FM".
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification
     */
    protected $broadcastFrequency;

    /**
     * The CableOrSatelliteService offering the channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CableOrSatelliteService|string
     */
    protected $inBroadcastLineup;

    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     *
     *
     * @var string
     */
    protected $broadcastChannelId;

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     *
     *
     * @var string
     */
    protected $broadcastServiceTier;

    /**
     * The BroadcastService offered on this channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastService|string
     */
    protected $providesBroadcastService;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     *
     * @var string
     */
    protected $genre;

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
     * @return \OpenActive\Models\SchemaOrg\CableOrSatelliteService|string
     */
    public function getInBroadcastLineup()
    {
        return $this->inBroadcastLineup;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CableOrSatelliteService|string $inBroadcastLineup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInBroadcastLineup($inBroadcastLineup)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CableOrSatelliteService",
            "string",
        ];

        $inBroadcastLineup = self::checkTypes($inBroadcastLineup, $types);

        $this->inBroadcastLineup = $inBroadcastLineup;
    }

    /**
     * @return string
     */
    public function getBroadcastChannelId()
    {
        return $this->broadcastChannelId;
    }

    /**
     * @param string $broadcastChannelId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastChannelId($broadcastChannelId)
    {
        $types = [
            "string",
        ];

        $broadcastChannelId = self::checkTypes($broadcastChannelId, $types);

        $this->broadcastChannelId = $broadcastChannelId;
    }

    /**
     * @return string
     */
    public function getBroadcastServiceTier()
    {
        return $this->broadcastServiceTier;
    }

    /**
     * @param string $broadcastServiceTier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastServiceTier($broadcastServiceTier)
    {
        $types = [
            "string",
        ];

        $broadcastServiceTier = self::checkTypes($broadcastServiceTier, $types);

        $this->broadcastServiceTier = $broadcastServiceTier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BroadcastService|string
     */
    public function getProvidesBroadcastService()
    {
        return $this->providesBroadcastService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastService|string $providesBroadcastService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvidesBroadcastService($providesBroadcastService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BroadcastService",
            "string",
        ];

        $providesBroadcastService = self::checkTypes($providesBroadcastService, $types);

        $this->providesBroadcastService = $providesBroadcastService;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGenre($genre)
    {
        $types = [
            "string",
        ];

        $genre = self::checkTypes($genre, $types);

        $this->genre = $genre;
    }

}
