<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicGroup extends \OpenActive\Models\SchemaOrg\PerformingGroup
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicGroup";
    }

    public static function fieldList() {
        $fields = [
            "album" => "album",
            "tracks" => "tracks",
            "genre" => "genre",
            "track" => "track",
            "musicGroupMember" => "musicGroupMember",
            "albums" => "albums",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A music album.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    protected $album;

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $tracks;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     *
     * @var string
     */
    protected $genre;

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $track;

    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $musicGroupMember;

    /**
     * A collection of music albums.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    protected $albums;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum $album
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbum($album)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
        );

        $album = self::checkTypes($album, $types);

        $this->album = $album;
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
        $types = array(
            "string",
        );

        $genre = self::checkTypes($genre, $types);

        $this->genre = $genre;
    }

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
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getMusicGroupMember()
    {
        return $this->musicGroupMember;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $musicGroupMember
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicGroupMember($musicGroupMember)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $musicGroupMember = self::checkTypes($musicGroupMember, $types);

        $this->musicGroupMember = $musicGroupMember;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum $albums
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbums($albums)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
        );

        $albums = self::checkTypes($albums, $types);

        $this->albums = $albums;
    }

}
