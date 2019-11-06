<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Seat extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Seat";
    }

    /**
     * The type/class of the seat.
     *
     *
     * @var string|Schema.NET.QualitativeValue|null
     */
    protected $seatingType;

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     *
     *
     * @var string
     */
    protected $seatSection;

    /**
     * The row location of the reserved seat (e.g., B).
     *
     *
     * @var string
     */
    protected $seatRow;

    /**
     * The location of the reserved seat (e.g., 27).
     *
     *
     * @var string
     */
    protected $seatNumber;

    /**
     * @return string|Schema.NET.QualitativeValue|null
     */
    public function getSeatingType()
    {
        return $this->seatingType;
    }

    /**
     * @param string|Schema.NET.QualitativeValue|null $seatingType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeatingType($seatingType)
    {
        $types = array(
            "string",
            "Schema.NET.QualitativeValue",
            "null",
        );

        $seatingType = self::checkTypes($seatingType, $types);

        $this->seatingType = $seatingType;
    }

    /**
     * @return string
     */
    public function getSeatSection()
    {
        return $this->seatSection;
    }

    /**
     * @param string $seatSection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeatSection($seatSection)
    {
        $types = array(
            "string",
        );

        $seatSection = self::checkTypes($seatSection, $types);

        $this->seatSection = $seatSection;
    }

    /**
     * @return string
     */
    public function getSeatRow()
    {
        return $this->seatRow;
    }

    /**
     * @param string $seatRow
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeatRow($seatRow)
    {
        $types = array(
            "string",
        );

        $seatRow = self::checkTypes($seatRow, $types);

        $this->seatRow = $seatRow;
    }

    /**
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * @param string $seatNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeatNumber($seatNumber)
    {
        $types = array(
            "string",
        );

        $seatNumber = self::checkTypes($seatNumber, $types);

        $this->seatNumber = $seatNumber;
    }

}
