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
            "duration" => "duration",
            "byArtist" => "byArtist",
            "inPlaylist" => "inPlaylist",
            "inAlbum" => "inAlbum",
            "isrcCode" => "isrcCode",
            "recordingOf" => "recordingOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    protected $byArtist;

    /**
     * The playlist to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicPlaylist
     */
    protected $inPlaylist;

    /**
     * The album to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    protected $inAlbum;

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
     * @var \OpenActive\Models\SchemaOrg\MusicComposition
     */
    protected $recordingOf;

    /**
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup $byArtist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByArtist($byArtist)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
        );

        $byArtist = self::checkTypes($byArtist, $types);

        $this->byArtist = $byArtist;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicPlaylist
     */
    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicPlaylist $inPlaylist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInPlaylist($inPlaylist)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicPlaylist",
        );

        $inPlaylist = self::checkTypes($inPlaylist, $types);

        $this->inPlaylist = $inPlaylist;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum $inAlbum
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInAlbum($inAlbum)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
        );

        $inAlbum = self::checkTypes($inAlbum, $types);

        $this->inAlbum = $inAlbum;
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
        $types = array(
            "string",
        );

        $isrcCode = self::checkTypes($isrcCode, $types);

        $this->isrcCode = $isrcCode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicComposition
     */
    public function getRecordingOf()
    {
        return $this->recordingOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicComposition $recordingOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordingOf($recordingOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicComposition",
        );

        $recordingOf = self::checkTypes($recordingOf, $types);

        $this->recordingOf = $recordingOf;
    }

}
