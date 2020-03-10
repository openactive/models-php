<?php

namespace OpenActive\Helpers;

use \OpenActive\Exceptions\InvalidArgumentException;

/**
 * A class that represents a Date, somewhat DateTime'ey.
 */
class Date {
    const ISO8601_REGEX = "/^(?<year>\d{4})-(?<month>\d{1,2})-(?<day>\d{1,2})$/";

    /**
     * @var Integer $year The year
     * @var Integer $month The month
     * @var Integer $day The day
     */
    protected $year, $month, $day;

    public function __construct($year, $month, $day) {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    /**
     * @param int|string $year Year component of the date
     * @return $this
     */
    public function setYear($year) {
        $this->year = $year;
        return $this;
    }

    /**
     * @return int|string Year component of the date
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * @param int|string Month component of the date
     * @return $this
     */
    public function setMonth($month) {
        $this->month = $month;
        return $this;
    }

    /**
     * @return int|string Month component of the date
     */
    public function getMonth() {
        return $this->month;
    }

    /**
     * @param int|string Day component of the date
     * @return $this
     */
    public function setDay($day) {
        $this->day = $day;
        return $this;
    }

    /**
     * @return int|string Day component of the date
     */
    public function getDay() {
        return $this->day;
    }

    /**
     * @return string ISO8601 formatted string (YYYY-MM-DD)
     */
    public function toISO8601() {
        return "{$this->year}-{$this->month}-{$this->day}";
    }

    /**
     * @return \DateTime|false
     */
    public function toDateTime() {
        return \DateTime::createFromFormat('Y-m-d', $this->toISO8601());
    }

    /**
     * Returns date formatted according to given format
     * @param string $format <p>
     * Format accepted by  {@link https://secure.php.net/manual/en/function.date.php date()}.
     * </p>
     * @return string
     * Returns the formatted date string on success or <b>FALSE</b> on failure.
     *
     */
    public function format($format) {
        $dt = $this->toDateTime($format);

        return $dt->format($format);
    }

    /**
     * Sets the date
     * @link https://secure.php.net/manual/en/datetimeimmutable.setdate.php
     * @param int $year <p>Year of the date.</p>
     * @param int $month <p>Month of the date.</p>
     * @param int $day <p>Day of the date.</p>
     * @return static|false
     *
     */
    public function setDate($year, $month, $day) {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;

        return $this;
    }

    /**
     * @return string ISO8601 (YYYY-MM-DD) formatted date
     */
    public function __toString() {
        return $this->format('Y-m-d');
    }

    /**
     * @param \DateTime $dt DateTime object to be converted into a Date
     * @return Date
     */
    public static function createFromDateTime($dt) {
        $year = $dt->format('Y');
        $month = $dt->format('m');
        $day = $dt->format('d');

        return new self($year, $month, $day);
    }

    /**
     * @param \DateTime $iso ISO8601 string to be converted into a Date
     * @return Date
     */
    public static function createFromISO8601($iso) {
        $matches = null;
        if (!preg_match(self::ISO8601_REGEX, $iso, $matches)) {
            throw new InvalidArgumentException('Invalid ISO8601 date');
        }

        new self($matches['year'], $matches['month'], $matches['day']);
    }
}
