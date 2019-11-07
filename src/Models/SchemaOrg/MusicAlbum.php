<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicAlbum extends \OpenActive\Models\SchemaOrg\MusicPlaylist
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicAlbum";
    }

    /**
     * A release of this album.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRelease
     */
    protected $albumRelease;

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\MusicGroup
     */
    protected $byArtist;

    /**
     * The kind of release which this album is: single, EP or album.
     *
     *
     * @var \OpenActive\Enums\MusicAlbumReleaseType|null
     */
    protected $albumReleaseType;

    /**
     * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
     *
     *
     * @var \OpenActive\Enums\MusicAlbumProductionType|null
     */
    protected $albumProductionType;

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbumRelease($albumRelease)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicRelease",
        );

        $albumRelease = self::checkTypes($albumRelease, $types);

        $this->albumRelease = $albumRelease;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return \OpenActive\Enums\MusicAlbumReleaseType|null
     */
    public function getAlbumReleaseType()
    {
        return $this->albumReleaseType;
    }

    /**
     * @param \OpenActive\Enums\MusicAlbumReleaseType|null $albumReleaseType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbumReleaseType($albumReleaseType)
    {
        $types = array(
            "\OpenActive\Enums\MusicAlbumReleaseType",
            "null",
        );

        $albumReleaseType = self::checkTypes($albumReleaseType, $types);

        $this->albumReleaseType = $albumReleaseType;
    }

    /**
     * @return \OpenActive\Enums\MusicAlbumProductionType|null
     */
    public function getAlbumProductionType()
    {
        return $this->albumProductionType;
    }

    /**
     * @param \OpenActive\Enums\MusicAlbumProductionType|null $albumProductionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbumProductionType($albumProductionType)
    {
        $types = array(
            "\OpenActive\Enums\MusicAlbumProductionType",
            "null",
        );

        $albumProductionType = self::checkTypes($albumProductionType, $types);

        $this->albumProductionType = $albumProductionType;
    }

}
