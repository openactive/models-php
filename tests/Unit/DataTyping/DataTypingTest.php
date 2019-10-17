<?php

namespace Tests\Unit\DataTyping;

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
class DataTypingTest extends TestCase
{
    /**
     * Test that type is present and populated correctly.
     *
     * @return void
     */
    public function testTypeIsPresentAndCorrect()
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

        foreach($testData as $testItem) {
            // Get purely decoded JSON
            $decodedJson = json_decode($testItem[0], true);

            // Get the actual deserialized then serialized, JSON-decoded data
            $serializedData = json_decode(
                $testItem[1]::serialize(
                    $testItem[1]::deserialize($testItem[0])
                ),
                true
            );

            $this->assertTrue(array_key_exists("type", $serializedData));
            $this->assertTrue(empty($serializedData["type"]) === FALSE);
            $this->assertEquals($decodedJson["type"], $serializedData["type"]);
        }
    }

    /**
     * Test that null values are absent.
     *
     * @dataProvider jsonProvider
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
     * @dataProvider jsonProvider
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
     * @dataProvider jsonProvider
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
     * @var \OpenActive\Model\SessionSeries
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
