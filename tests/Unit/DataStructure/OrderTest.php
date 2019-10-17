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
 * SessionSeries specific Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/data-structure.md For the test description
 */
class OrderTest extends TestCase
{
    /**
     * Test that Order.orderedItem.orderedItem exists.
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderOrderedItemOrderedItemExists($data, $classname)
    {
        $order = new $classname($data);

        $this->assertTrue(
            $order->getOrderedItem()->getOrderedItem() !== null
        );
    }

    /**
     * Test that Order.orderedItem.acceptedOffer exists.
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderOrderedItemAcceptedOfferExists($data, $classname)
    {
        $order = new $classname($data);

        $this->assertTrue(
            $order->getOrderedItem()->getAcceptedOffer() !== null
        );
    }

    /**
     * Test that Order.orderedItem.unitTaxSpecification exists.
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderOrderedItemUnitTaxSpecificationExistsAndArray($data, $classname)
    {
        $order = new $classname($data);

        // Assert unitTaxSpecification exists
        $this->assertTrue(
            $order->getOrderedItem()->getUnitTaxSpecification() !== null
        );

        // Assert unitTaxSpecification is array
        $this->assertTrue(
            is_array($order->getOrderedItem()->getUnitTaxSpecification())
        );
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
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderHasCorrectProperties($data, $classname)
    {
        $correctProperties = array(
          "type",
          "id",
          "orderedItem",
          "seller",
          "broker",
          "brokerRole",
          "customer",
          "taxCalculationExcluded",
          "bookingService",
          "totalPaymentDue",
        );

        sort($correctProperties);

        $order = new $classname($data);

        // Serialize the order and JSON-decode it
        // to compare the expected properties
        // and the ones actually available (with "@context" removed)
        // TODO: should this be analyzed with getters and setters instead?
        $serializedOrder = json_decode($classname::serialize($order), true);
        $serializedOrderProperties = array_filter(
            array_keys($serializedOrder),
            function($property) {
                return $property !== "@context";
            }
        );

        sort($serializedOrderProperties);

        // Assert unitTaxSpecification exists
        $this->assertEquals(
            $correctProperties,
            $serializedOrderProperties
        );

        // Assert unitTaxSpecification is array
        $this->assertTrue(
            is_array($order->getOrderedItem()->getUnitTaxSpecification())
        );
    }

    /**
     * @return array
     */
    public function orderProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\Order";

        $data[0] = array(
            $classname::deserialize(
                file_get_contents(__DIR__ . "/../order.json")
            ),
            $classname
        );

        return $data;
    }
}
