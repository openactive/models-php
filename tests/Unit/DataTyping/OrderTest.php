<?php

namespace Tests\Unit\DataTyping;

use PHPUnit\Framework\TestCase;

/**
 * Order specific Data Structure tests.
 *
 * @see https://github.com/openactive/models-lib/blob/master/test-description/data-structure.md For the test description
 */
class OrderTest extends TestCase
{
    /**
     * Test that types are populated correctly.
     * - Type of top-level object is "Order"
     * - Type of Order.orderedItem[0].orderedItem is "ScheduledSession"
     * - Type of Order.orderedItem[0].acceptedOffer is "Offer"
     * - Type of Order.orderedItem[0].acceptedOffer.activity is "Concept"
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderTypeIsPopulatedCorrectly($order, $classname)
    {
        $reflectOrder = new \ReflectionClass($order);
        $reflectOrderedItem = new \ReflectionClass($order->getOrderedItem()[0]->getOrderedItem());
        $reflectAcceptedOffer = new \ReflectionClass(
            $order->getOrderedItem()[0]->getAcceptedOffer()
        );
        $reflectActivity = new \ReflectionClass(
            $order->getOrderedItem()[0]->getOrderedItem()->getActivity()
        );

        $this->assertEquals("Order", $reflectOrder->getShortName());
        $this->assertEquals("ScheduledSession", $reflectOrderedItem->getShortName());
        $this->assertEquals("Offer", $reflectAcceptedOffer->getShortName());
        $this->assertEquals("Concept", $reflectActivity->getShortName());
    }

    /**
     * Test that Simple datatypes are correct.
     * Order.orderedItem.unitTaxSpecification.price is a Float
     * Order.orderedItem.orderedItem.name is a String
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderSimpleDatatypesAreCorrect($order, $classname)
    {
        $this->assertTrue(
            is_float(
                $order->getOrderedItem()[0]
                    ->getUnitTaxSpecification()[0]
                    ->getPrice()
            )
        );
        $this->assertTrue(
            is_string($order->getOrderedItem()[0]->getOrderedItem()->getName())
        );
    }

    /**
     * Test that Complex datatypes are correct.
     * - “activity” is a Concept
     * - “seller” is an Organization
     * - “bookingService” is a BookingService
     * - “orderItem” is an OrderItem
     *
     * @dataProvider orderProvider
     * @return void
     */
    public function testOrderComplexDatatypesAreCorrect($order, $classname)
    {
        $activity = $order->getOrderedItem()[0]->getOrderedItem()->getActivity();
        $seller = $order->getSeller();
        $bookingService = $order->getBookingService();
        $orderedItem = $order->getOrderedItem();

        // Reflection classes will be used to get the class's short name
        $activityReflect = new \ReflectionClass($activity);
        $sellerReflect = new \ReflectionClass($seller);
        $bookingServiceReflect = new \ReflectionClass($bookingService);
        $orderedItemReflect = new \ReflectionClass($orderedItem);

        $this->assertEquals(
            "Concept",
            $activityReflect->getShortName()
        );
        $this->assertEquals(
            "Organization",
            $sellerReflect->getShortName()
        );
        $this->assertEquals(
            "BookingService",
            $bookingServiceReflect->getShortName()
        );
        $this->assertEquals(
            "OrderItem",
            $orderedItemReflect->getShortName()
        );
    }

    /**
     * Returns an array of arrays.
     * Each item contains a classname and the JSON provided in the test description.
     * This data is automatically picked up by PHPUnit
     * whenever using a directive like "@dataProvider orderProvider"
     * in a test method PHP doc block.
     *
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
