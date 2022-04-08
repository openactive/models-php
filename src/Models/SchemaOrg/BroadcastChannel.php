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
            "genre" => "genre",
            "broadcastFrequency" => "broadcastFrequency",
            "providesBroadcastService" => "providesBroadcastService",
            "broadcastChannelId" => "broadcastChannelId",
            "inBroadcastLineup" => "inBroadcastLineup",
            "broadcastServiceTier" => "broadcastServiceTier",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     *
     * @var string
     */
    protected $genre;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification|string
     */
    protected $broadcastFrequency;

    /**
     * The BroadcastService offered on this channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastService|string
     */
    protected $providesBroadcastService;

    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     *
     *
     * @var string
     */
    protected $broadcastChannelId;

    /**
     * The CableOrSatelliteService offering the channel.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CableOrSatelliteService|string
     */
    protected $inBroadcastLineup;

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     *
     *
     * @var string
     */
    protected $broadcastServiceTier;

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

    /**
     * @return \OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification|string
     */
    public function getBroadcastFrequency()
    {
        return $this->broadcastFrequency;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification|string $broadcastFrequency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastFrequency($broadcastFrequency)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BroadcastFrequencySpecification",
            "string",
        ];

        $broadcastFrequency = self::checkTypes($broadcastFrequency, $types);

        $this->broadcastFrequency = $broadcastFrequency;
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

}
