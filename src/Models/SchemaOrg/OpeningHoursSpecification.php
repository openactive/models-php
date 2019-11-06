<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OpeningHoursSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OpeningHoursSpecification";
    }

    /**
     * The date when the item becomes valid.
     *
     *
     * @var DateTime|null
     */
    protected $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var DateTime|null
     */
    protected $validThrough;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     *
     * @var string|null
     */
    protected $opens;

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     *
     * @var string|null
     */
    protected $closes;

    /**
     * The day of the week for which these opening hours are valid.
     *
     *
     * @var Schema.NET.DayOfWeek|null
     */
    protected $dayOfWeek;

    /**
     * @return DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param DateTime|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

    /**
     * @return string|null
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param string|null $opens
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpens($opens)
    {
        $types = array(
            "Time",
            "null",
        );

        $opens = self::checkTypes($opens, $types);

        $this->opens = $opens;
    }

    /**
     * @return string|null
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * @param string|null $closes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCloses($closes)
    {
        $types = array(
            "Time",
            "null",
        );

        $closes = self::checkTypes($closes, $types);

        $this->closes = $closes;
    }

    /**
     * @return Schema.NET.DayOfWeek|null
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param Schema.NET.DayOfWeek|null $dayOfWeek
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $types = array(
            "Schema.NET.DayOfWeek",
            "null",
        );

        $dayOfWeek = self::checkTypes($dayOfWeek, $types);

        $this->dayOfWeek = $dayOfWeek;
    }

}
