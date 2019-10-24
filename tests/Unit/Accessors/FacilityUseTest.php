<?php

namespace OpenActive\Models\Tests\Unit\Accessors;

use OpenActive\Helpers\DateTime as DateTimeHelper;
use PHPUnit\Framework\TestCase;

/**
 * FacilityUse specific Serialisation and Accessors tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/serialisation-and-accessors.md For the test description
 */
class FacilityUseTest extends TestCase
{
    /**
     * Test Accessors return values appropriately.
     * Slots (FacilityUse) example
     * - Accessor for FacilityUse.location.name returns correct value
     * - Accessor for FacilityUse.event[0].startDate returns correct value
     *
     * @dataProvider facilityUseProvider
     * @return void
     */
    public function testFacilityUseAccessorsReturnProperValues($jsonFacilityUse, $classname)
    {
        // JSON Decode the string so we can access it as a simple data structure
        $decodedJsonFacilityUse = json_decode($jsonFacilityUse, true);

        // Deserialize JSON-LD string so the data structure is this library's format
        $facilityUse = $classname::deserialize($jsonFacilityUse);

        // Accessor for FacilityUse.location.name returns correct value
        $this->assertEquals(
            $decodedJsonFacilityUse["location"]["name"],
            $facilityUse->getLocation()->getName()
        );

        // Accessor for FacilityUse.event[0].startDate returns correct value
        $this->assertEquals(
            $decodedJsonFacilityUse["event"][0]["startDate"],
            DateTimeHelper::iso8601($facilityUse->getEvent()[0]->getStartDate())
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
            file_get_contents(__DIR__ . "/../facility_use.json"),
            $classname
        );

        return $data;
    }
}
