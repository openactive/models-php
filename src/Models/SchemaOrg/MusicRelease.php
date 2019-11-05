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
    static public function getType()
    {
        return "schema:MusicRelease";
    }

    /**
     * The label that issued the release.
     *
     *
     * @var Organization
     */
    protected $recordLabel;

    /**
     * The catalog number for the release.
     *
     *
     * @var string
     */
    protected $catalogNumber;

    /**
     * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
     *
     *
     * @var Person|Organization
     */
    protected $creditedTo;

    /**
     * The album this is a release of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    protected $releaseOf;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
     *
     *
     * @var Schema.NET.MusicReleaseFormatType|null
     */
    protected $musicReleaseFormat;

    /**
     * @return Organization
     */
    public function getRecordLabel()
    {
        return $this->recordLabel;
    }

    /**
     * @param Organization $recordLabel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordLabel($recordLabel)
    {
        $types = array(
            "Organization",
        );

        $recordLabel = self::checkTypes($recordLabel, $types);

        $this->recordLabel = $recordLabel;
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
        $types = array(
            "string",
        );

        $catalogNumber = self::checkTypes($catalogNumber, $types);

        $this->catalogNumber = $catalogNumber;
    }

    /**
     * @return Person|Organization
     */
    public function getCreditedTo()
    {
        return $this->creditedTo;
    }

    /**
     * @param Person|Organization $creditedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreditedTo($creditedTo)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $creditedTo = self::checkTypes($creditedTo, $types);

        $this->creditedTo = $creditedTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicAlbum
     */
    public function getReleaseOf()
    {
        return $this->releaseOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicAlbum $releaseOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReleaseOf($releaseOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicAlbum",
        );

        $releaseOf = self::checkTypes($releaseOf, $types);

        $this->releaseOf = $releaseOf;
    }

    /**
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return Schema.NET.MusicReleaseFormatType|null
     */
    public function getMusicReleaseFormat()
    {
        return $this->musicReleaseFormat;
    }

    /**
     * @param Schema.NET.MusicReleaseFormatType|null $musicReleaseFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicReleaseFormat($musicReleaseFormat)
    {
        $types = array(
            "Schema.NET.MusicReleaseFormatType",
            "null",
        );

        $musicReleaseFormat = self::checkTypes($musicReleaseFormat, $types);

        $this->musicReleaseFormat = $musicReleaseFormat;
    }

}
