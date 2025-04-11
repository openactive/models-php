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
            "albums" => "albums",
            "genre" => "genre",
            "tracks" => "tracks",
            "track" => "track",
            "musicGroupMember" => "musicGroupMember",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A music album.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    protected $album;

    /**
     * A collection of music albums.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    protected $albums;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     *
     * @var string
     */
    protected $genre;

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    protected $tracks;

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    protected $track;

    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $musicGroupMember;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum|string $album
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbum($album)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
            "string",
        ];

        $album = self::checkTypes($album, $types);

        $this->album = $album;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum|string $albums
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbums($albums)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
            "string",
        ];

        $albums = self::checkTypes($albums, $types);

        $this->albums = $albums;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getMusicGroupMember()
    {
        return $this->musicGroupMember;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $musicGroupMember
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicGroupMember($musicGroupMember)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $musicGroupMember = self::checkTypes($musicGroupMember, $types);

        $this->musicGroupMember = $musicGroupMember;
    }

}
