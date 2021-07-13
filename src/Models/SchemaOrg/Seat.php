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

    public static function fieldList() {
        $fields = [
            "seatNumber" => "seatNumber",
            "seatSection" => "seatSection",
            "seatingType" => "seatingType",
            "seatRow" => "seatRow",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The location of the reserved seat (e.g., 27).
     *
     *
     * @var string
     */
    protected $seatNumber;

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     *
     *
     * @var string
     */
    protected $seatSection;

    /**
     * The type/class of the seat.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    protected $seatingType;

    /**
     * The row location of the reserved seat (e.g., B).
     *
     *
     * @var string
     */
    protected $seatRow;

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
        $types = [
            "string",
        ];

        $seatNumber = self::checkTypes($seatNumber, $types);

        $this->seatNumber = $seatNumber;
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
        $types = [
            "string",
        ];

        $seatSection = self::checkTypes($seatSection, $types);

        $this->seatSection = $seatSection;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    public function getSeatingType()
    {
        return $this->seatingType;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null $seatingType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeatingType($seatingType)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "null",
        ];

        $seatingType = self::checkTypes($seatingType, $types);

        $this->seatingType = $seatingType;
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
        $types = [
            "string",
        ];

        $seatRow = self::checkTypes($seatRow, $types);

        $this->seatRow = $seatRow;
    }

}
