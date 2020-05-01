<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [OpeningHoursSpecification](https://schema.org/OpeningHoursSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The closing time.
     *
     * ```json
     * "closes": "17:00"
     * ```
     *
     * @var string|null
     */
    protected $closes;

    /**
     * Defines the day of the week upon which the Place is open
     *
     * ```json
     * "dayOfWeek": "https://schema.org/Monday"
     * ```
     *
     * @var \OpenActive\Enums\SchemaOrg\DayOfWeek|null
     */
    protected $dayOfWeek;

    /**
     * The opening time.
     *
     * ```json
     * "opens": "09:00"
     * ```
     *
     * @var string|null
     */
    protected $opens;

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

}
