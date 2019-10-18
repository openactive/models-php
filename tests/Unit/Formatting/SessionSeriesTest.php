<?php

namespace Tests\Unit\Formatting;

use OpenActive\Helpers\DateTime as DateTimeHelper;
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

        $startDate = $sessionSeries->getSubEvent()->getStartDate();
        $endDate = $sessionSeries->getSubEvent()->getEndDate();

        $this->assertEquals(
            $decodedSessionSeries["subEvent"]["startDate"],
            DateTimeHelper::iso8601($startDate)
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
