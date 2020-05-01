<?php

namespace OpenActive\Models\Tests\Unit\Formatting;

use OpenActive\Helpers\DateTime as DateTimeHelper;
use OpenActive\Helpers\DateInterval as DateIntervalHelper;
use OpenActive\Models\OA\Event;
use OpenActive\Models\OA\PartialSchedule;
use OpenActive\Models\OA\Schedule;
use PHPUnit\Framework\TestCase;

/**
 * Date specific Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/formatting.md For the test description
 */
class DateTest extends TestCase
{
    function testPartialSchedule()
    {
        $schedule = new PartialSchedule(["startDate" => "2019-11-29"]);

        $serialized = PartialSchedule::toArray($schedule);

        $expected = [
            "@type" => "PartialSchedule",
            "@context" => [
                "https://openactive.io/",
                "https://openactive.io/ns-beta"
            ],
            "startDate" => "2019-11-29"
        ];

        $this->assertEquals($expected, $serialized);
    }

    function testSchedule() {
        $schedule = new Schedule(["startDate" => "2019-11-29"]);

        $serialized = Schedule::toArray($schedule);

        $expected = [
            "@type" => "Schedule",
            "@context" => [
                "https://openactive.io/",
                "https://openactive.io/ns-beta"
            ],
            "startDate" => "2019-11-29"
        ];

        $this->assertEquals($expected, $serialized);
    }

    function testSetSchedule() {
        $schedule = new Schedule([]);
        $schedule->setStartDate("2019-11-29");

        $serialized = Schedule::toArray($schedule);

        $expected = [
            "@type" => "Schedule",
            "@context" => [
                "https://openactive.io/",
                "https://openactive.io/ns-beta"
            ],
            "startDate" => "2019-11-29"
        ];

        $this->assertEquals($expected, $serialized);
    }

    function testEventDate() {
        $schedule = new Event(["startDate" => "2019-11-29"]);

        print_r($schedule);

        $serialized = Event::toArray($schedule);

        $expected = [
            "@type" => "Event",
            "@context" => [
                "https://openactive.io/",
                "https://openactive.io/ns-beta"
            ],
            "startDate" => "2019-11-29"
        ];

        $this->assertEquals($expected, $serialized);
    }

    function testEventDateTime() {
        $schedule = new Event(["startDate" => "2019-11-29T10:00:00Z"]);

        print_r($schedule);

        $serialized = Event::toArray($schedule);

        $expected = [
            "@type" => "Event",
            "@context" => [
                "https://openactive.io/",
                "https://openactive.io/ns-beta"
            ],
            "startDate" => "2019-11-29T10:00:00Z"
        ];

        $this->assertEquals($expected, $serialized);
    }
}
