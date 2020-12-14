<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ComicIssue extends \OpenActive\Models\SchemaOrg\PublicationIssue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ComicIssue";
    }

    public static function fieldList() {
        $fields = [
            "variantCover" => "variantCover",
            "colorist" => "colorist",
            "artist" => "artist",
            "letterer" => "letterer",
            "inker" => "inker",
            "penciler" => "penciler",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A description of the variant cover
     *     	for the issue, if the issue is a variant printing. For example, "Bryan Hitch
     *     	Variant Cover" or "2nd Printing Variant".
     *
     *
     * @var string
     */
    protected $variantCover;

    /**
     * The individual who adds color to inked drawings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $colorist;

    /**
     * The primary artist for a work
     *     	in a medium other than pencils or digital line art--for example, if the
     *     	primary artwork is done in watercolors or digital paints.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $artist;

    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $letterer;

    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $inker;

    /**
     * The individual who draws the primary narrative artwork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $penciler;

    /**
     * @return string
     */
    public function getVariantCover()
    {
        return $this->variantCover;
    }

    /**
     * @param string $variantCover
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVariantCover($variantCover)
    {
        $types = [
            "string",
        ];

        $variantCover = self::checkTypes($variantCover, $types);

        $this->variantCover = $variantCover;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getColorist()
    {
        return $this->colorist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $colorist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setColorist($colorist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $colorist = self::checkTypes($colorist, $types);

        $this->colorist = $colorist;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $artist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtist($artist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $artist = self::checkTypes($artist, $types);

        $this->artist = $artist;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getLetterer()
    {
        return $this->letterer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $letterer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLetterer($letterer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $letterer = self::checkTypes($letterer, $types);

        $this->letterer = $letterer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getInker()
    {
        return $this->inker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $inker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInker($inker)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $inker = self::checkTypes($inker, $types);

        $this->inker = $inker;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getPenciler()
    {
        return $this->penciler;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $penciler
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPenciler($penciler)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $penciler = self::checkTypes($penciler, $types);

        $this->penciler = $penciler;
    }

}
