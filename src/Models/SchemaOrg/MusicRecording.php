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
            "inPlaylist" => "inPlaylist",
            "duration" => "duration",
            "byArtist" => "byArtist",
            "inAlbum" => "inAlbum",
            "recordingOf" => "recordingOf",
            "isrcCode" => "isrcCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The playlist to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicPlaylist|string
     */
    protected $inPlaylist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $duration;

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $byArtist;

    /**
     * The album to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    protected $inAlbum;

    /**
     * The composition this track is a recording of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicComposition|string
     */
    protected $recordingOf;

    /**
     * The International Standard Recording Code for the recording.
     *
     *
     * @var string
     */
    protected $isrcCode;

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
     * @return DateInterval|string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|string|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

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

}
