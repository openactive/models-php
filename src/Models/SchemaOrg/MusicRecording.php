<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class MusicRecording extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * The composition this track is a recording of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicComposition
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
     * The album to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    protected $inAlbum;

    /**
     * The playlist to which this recording belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicPlaylist
     */
    protected $inPlaylist;

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    protected $byArtist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRecordingOf($recordingOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicComposition",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum $inAlbum
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\MusicPlaylist
     */
    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicPlaylist $inPlaylist
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\MusicGroup $byArtist
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setByArtist($byArtist)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
        );

        $byArtist = self::checkTypes($byArtist, $types);

        $this->byArtist = $byArtist;
    }

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
     * @throws \Exception If the provided argument is not of a supported type.
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

}
