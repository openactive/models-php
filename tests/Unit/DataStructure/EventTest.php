<?php

namespace OpenActive\Models\Tests\Unit\DataStructure;

use OpenActive\BaseModel;
use OpenActive\Models\OA\Concept;
use OpenActive\Models\OA\ImageObject;
use OpenActive\Models\OA\IndicativeOffer;
use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\Place;
use OpenActive\Models\OA\PostalAddress;
use OpenActive\Models\OA\SessionSeries;
use PHPUnit\Framework\TestCase;

/**
 * Event specific Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/data-structure.md For the test description
 */
class EventTest extends TestCase
{
    /**
     * Test that Event.attendeeinstructions exists.
     *
     * @dataProvider eventProvider
     * @return void
     */
    public function testEventAttendeeInstructionsExists($data, $classname)
    {
        $event = new $classname($data);

        $this->assertTrue($event->getAttendeeInstructions() !== null);
    }

    /**
     * Test that has the correct properties.
     * These should be
     * - type
     * - id
     * - orderedItem
     * - seller
     * - broker
     * - brokerRole
     * - ustomer
     * - taxCalculationExcluded
     * - bookingService
     * - totalPaymentDue
     *
     * @dataProvider eventProvider
     * @return void
     */
    public function testEventHasCorrectProperties($data, $classname)
    {
        $correctProperties = array(
            "type",
            "url",
            "name",
            "activity",
            "description",
            "attendeeInstructions",
            "startDate",
            "duration",
            "organizer",
            "location",
        );

        sort($correctProperties);

        $order = new $classname($data);

        // Serialize the order and JSON-decode it
        // to compare the expected properties
        // and the ones in common (with "@context" removed)
        // TODO: should this be analyzed with getters and setters instead?
        $serializedEvent = json_decode($classname::serialize($order), true);
        $serializedEventProperties = array_filter(
            array_keys($serializedEvent),
            function($property) {
                return $property !== "@context";
            }
        );
        sort($serializedEventProperties);
        $commonProperties = array_intersect($correctProperties, $serializedEventProperties);

        // Assert unitTaxSpecification exists
        $this->assertEquals(
            $correctProperties,
            $commonProperties
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
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../event.json")
            ),
            $classname
        );

        return $data;
    }
}
