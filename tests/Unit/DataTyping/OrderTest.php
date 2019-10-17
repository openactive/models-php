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
    public function testTypeIsPopulatedCorrectly($order, $classname)
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
