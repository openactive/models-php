<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class MusicAlbum extends \OpenActive\Models\SchemaOrg\MusicPlaylist
{
    /**
     * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
     *
     *
     * @var Schema.NET.MusicAlbumProductionType|null
     */
    protected $albumProductionType;

    /**
     * The kind of release which this album is: single, EP or album.
     *
     *
     * @var Schema.NET.MusicAlbumReleaseType|null
     */
    protected $albumReleaseType;

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    protected $byArtist;

    /**
     * A release of this album.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRelease
     */
    protected $albumRelease;

    /**
     * @return Schema.NET.MusicAlbumProductionType|null
     */
    public function getAlbumProductionType()
    {
        return $this->albumProductionType;
    }

    /**
     * @param Schema.NET.MusicAlbumProductionType|null $albumProductionType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAlbumProductionType($albumProductionType)
    {
        $types = array(
            "Schema.NET.MusicAlbumProductionType",
            "null",
        );

        $albumProductionType = self::checkTypes($albumProductionType, $types);

        $this->albumProductionType = $albumProductionType;
    }

    /**
     * @return Schema.NET.MusicAlbumReleaseType|null
     */
    public function getAlbumReleaseType()
    {
        return $this->albumReleaseType;
    }

    /**
     * @param Schema.NET.MusicAlbumReleaseType|null $albumReleaseType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAlbumReleaseType($albumReleaseType)
    {
        $types = array(
            "Schema.NET.MusicAlbumReleaseType",
            "null",
        );

        $albumReleaseType = self::checkTypes($albumReleaseType, $types);

        $this->albumReleaseType = $albumReleaseType;
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
     * @return \OpenActive\Models\SchemaOrg\MusicRelease
     */
    public function getAlbumRelease()
    {
        return $this->albumRelease;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicRelease $albumRelease
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAlbumRelease($albumRelease)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicRelease",
        );

        $albumRelease = self::checkTypes($albumRelease, $types);

        $this->albumRelease = $albumRelease;
    }

}
