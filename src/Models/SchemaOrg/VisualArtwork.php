<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VisualArtwork extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VisualArtwork";
    }

    public static function fieldList() {
        $fields = [
            "depth" => "depth",
            "surface" => "surface",
            "width" => "width",
            "artEdition" => "artEdition",
            "artworkSurface" => "artworkSurface",
            "artform" => "artform",
            "artMedium" => "artMedium",
            "height" => "height",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The depth of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    protected $depth;

    /**
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     *
     * @var string
     */
    protected $surface;

    /**
     * The width of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $width;

    /**
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     *
     *
     * @var int|string|null
     */
    protected $artEdition;

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     *
     * @var string
     */
    protected $artworkSurface;

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     *
     *
     * @var string
     */
    protected $artform;

    /**
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     *
     *
     * @var string
     */
    protected $artMedium;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    protected $height;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance $depth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepth($depth)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
        );

        $depth = self::checkTypes($depth, $types);

        $this->depth = $depth;
    }

    /**
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param string $surface
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSurface($surface)
    {
        $types = array(
            "string",
        );

        $surface = self::checkTypes($surface, $types);

        $this->surface = $surface;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $width = self::checkTypes($width, $types);

        $this->width = $width;
    }

    /**
     * @return int|string|null
     */
    public function getArtEdition()
    {
        return $this->artEdition;
    }

    /**
     * @param int|string|null $artEdition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtEdition($artEdition)
    {
        $types = array(
            "int",
            "string",
            "null",
        );

        $artEdition = self::checkTypes($artEdition, $types);

        $this->artEdition = $artEdition;
    }

    /**
     * @return string
     */
    public function getArtworkSurface()
    {
        return $this->artworkSurface;
    }

    /**
     * @param string $artworkSurface
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtworkSurface($artworkSurface)
    {
        $types = array(
            "string",
        );

        $artworkSurface = self::checkTypes($artworkSurface, $types);

        $this->artworkSurface = $artworkSurface;
    }

    /**
     * @return string
     */
    public function getArtform()
    {
        return $this->artform;
    }

    /**
     * @param string $artform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtform($artform)
    {
        $types = array(
            "string",
        );

        $artform = self::checkTypes($artform, $types);

        $this->artform = $artform;
    }

    /**
     * @return string
     */
    public function getArtMedium()
    {
        return $this->artMedium;
    }

    /**
     * @param string $artMedium
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtMedium($artMedium)
    {
        $types = array(
            "string",
        );

        $artMedium = self::checkTypes($artMedium, $types);

        $this->artMedium = $artMedium;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
        );

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

}
