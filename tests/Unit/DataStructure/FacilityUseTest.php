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
 * FacilityUse specific Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/data-structure.md For the test description
 */
class FacilityUseTest extends TestCase
{
    /**
     * Test that FacilityUse.event exists and is an array.
     *
     * @dataProvider facilityUseProvider
     * @return void
     */
    public function testFacilityUseEventExistsAndIsArray($model, $classname)
    {
        $this->assertTrue($model->getEvent() !== null);
        $this->assertTrue(is_array($model->getEvent()));
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
     * @dataProvider facilityUseProvider
     * @return void
     */
    public function testFacilityUseHasCorrectProperties($model, $classname)
    {
        $correctProperties = array(
            "@type",
            "url",
            "name",
            "description",
            "activity",
            "provider",
            "location",
            "offers",
            "event",
        );

        sort($correctProperties);

        // Serialize the model and JSON-decode it
        // to compare the expected properties
        // and the ones in common (with "@context" removed)
        // TODO: should this be analyzed with getters and setters instead?
        $serializedFacilityUse = json_decode($classname::serialize($model), true);
        $serializedFacilityUseProperties = array_filter(
            array_keys($serializedFacilityUse),
            function($property) {
                return $property !== "@context";
            }
        );
        sort($serializedFacilityUseProperties);
        $commonProperties = array_intersect($correctProperties, $serializedFacilityUseProperties);

        // Assert unitTaxSpecification exists
        $this->assertEquals(
            $correctProperties,
            $commonProperties
        );
    }

    /**
     * @return array
     */
    public function facilityUseProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\FacilityUse";

        $data[0] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../facility_use.json")
            ),
            $classname
        );

        return $data;
    }
}
