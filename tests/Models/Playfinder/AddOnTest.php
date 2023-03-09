<?php

namespace OpenActive\Models\Tests\Unit\Playfinder;

use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\PriceSpecification;
use OpenActive\Models\OA\QuantitativeValue;
use OpenActive\Models\Playfinder\AddOn;
use PHPUnit\Framework\TestCase;

class AddOnTest extends TestCase
{
    public function testDeserialises()
    {
        $addOn = AddOn::deserialize('{
            "@id": "https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944",
            "@type": "playfinder:AddOn",
            "@context": [
                "https://openactive.io/",
                "https://openactive.io/ns-beta"
            ],
            "name": "Junior Racket Hire",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "eligibleQuantity": {
                    "@type": "QuantitativeValue",
                    "minValue": 0,
                    "maxValue": 4
                }
            },
            "offers": [
                {
                    "@type": "Offer",
                    "@id": "https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944#offer",
                    "priceCurrency": "GBP",
                    "price": 10.3
                }
            ]
        }');
        $this->assertInstanceOf(AddOn::class, $addOn);
        $this->assertEquals('Junior Racket Hire', $addOn->getName());
        $this->assertEquals(0, $addOn->getPriceSpecification()->getEligibleQuantity()->getMinValue());
        $this->assertEquals(4, $addOn->getPriceSpecification()->getEligibleQuantity()->getMaxValue());
        $this->assertCount(1, $addOn->getOffers());
        $this->assertEquals(10.3, $addOn->getOffers()[0]->getPrice());
    }
    public function testSerialises()
    {
        $addOn = new AddOn([
            'id' => 'https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944',
            'name' => 'Junior Racket Hire',
            'priceSpecification' => new PriceSpecification([
                'eligibleQuantity' => new QuantitativeValue([
                    'minValue' => 0,
                    'maxValue' => 4,
                ])
            ]),
            'offers' => [new Offer([
                'id' => 'https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944#offer',
                'priceCurrency' => 'GBP',
                'price' => 10.3
            ])]
        ]);
        $this->assertJsonStringEqualsJsonString('{
            "@id": "https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944",
            "@type": "playfinder:AddOn",
            "@context": [
                "https://openactive.io/",
                "https://openactive.io/ns-beta"
            ],
            "name": "Junior Racket Hire",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "eligibleQuantity": {
                    "@type": "QuantitativeValue",
                    "minValue": 0,
                    "maxValue": 4
                }
            },
            "offers": [
                {
                    "@type": "Offer",
                    "@id": "https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944#offer",
                    "priceCurrency": "GBP",
                    "price": 10.3
                }
            ]
        }', AddOn::serialize($addOn));
    }
}
