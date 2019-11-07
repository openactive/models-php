<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LodgingReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LodgingReservation";
    }

    /**
     * The number of adults staying in the unit.
     *
     *
     * @var int|QuantitativeValue|null
     */
    protected $numAdults;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     *
     *
     * @var \OpenActive\Enums\QualitativeValue|string|null
     */
    protected $lodgingUnitType;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     *
     * @var DateTime|string|null
     */
    protected $checkoutTime;

    /**
     * A full description of the lodging unit.
     *
     *
     * @var string
     */
    protected $lodgingUnitDescription;

    /**
     * The number of children staying in the unit.
     *
     *
     * @var int|QuantitativeValue|null
     */
    protected $numChildren;

    /**
     * The earliest someone may check into a lodging establishment.
     *
     *
     * @var string|DateTime|null
     */
    protected $checkinTime;

    /**
     * @return int|QuantitativeValue|null
     */
    public function getNumAdults()
    {
        return $this->numAdults;
    }

    /**
     * @param int|QuantitativeValue|null $numAdults
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumAdults($numAdults)
    {
        $types = array(
            "int",
            "QuantitativeValue",
            "null",
        );

        $numAdults = self::checkTypes($numAdults, $types);

        $this->numAdults = $numAdults;
    }

    /**
     * @return \OpenActive\Enums\QualitativeValue|string|null
     */
    public function getLodgingUnitType()
    {
        return $this->lodgingUnitType;
    }

    /**
     * @param \OpenActive\Enums\QualitativeValue|string|null $lodgingUnitType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLodgingUnitType($lodgingUnitType)
    {
        $types = array(
            "\OpenActive\Enums\QualitativeValue",
            "string",
            "null",
        );

        $lodgingUnitType = self::checkTypes($lodgingUnitType, $types);

        $this->lodgingUnitType = $lodgingUnitType;
    }

    /**
     * @return DateTime|string|null
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    /**
     * @param DateTime|string|null $checkoutTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheckoutTime($checkoutTime)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $checkoutTime = self::checkTypes($checkoutTime, $types);

        $this->checkoutTime = $checkoutTime;
    }

    /**
     * @return string
     */
    public function getLodgingUnitDescription()
    {
        return $this->lodgingUnitDescription;
    }

    /**
     * @param string $lodgingUnitDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLodgingUnitDescription($lodgingUnitDescription)
    {
        $types = array(
            "string",
        );

        $lodgingUnitDescription = self::checkTypes($lodgingUnitDescription, $types);

        $this->lodgingUnitDescription = $lodgingUnitDescription;
    }

    /**
     * @return int|QuantitativeValue|null
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * @param int|QuantitativeValue|null $numChildren
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumChildren($numChildren)
    {
        $types = array(
            "int",
            "QuantitativeValue",
            "null",
        );

        $numChildren = self::checkTypes($numChildren, $types);

        $this->numChildren = $numChildren;
    }

    /**
     * @return string|DateTime|null
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * @param string|DateTime|null $checkinTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheckinTime($checkinTime)
    {
        $types = array(
            "Time",
            "DateTime",
            "null",
        );

        $checkinTime = self::checkTypes($checkinTime, $types);

        $this->checkinTime = $checkinTime;
    }

}
