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
            "numAdults" => "numAdults",
            "lodgingUnitType" => "lodgingUnitType",
            "checkoutTime" => "checkoutTime",
            "lodgingUnitDescription" => "lodgingUnitDescription",
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
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|int|null
     */
    protected $numChildren;

    /**
     * The number of adults staying in the unit.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $numAdults;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
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
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|int|null $numChildren
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumChildren($numChildren)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "int",
            "null",
        ];

        $numChildren = self::checkTypes($numChildren, $types);

        $this->numChildren = $numChildren;
    }

    /**
     * @return int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getNumAdults()
    {
        return $this->numAdults;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $numAdults
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumAdults($numAdults)
    {
        $types = [
            "int",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $numAdults = self::checkTypes($numAdults, $types);

        $this->numAdults = $numAdults;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    public function getLodgingUnitType()
    {
        return $this->lodgingUnitType;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null $lodgingUnitType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLodgingUnitType($lodgingUnitType)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "null",
        ];

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
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

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
        $types = [
            "string",
        ];

        $lodgingUnitDescription = self::checkTypes($lodgingUnitDescription, $types);

        $this->lodgingUnitDescription = $lodgingUnitDescription;
    }

}
