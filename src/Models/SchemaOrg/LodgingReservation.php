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

    public static function fieldList() {
        $fields = [
            "checkinTime" => "checkinTime",
            "numChildren" => "numChildren",
            "lodgingUnitDescription" => "lodgingUnitDescription",
            "checkoutTime" => "checkoutTime",
            "lodgingUnitType" => "lodgingUnitType",
            "numAdults" => "numAdults",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The earliest someone may check into a lodging establishment.
     *
     *
     * @var DateTime|string|null
     */
    protected $checkinTime;

    /**
     * The number of children staying in the unit.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $numChildren;

    /**
     * A full description of the lodging unit.
     *
     *
     * @var string
     */
    protected $lodgingUnitDescription;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     *
     * @var DateTime|string|null
     */
    protected $checkoutTime;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $lodgingUnitType;

    /**
     * The number of adults staying in the unit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|int|null
     */
    protected $numAdults;

    /**
     * @return DateTime|string|null
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * @param DateTime|string|null $checkinTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheckinTime($checkinTime)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $checkinTime = self::checkTypes($checkinTime, $types);

        $this->checkinTime = $checkinTime;
    }

    /**
     * @return int|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $numChildren
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumChildren($numChildren)
    {
        $types = array(
            "int",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $numChildren = self::checkTypes($numChildren, $types);

        $this->numChildren = $numChildren;
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
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getLodgingUnitType()
    {
        return $this->lodgingUnitType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $lodgingUnitType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLodgingUnitType($lodgingUnitType)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        );

        $lodgingUnitType = self::checkTypes($lodgingUnitType, $types);

        $this->lodgingUnitType = $lodgingUnitType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|int|null
     */
    public function getNumAdults()
    {
        return $this->numAdults;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|int|null $numAdults
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumAdults($numAdults)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "int",
            "null",
        );

        $numAdults = self::checkTypes($numAdults, $types);

        $this->numAdults = $numAdults;
    }

}
