<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class LodgingReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * A full description of the lodging unit.
     *
     *
     * @var string
     */
    protected $lodgingUnitDescription;

    /**
     * The earliest someone may check into a lodging establishment.
     *
     *
     * @var DateTime|null
     */
    protected $checkinTime;

    /**
     * The number of children staying in the unit.
     *
     *
     * @var int|QuantitativeValue|null
     */
    protected $numChildren;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     *
     * @var DateTime|null
     */
    protected $checkoutTime;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     *
     *
     * @var Schema.NET.QualitativeValue|string|null
     */
    protected $lodgingUnitType;

    /**
     * The number of adults staying in the unit.
     *
     *
     * @var int|QuantitativeValue|null
     */
    protected $numAdults;

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return DateTime|null
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * @param DateTime|null $checkinTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCheckinTime($checkinTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $checkinTime = self::checkTypes($checkinTime, $types);

        $this->checkinTime = $checkinTime;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return DateTime|null
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    /**
     * @param DateTime|null $checkoutTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCheckoutTime($checkoutTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $checkoutTime = self::checkTypes($checkoutTime, $types);

        $this->checkoutTime = $checkoutTime;
    }

    /**
     * @return Schema.NET.QualitativeValue|string|null
     */
    public function getLodgingUnitType()
    {
        return $this->lodgingUnitType;
    }

    /**
     * @param Schema.NET.QualitativeValue|string|null $lodgingUnitType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLodgingUnitType($lodgingUnitType)
    {
        $types = array(
            "Schema.NET.QualitativeValue",
            "string",
            "null",
        );

        $lodgingUnitType = self::checkTypes($lodgingUnitType, $types);

        $this->lodgingUnitType = $lodgingUnitType;
    }

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
     * @throws \Exception If the provided argument is not of a supported type.
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

}
