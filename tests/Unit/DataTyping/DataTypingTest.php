<?php

namespace OpenActive\Models\Tests\Unit\DataTyping;

use PHPUnit\Framework\TestCase;

/**
 * Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/datatyping.md For the test description
 */
class DataTypingTest extends TestCase
{
    /**
     * Test that type is present and populated correctly.
     *
     * @dataProvider thingProvider
     * @return void
     */
    public function testTypeIsPresentAndCorrect($json, $classname)
    {
        // Get purely decoded JSON
        $decodedJson = json_decode($json, true);

        // Get the actual deserialized then serialized, JSON-decoded data
        $serializedData = json_decode(
            $classname::serialize(
                $classname::deserialize($json)
            ),
            true
        );

        $this->assertTrue(array_key_exists("@type", $serializedData));
        $this->assertTrue(empty($serializedData["@type"]) === FALSE);
        $this->assertEquals($decodedJson["@type"], $serializedData["@type"]);
    }

    /**
     * Test that null values are absent.
     *
     * @dataProvider deserializedThingProvider
     * @return void
     */
    public function testNullValuesAreAbsent($thing, $classname)
    {
        $serializedData = json_decode($classname::serialize($thing), true);

        $nullValues = array_filter(
            array_values($serializedData),
            function($value) {
                return $value === null;
            }
        );

        $this->assertTrue(count($nullValues) === 0);
    }

    /**
     * Test that empty strings are absent.
     *
     * @dataProvider deserializedThingProvider
     * @return void
     */
    public function testEmptyStringsAreAbsent($thing, $classname)
    {
        $serializedData = json_decode($classname::serialize($thing), true);

        $emptyValues = array_filter(
            array_values($serializedData),
            function($value) {
                return $value === "";
            }
        );

        $this->assertTrue(count($emptyValues) === 0);
    }

    /**
     * Test that empty strings are absent.
     *
     * @dataProvider deserializedThingProvider
     * @return void
     */
    public function testEmptyArraysAreAbsent($thing, $classname)
    {
        $serializedData = json_decode($classname::serialize($thing), true);

        $emptyValues = array_filter(
            array_values($serializedData),
            function($value) {
                return is_array($value) === TRUE && count($value) === 0;
            }
        );

        $this->assertTrue(count($emptyValues) === 0);
    }

    /**
     * Returns an array of arrays.
     * Each item contains a classname and the deserialized representation
     * of the JSON provided in the test description.
     * This data is automatically picked up by PHPUnit
     * whenever using a directive like "@dataProvider deserializedThingProvider"
     * in a test method PHP doc block.
     *
     * @return array[]
     */
    public function deserializedThingProvider()
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

    /**
     * Returns an array of arrays.
     * Each item contains a classname and the JSON provided in the test description.
     * This data is automatically picked up by PHPUnit
     * whenever using a directive like "@dataProvider thingProvider"
     * in a test method PHP doc block.
     *
     * @return array[]
     */
    public function thingProvider()
    {
        $testData = array();

        $classname = "\\OpenActive\\Models\\OA\\Event";

        $testData[0] = array(
            file_get_contents(__DIR__ . "/../event.json"),
            $classname
        );

        $classname = "\\OpenActive\\Models\\OA\\FacilityUse";

        $testData[1] = array(
            file_get_contents(__DIR__ . "/../facility_use.json"),
            $classname
        );

        $classname = "\\OpenActive\\Models\\OA\\Order";

        $testData[2] = array(
            file_get_contents(__DIR__ . "/../order.json"),
            $classname
        );

        return $testData;
    }
}
