<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicRecording extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicRecording";
    }

    public static function fieldList() {
        $fields = [
            "byArtist" => "byArtist",
            "duration" => "duration",
            "inAlbum" => "inAlbum",
            "inPlaylist" => "inPlaylist",
            "isrcCode" => "isrcCode",
            "recordingOf" => "recordingOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $byArtist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $duration;

    /**
     * The album to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    protected $inAlbum;

    /**
     * The playlist to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicPlaylist|string
     */
    protected $inPlaylist;

    /**
     * The International Standard Recording Code for the recording.
     *
     *
     * @var string
     */
    protected $isrcCode;

    /**
     * The composition this track is a recording of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicComposition|string
     */
    protected $recordingOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person|string $byArtist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByArtist($byArtist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $byArtist = self::checkTypes($byArtist, $types);

        $this->byArtist = $byArtist;
    }

    /**
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum|string $inAlbum
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInAlbum($inAlbum)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
            "string",
        ];

        $inAlbum = self::checkTypes($inAlbum, $types);

        $this->inAlbum = $inAlbum;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicPlaylist|string
     */
    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicPlaylist|string $inPlaylist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInPlaylist($inPlaylist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicPlaylist",
            "string",
        ];

        $inPlaylist = self::checkTypes($inPlaylist, $types);

        $this->inPlaylist = $inPlaylist;
    }

    /**
     * @return string
     */
    public function getIsrcCode()
    {
        return $this->isrcCode;
    }

    /**
     * @param string $isrcCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsrcCode($isrcCode)
    {
        $types = [
            "string",
        ];

        $isrcCode = self::checkTypes($isrcCode, $types);

        $this->isrcCode = $isrcCode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicComposition|string
     */
    public function getRecordingOf()
    {
        return $this->recordingOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicComposition|string $recordingOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordingOf($recordingOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicComposition",
            "string",
        ];

        $recordingOf = self::checkTypes($recordingOf, $types);

        $this->recordingOf = $recordingOf;
    }

}
