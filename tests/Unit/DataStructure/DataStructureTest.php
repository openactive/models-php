<?php

namespace Tests\Unit\DataStructure;

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
     * Returns an array of arrays.
     * Each item contains a classname and the deserialized representation
     * of the JSON provided in the test description.
     * This data is automatically picked up by PHPUnit
     * whenever using a directive like "@dataProvider jsonProvider"
     * in a test method PHP doc block.
     *
     * @return array[]
     */
    public function jsonProvider()
    {
        $testData = array();

        $classname = "\\OpenActive\\Models\\OA\\Event";

        $testData[0] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../event.json")
            ),
            $classname
        );

        $classname = "\\OpenActive\\Models\\OA\\FacilityUse";

        $testData[1] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../facility_use.json")
            ),
            $classname
        );

        $classname = "\\OpenActive\\Models\\OA\\Order";

        $testData[2] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../order.json")
            ),
            $classname
        );

        return $testData;
    }
}
