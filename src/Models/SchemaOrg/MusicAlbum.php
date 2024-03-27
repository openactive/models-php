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
            "albumRelease" => "albumRelease",
            "albumProductionType" => "albumProductionType",
            "albumReleaseType" => "albumReleaseType",
            "byArtist" => "byArtist",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A release of this album.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRelease|string
     */
    protected $albumRelease;

    /**
     * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MusicAlbumProductionType|null
     */
    protected $albumProductionType;

    /**
     * The kind of release which this album is: single, EP or album.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType|null
     */
    protected $albumReleaseType;

    /**
     * The artist that performed this album or recording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    protected $byArtist;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicRelease|string
     */
    public function getAlbumRelease()
    {
        return $this->albumRelease;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicRelease|string $albumRelease
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlbumRelease($albumRelease)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicRelease",
            "string",
        ];

        $albumRelease = self::checkTypes($albumRelease, $types);

        $this->albumRelease = $albumRelease;
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
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string $byArtist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setByArtist($byArtist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "string",
        ];

        $byArtist = self::checkTypes($byArtist, $types);

        $this->byArtist = $byArtist;
    }

}
