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

    public static function fieldList() {
        $fields = [
            "closes" => "closes",
            "dayOfWeek" => "dayOfWeek",
            "validFrom" => "validFrom",
            "opens" => "opens",
            "validThrough" => "validThrough",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|null
     */
    protected $dayOfWeek;

    /**
     * The date when the item becomes valid.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validFrom;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     *
     * @var string|null
     */
    protected $opens;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var Date|DateTime|null
     */
    protected $validThrough;

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
        $types = [
            "Time",
            "null",
        ];

        $closes = self::checkTypes($closes, $types);

        $this->closes = $closes;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DayOfWeek|null
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DayOfWeek|null $dayOfWeek
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "null",
        ];

        $dayOfWeek = self::checkTypes($dayOfWeek, $types);

        $this->dayOfWeek = $dayOfWeek;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param Date|DateTime|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
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
        $types = [
            "Time",
            "null",
        ];

        $opens = self::checkTypes($opens, $types);

        $this->opens = $opens;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param Date|DateTime|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

}
