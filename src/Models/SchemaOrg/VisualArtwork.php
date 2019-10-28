<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VisualArtwork extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    protected $height;

    /**
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     *
     *
     * @var string
     */
    protected $artMedium;

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     *
     *
     * @var string
     */
    protected $artform;

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     *
     * @var string
     */
    protected $artworkSurface;

    /**
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     *
     *
     * @var int|string|null
     */
    protected $artEdition;

    /**
     * The width of the item.
     *
     *
     * @var QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    protected $width;

    /**
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     *
     * @var string
     */
    protected $surface;

    /**
     * The depth of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    protected $depth;

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "QuantitativeValue",
        );

        $height = self::checkTypes($height, $types);

        $this->height = $height;
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
     * @return QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = array(
            "QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
        );

        $width = self::checkTypes($width, $types);

        $this->width = $width;
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
     * @return \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue $depth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepth($depth)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "QuantitativeValue",
        );

        $depth = self::checkTypes($depth, $types);

        $this->depth = $depth;
    }

}
