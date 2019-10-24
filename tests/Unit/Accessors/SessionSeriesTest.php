<?php

namespace OpenActive\Models\Tests\Unit\Accessors;

use OpenActive\Helpers\DateTime as DateTimeHelper;
use PHPUnit\Framework\TestCase;

/**
 * SessionSeries specific Serialisation and Accessors tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/serialisation-and-accessors.md For the test description
 */
class SessionSeriesTest extends TestCase
{
    /**
     * Test Accessors return values appropriately.
     * SessionSeries example
     * - Accessor for SessionSeries.startDate returns correct value
     * - Accessor for SessionSeries.subEvent.name returns correct value
     *
     * @dataProvider sessionSeriesProvider
     * @return void
     */
    public function testSessionSeriesAccessorsReturnProperValues($jsonSessionSeries, $classname)
    {
        // JSON Decode the string so we can access it as a simple data structure
        $decodedJsonSessionSeries = json_decode($jsonSessionSeries, true);

        // Deserialize JSON-LD string so the data structure is this library's format
        $sessionSeries = $classname::deserialize($jsonSessionSeries);

        // Accessor for SessionSeries.startDate returns correct value
        $this->assertEquals(
            $decodedJsonSessionSeries["startDate"],
            DateTimeHelper::iso8601($sessionSeries->getStartDate(), true)
        );

        // Accessor for SessionSeries.subEvent.name returns correct value
        $this->assertEquals(
            $decodedJsonSessionSeries["subEvent"]["name"],
            $sessionSeries->getSubEvent()->getName()
        );
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
