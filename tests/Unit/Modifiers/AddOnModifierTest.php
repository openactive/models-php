<?php

namespace OpenActive\Models\Tests\Unit\Modifiers;

use OpenActive\Models\OA;
use OpenActive\Models\Playfinder\OrderItem;
use OpenActive\Modifiers\AddOnModifier;
use PHPUnit\Framework\TestCase;

class AddOnModifierTest extends TestCase
{
    public function testConvertsToPlayfinderModels()
    {
        $orderQuote = OA\OrderQuote::deserialize('{
          "@context": "https://openactive.io/",
          "@type": "OrderQuote",
          "orderedItem": [
            {
              "@type": "OrderItem",
              "position": 1,
              "orderQuantity": 1,
              "acceptedOffer": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603#offer",
              "orderedItem": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603",
              "beta:parentOrderItem": {
                "@type": "OrderItem",
                "position": 1
              }
            }
          ]
        }', [new AddOnModifier()]);
        $this->assertInstanceOf(OA\OrderQuote::class, $orderQuote);
        $this->assertCount(1, $orderQuote->getOrderedItem());
        $this->assertInstanceOf(OrderItem::class, $orderQuote->getOrderedItem()[0]);
        $this->assertInstanceOf(OA\OrderItem::class, $orderQuote->getOrderedItem()[0]->getParentOrderItem());
    }
}
