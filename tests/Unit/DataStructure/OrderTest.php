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
 * Order specific Data Structure tests.
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
    public function testOrderOrderedItemOrderedItemExists($model, $classname)
    {
        $this->assertTrue($model->getOrderedItem() !== null);
        $this->assertTrue(is_array($model->getOrderedItem()));
        $this->assertTrue(
            $model->getOrderedItem()[0]->getOrderedItem() !== null
        );
    }

    /**
     * Test that Order.orderedItem.acceptedOffer exists.
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderOrderedItemAcceptedOfferExists($model, $classname)
    {
        $this->assertTrue(
            $model->getOrderedItem()[0]->getAcceptedOffer() !== null
        );
    }

    /**
     * Test that Order.orderedItem.unitTaxSpecification exists.
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderOrderedItemUnitTaxSpecificationExistsAndArray($model, $classname)
    {
        // Assert unitTaxSpecification exists
        $this->assertTrue(
            $model->getOrderedItem()[0]->getUnitTaxSpecification() !== null
        );

        // Assert unitTaxSpecification is array/object
        $this->assertTrue(
            is_array($model->getOrderedItem()[0]->getUnitTaxSpecification())
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
    public function testOrderHasCorrectProperties($model, $classname)
    {
        $correctProperties = array(
            "@type",
            "@id",
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

        // Serialize the model and JSON-decode it
        // to compare the expected properties
        // and the ones in common (with "@context" removed)
        // TODO: should this be analyzed with getters and setters instead?
        $serializedOrder = json_decode($classname::serialize($model), true);
        $serializedOrderProperties = array_filter(
            array_keys($serializedOrder),
            function($property) {
                return $property !== "@context";
            }
        );
        sort($serializedOrderProperties);
        $commonProperties = array_intersect($correctProperties, $serializedOrderProperties);

        // Assert unitTaxSpecification exists
        $this->assertEquals(
            $correctProperties,
            $commonProperties
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
