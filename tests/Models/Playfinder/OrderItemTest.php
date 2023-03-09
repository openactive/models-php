<?php

namespace OpenActive\Models\Tests\Models\Playfinder;

use OpenActive\Models\Playfinder\OrderItem;
use PHPUnit\Framework\TestCase;

class OrderItemTest extends TestCase
{
    public function testDeserialise()
    {
        $orderItem = OrderItem::deserialize('{
          "@type": "playfinder:OrderItem",
          "position": 1,
          "orderQuantity": 1,
          "acceptedOffer": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603#offer",
          "orderedItem": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603",
          "beta:parentOrderItem": {
            "@type": "OrderItem",
            "position": 0
          }
        }');
        $this->assertInstanceOf(OrderItem::class, $orderItem);
        $this->assertEquals(1, $orderItem->getPosition());
        $this->assertEquals(1, $orderItem->getOrderQuantity());
        $this->assertInstanceOf(\OpenActive\Models\OA\OrderItem::class, $orderItem->getParentOrderItem());
        $this->assertEquals(0, $orderItem->getParentOrderItem()->getPosition());
    }

    public function testSerialise()
    {
        $orderItem = new OrderItem([
            'position' => 1,
            'orderQuantity' => 1,
            'acceptedOffer' => 'https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603#offer',
            'orderedItem' => 'https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603',
            'parentOrderItem' => new OrderItem([
                'position' => 0
            ])
        ]);
        $this->assertJsonStringEqualsJsonString('{
          "@type": "playfinder:OrderItem",
          "@context": [
              "https://openactive.io/",
              "https://openactive.io/ns-beta"
          ],
          "position": 1,
          "orderQuantity": 1,
          "acceptedOffer": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603#offer",
          "orderedItem": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603",
          "beta:parentOrderItem": {
            "@type": "playfinder:OrderItem",
            "position": 0
          }
        }', OrderItem::serialize($orderItem));
    }
}
