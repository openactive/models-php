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

    public static function fieldList() {
        $fields = [
            "track" => "track",
            "tracks" => "tracks",
            "numTracks" => "numTracks",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $track;

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $tracks;

    /**
     * The number of tracks in this album or playlist.
     *
     *
     * @var int|null
     */
    protected $numTracks;

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
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        ];

        $track = self::checkTypes($track, $types);

        $this->track = $track;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        ];

        $tracks = self::checkTypes($tracks, $types);

        $this->tracks = $tracks;
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
        $types = [
            "int",
            "null",
        ];

        $numTracks = self::checkTypes($numTracks, $types);

        $this->numTracks = $numTracks;
    }

}
