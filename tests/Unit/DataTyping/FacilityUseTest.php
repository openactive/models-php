<?php

namespace OpenActive\Models\Tests\Unit\DataTyping;

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
 * @see https://github.com/openactive/models-lib/blob/master/test-description/datatyping.md For the test description
 */
class FacilityUseTest extends TestCase
{
    /**
     * Test that types are populated correctly.
     *
     *
     * @dataProvider facilityUseProvider
     * @return void
     */
    public function testFacilityUseTypeIsPopulatedCorrectly($facilityUse, $classname)
    {
        $reflectEvent = new \ReflectionClass($facilityUse->getEvent()[0]);
        $reflectAddress = new \ReflectionClass($facilityUse->getLocation()->getAddress());

        $this->assertEquals("Slot", $reflectEvent->getShortName());
        $this->assertEquals("PostalAddress", $reflectAddress->getShortName());
    }

    /**
     * Test that Simple datatypes are correct.
     * - FacilityUse.event[1].remainingUses is an Integer
     * - FacilityUse.event[1].maximumUses is an Integer
     *
     * @dataProvider facilityUseProvider
     * @return void
     */
    public function testFacilityUseSimpleDatatypesAreCorrect($facilityUse, $classname)
    {
        $this->assertTrue(is_int($facilityUse->getEvent()[1]->getRemainingUses()));
        $this->assertTrue(is_int($facilityUse->getEvent()[1]->getMaximumUses()));
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
