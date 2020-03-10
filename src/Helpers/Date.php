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

    public function setYear($year) {
        $this->year = $year;
        return $this;
    }

    public function getYear() {
        return $this->year;
    }

    public function setMonth($month) {
        $this->month = $month;
        return $this;
    }

    public function getMonth() {
        return $this->month;
    }

    public function setDay($day) {
        $this->day = $day;
        return $this;
    }

    public function getDay() {
        return $this->day;
    }

    public function toISO8601() {
        return "{$this->year}-{$this->month}-{$this->day}";
    }

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

    public function __toString() {
        return $this->format('Y-m-d');
    }

    public static function createFromDateTime($dt) {
        $year = $dt->format('Y');
        $month = $dt->format('m');
        $day = $dt->format('d');

        return new self($year, $month, $day);
    }

    public static function createFromISO8601($iso) {
        $matches = null;
        if (!preg_match(self::ISO8601_REGEX, $iso, $matches)) {
            throw new InvalidArgumentException('Invalid ISO8601 date');
        }

        new self($matches['year'], $matches['month'], $matches['day']);
    }
}
