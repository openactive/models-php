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
            "lodgingUnitDescription" => "lodgingUnitDescription",
            "numChildren" => "numChildren",
            "checkinTime" => "checkinTime",
            "numAdults" => "numAdults",
            "checkoutTime" => "checkoutTime",
            "lodgingUnitType" => "lodgingUnitType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * @var int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $numChildren;

    /**
     * The earliest someone may check into a lodging establishment.
     *
     *
     * @var DateTime|string|null
     */
    protected $checkinTime;

    /**
     * The number of adults staying in the unit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|int|null
     */
    protected $numAdults;

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
        $types = [
            "string",
        ];

        $lodgingUnitDescription = self::checkTypes($lodgingUnitDescription, $types);

        $this->lodgingUnitDescription = $lodgingUnitDescription;
    }

    /**
     * @return int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $numChildren
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumChildren($numChildren)
    {
        $types = [
            "int",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $numChildren = self::checkTypes($numChildren, $types);

        $this->numChildren = $numChildren;
    }

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
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $checkinTime = self::checkTypes($checkinTime, $types);

        $this->checkinTime = $checkinTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|int|null
     */
    public function getNumAdults()
    {
        return $this->numAdults;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|int|null $numAdults
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumAdults($numAdults)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "int",
            "null",
        ];

        $numAdults = self::checkTypes($numAdults, $types);

        $this->numAdults = $numAdults;
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
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

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
        $types = [
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        ];

        $lodgingUnitType = self::checkTypes($lodgingUnitType, $types);

        $this->lodgingUnitType = $lodgingUnitType;
    }

}
