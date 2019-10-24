<?php

namespace OpenActive\Models\Tests\Unit\Accessors;

use PHPUnit\Framework\TestCase;

/**
 * Event specific Serialisation and Accessors tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/serialisation-and-accessors.md For the test description
 */
class EventTest extends TestCase
{
    /**
     * Test Accessors return values appropriately.
     * Event example
     * - Accessor for Event.location.address.addressRegion returns correct value
     *
     * @dataProvider eventProvider
     * @return void
     */
    public function testEventAccessorsReturnProperValues($jsonEvent, $classname)
    {
        // JSON Decode the string so we can access it as a simple data structure
        $decodedJsonEvent = json_decode($jsonEvent, true);

        // Deserialize JSON-LD string so the data structure is this library's format
        $event = $classname::deserialize($jsonEvent);

        // Accessor for Event.location.address.addressRegion returns correct value
        $this->assertEquals(
            $decodedJsonEvent["location"]["address"]["addressRegion"],
            $event->getLocation()->getAddress()->getAddressRegion()
        );
    }

    /**
     * @return array
     */
    public function eventProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\Event";

        $data[0] = array(
            file_get_contents(__DIR__ . "/../event.json"),
            $classname
        );

        return $data;
    }
}
