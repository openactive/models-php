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
            "tracks" => "tracks",
            "numTracks" => "numTracks",
            "track" => "track",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording|string
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
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    protected $track;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicRecording|string $tracks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTracks($tracks)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicRecording",
            "string",
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

    /**
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording|string $track
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrack($track)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\MusicRecording",
            "string",
        ];

        $track = self::checkTypes($track, $types);

        $this->track = $track;
    }

}
