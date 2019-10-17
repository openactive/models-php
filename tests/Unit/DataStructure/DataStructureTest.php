<?php

namespace Tests\Unit\DataStructure;

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
 * Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/data-structure.md For the test description
 */
class DataStructureTest extends TestCase
{
    /**
     * Test that object is single, not array.
     *
     * @dataProvider jsonProvider
     * @return void
     */
    public function testObjectIsSingleNotArray($data, $classname)
    {
        $this->assertTrue(is_object(new $classname($data)));
    }

    /**
     * Test if beta properties are included,
     * @context is an array,
     * and also includes the value "https://openactive.io/ns-beta".
     *
     * @dataProvider jsonProvider
     * @return void
     */
    public function testContextIsArrayAndContainsOpenActiveBeta($data, $classname)
    {
        $this->assertTrue(is_array($classname::$context));
        $this->assertTrue(
            array_search(
                "https://openactive.io/ns-beta", $classname::$context
            ) !== FALSE
        );
    }

    /**
     * @var \OpenActive\Model\SessionSeries
     */
    public function jsonProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\Event";

        $data[0] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../event.json")
            ),
            $classname
        );

        $classname = "\\OpenActive\\Models\\OA\\FacilityUse";

        $data[1] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../facility_use.json")
            ),
            $classname
        );

        $classname = "\\OpenActive\\Models\\OA\\Order";

        $data[2] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../order.json")
            ),
            $classname
        );

        return $data;
    }
}
