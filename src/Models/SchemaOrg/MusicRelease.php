<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicRelease extends \OpenActive\Models\SchemaOrg\MusicPlaylist
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicRelease";
    }

    public static function fieldList() {
        $fields = [
            "releaseOf" => "releaseOf",
            "duration" => "duration",
            "catalogNumber" => "catalogNumber",
            "musicReleaseFormat" => "musicReleaseFormat",
            "creditedTo" => "creditedTo",
            "recordLabel" => "recordLabel",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The album this is a release of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    protected $releaseOf;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $duration;

    /**
     * The catalog number for the release.
     *
     *
     * @var string
     */
    protected $catalogNumber;

    /**
     * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType|null
     */
    protected $musicReleaseFormat;

    /**
     * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $creditedTo;

    /**
     * The label that issued the release.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $recordLabel;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum|string
     */
    public function getReleaseOf()
    {
        return $this->releaseOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum|string $releaseOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReleaseOf($releaseOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
            "string",
        ];

        $releaseOf = self::checkTypes($releaseOf, $types);

        $this->releaseOf = $releaseOf;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|string|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * @param string $catalogNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCatalogNumber($catalogNumber)
    {
        $types = [
            "string",
        ];

        $catalogNumber = self::checkTypes($catalogNumber, $types);

        $this->catalogNumber = $catalogNumber;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType|null
     */
    public function getMusicReleaseFormat()
    {
        return $this->musicReleaseFormat;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MusicReleaseFormatType|null $musicReleaseFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicReleaseFormat($musicReleaseFormat)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MusicReleaseFormatType",
            "null",
        ];

        $musicReleaseFormat = self::checkTypes($musicReleaseFormat, $types);

        $this->musicReleaseFormat = $musicReleaseFormat;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getCreditedTo()
    {
        return $this->creditedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $creditedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreditedTo($creditedTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $creditedTo = self::checkTypes($creditedTo, $types);

        $this->creditedTo = $creditedTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getRecordLabel()
    {
        return $this->recordLabel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $recordLabel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordLabel($recordLabel)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $recordLabel = self::checkTypes($recordLabel, $types);

        $this->recordLabel = $recordLabel;
    }

}
