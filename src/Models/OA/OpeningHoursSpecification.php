<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/OpeningHoursSpecification, which means that any of this type's properties within schema.org may also be used.
 *
 */
class OpeningHoursSpecification extends \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OpeningHoursSpecification";
    }

    public static function fieldList() {
        $fields = [
            "closes" => "closes",
            "dayOfWeek" => "dayOfWeek",
            "opens" => "opens",
            "validFrom" => "validFrom",
            "validThrough" => "validThrough",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The closing time. Set "00:00" for the value of `opens` and `closes` to indicated the `Place` is closed on the specified days.
     *
     * ```json
     * "closes": "17:00"
     * ```
     *
     * @var string|null
     */
    protected $closes;

    /**
     * Defines the days of the week upon which the `opens` and `closes` values are specified. Note this property is optional when used within `specialOpeningHoursSpecification`.
     *
     * ```json
     * "dayOfWeek": [
     *   "https://schema.org/Saturday",
     *   "https://schema.org/Sunday"
     * ]
     * ```
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek[]|null
     */
    protected $dayOfWeek;

    /**
     * The opening time. Set "00:00" for the value of `opens` and `closes` to indicated the `Place` is closed on the specified days.
     *
     * ```json
     * "opens": "09:00"
     * ```
     *
     * @var string|null
     */
    protected $opens;

    /**
     * The date when the item becomes valid. The item will be valid at the beginning of the specified day. Note this property is required when used within `specialOpeningHoursSpecification`.
     *
     * ```json
     * "validFrom": "2018-01-22"
     * ```
     *
     * @var Date|null
     */
    protected $validFrom;

    /**
     * The date after which the item is no longer valid. The item will cease to be valid at the end of the specified day. Note this property is required when used within `specialOpeningHoursSpecification`.
     *
     * ```json
     * "validThrough": "2018-01-27"
     * ```
     *
     * @var Date|null
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
     * @return \OpenActive\Enums\SchemaOrg\DayOfWeek[]|null
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DayOfWeek[]|null $dayOfWeek
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DayOfWeek[]",
            "null",
        ];

        $dayOfWeek = self::checkTypes($dayOfWeek, $types);

        $this->dayOfWeek = $dayOfWeek;
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
     * @return Date|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param Date|null $validFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = [
            "Date",
            "null",
        ];

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return Date|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param Date|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = [
            "Date",
            "null",
        ];

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

}
