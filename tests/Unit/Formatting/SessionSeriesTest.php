<?php

namespace Tests\Unit\Formatting;

use OpenActive\Helpers\DateTime as DateTimeHelper;
use OpenActive\Helpers\DateInterval as DateIntervalHelper;
use PHPUnit\Framework\TestCase;

/**
 * SessionSeries specific Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/data-structure.md For the test description
 */
class SessionSeriesTest extends TestCase
{
    /**
     * Test that date and time are in correct format.
     * - SessionSeries.subEvent.startDate in correct ISO-8601 format
     * - SessionSeries.subEvent.endDate in correct ISO-8601 format
     * - SessionSeries.duration
     *  - Matches subEvent.startDate and subEvent.endDate difference
     *  - In correct ISO-8601 format
     * As PHP representation of a DateTime is an object, tests are run to check
     * that a DateTime ISO 8601 representations are identical
     * to the pre-deserialization ones.
     *
     * @dataProvider sessionSeriesProvider
     * @return void
     */
    public function testSessionSeriesDateTimeInCorrectFormat($jsonSessionSeries, $classname)
    {
        $decodedSessionSeries = json_decode($jsonSessionSeries, true);

        $sessionSeries = $classname::deserialize($jsonSessionSeries);

        // Sub event start date
        $startDate = $sessionSeries->getSubEvent()->getStartDate();
        // Sub event end date
        $endDate = $sessionSeries->getSubEvent()->getEndDate();
        // Duration (of sub event)
        $duration = $sessionSeries->getDuration();
        // Date difference between sub event start date and end date
        $dateDifference = $startDate->diff($endDate);

        // Check start date deserialized is same as original payload
        $this->assertEquals(
            $decodedSessionSeries["subEvent"]["startDate"],
            DateTimeHelper::iso8601($startDate)
        );

        // Check end date deserialized is same as original payload
        $this->assertEquals(
            $decodedSessionSeries["subEvent"]["endDate"],
            DateTimeHelper::iso8601($endDate)
        );

        // Check duration deserialized is same as original payload
        $this->assertEquals(
            $decodedSessionSeries["duration"],
            DateIntervalHelper::specString($duration)
        );

        // Check duration field is same as difference between start and end date
        $this->assertEquals(
            DateIntervalHelper::specString($duration),
            DateIntervalHelper::specString($dateDifference)
        );
    }

    /**
     * Test are URLs are in correct format.
     * - SessionSeries.id
     * - SessionSeries.activity
     * - SessionSeries.subEvent.url
     * As PHP represents a URL as a string (no dedicated type),
     * tests are run to check that URL representations are identical
     * to the pre-deserialization ones, and are valid URLs.
     *
     * @dataProvider sessionSeriesProvider
     * @return void
     */
    public function testSessionSeriesUrlsInCorrectFormat($jsonSessionSeries, $classname)
    {
        $decodedSessionSeries = json_decode($jsonSessionSeries, true);

        $sessionSeries = $classname::deserialize($jsonSessionSeries);

        $id = $sessionSeries->getId();
        $activityId = $sessionSeries->getActivity()->getId();
        $subEventUrl = $sessionSeries->getSubEvent()->getUrl();

        // Deserialization checks (deserialised value is same as JSON)
        $this->assertEquals(
            $decodedSessionSeries["id"],
            $id
        );
        $this->assertEquals(
            $decodedSessionSeries["activity"]["id"],
            $activityId
        );
        $this->assertEquals(
            $decodedSessionSeries["subEvent"]["url"],
            $subEventUrl
        );
    }

    /**
     * @return array
     */
    public function deserializedSessionSeriesProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\SessionSeries";

        $data[0] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../session_series-fencing.json")
            ),
            $classname
        );

        return $data;
    }

    /**
     * @return array
     */
    public function sessionSeriesProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\SessionSeries";

        $data[0] = array(
            file_get_contents(__DIR__ . "/../session_series-fencing.json"),
            $classname
        );

        return $data;
    }
}
