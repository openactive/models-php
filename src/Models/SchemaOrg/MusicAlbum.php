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

    public static function fieldList() {
        $fields = [
            "byArtist" => "byArtist",
            "albumRelease" => "albumRelease",
            "albumReleaseType" => "albumReleaseType",
            "albumProductionType" => "albumProductionType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person
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
     * The kind of release which this album is: single, EP or album.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType|null
     */
    protected $albumReleaseType;

    /**
     * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MusicAlbumProductionType|null
     */
    protected $albumProductionType;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person $byArtist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByArtist($byArtist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbumRelease($albumRelease)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicRelease",
        ];

        $albumRelease = self::checkTypes($albumRelease, $types);

        $this->albumRelease = $albumRelease;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType|null
     */
    public function getAlbumReleaseType()
    {
        return $this->albumReleaseType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType|null $albumReleaseType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbumReleaseType($albumReleaseType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType",
            "null",
        ];

        $albumReleaseType = self::checkTypes($albumReleaseType, $types);

        $this->albumReleaseType = $albumReleaseType;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MusicAlbumProductionType|null
     */
    public function getAlbumProductionType()
    {
        return $this->albumProductionType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MusicAlbumProductionType|null $albumProductionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbumProductionType($albumProductionType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MusicAlbumProductionType",
            "null",
        ];

        $albumProductionType = self::checkTypes($albumProductionType, $types);

        $this->albumProductionType = $albumProductionType;
    }

}
