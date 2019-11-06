<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicPlaylist extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicPlaylist";
    }

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $track;

    /**
     * The number of tracks in this album or playlist.
     *
     *
     * @var int|null
     */
    protected $numTracks;

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $tracks;

    /**
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording $track
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrack($track)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        );

        $track = self::checkTypes($track, $types);

        $this->track = $track;
    }

    /**
     * @return int|null
     */
    public function getNumTracks()
    {
        return $this->numTracks;
    }

    /**
     * @param int|null $numTracks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumTracks($numTracks)
    {
        $types = array(
            "int",
            "null",
        );

        $numTracks = self::checkTypes($numTracks, $types);

        $this->numTracks = $numTracks;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicRecording
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicRecording $tracks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTracks($tracks)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        );

        $tracks = self::checkTypes($tracks, $types);

        $this->tracks = $tracks;
    }

}
