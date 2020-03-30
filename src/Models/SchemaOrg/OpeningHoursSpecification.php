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
            "validFrom" => "validFrom",
            "validThrough" => "validThrough",
            "opens" => "opens",
            "closes" => "closes",
            "dayOfWeek" => "dayOfWeek",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date when the item becomes valid.
     *
     *
     * @var null|DateTime|Date
     */
    protected $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var null|DateTime|Date
     */
    protected $validThrough;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     *
     * @var null|string
     */
    protected $opens;

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     *
     * @var null|string
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
     * @return null|DateTime|Date
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param null|DateTime|Date $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param null|DateTime|Date $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

    /**
     * @return null|string
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param null|string $opens
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpens($opens)
    {
        $types = array(
            "null",
            "Time",
        );

        $opens = self::checkTypes($opens, $types);

        $this->opens = $opens;
    }

    /**
     * @return null|string
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * @param null|string $closes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCloses($closes)
    {
        $types = array(
            "null",
            "Time",
        );

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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DayOfWeek",
            "null",
        );

        $dayOfWeek = self::checkTypes($dayOfWeek, $types);

        $this->dayOfWeek = $dayOfWeek;
    }

}
