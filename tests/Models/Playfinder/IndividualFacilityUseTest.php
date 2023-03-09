<?php

namespace OpenActive\Models\Tests\Models\Playfinder;

use OpenActive\Enums\PropertyEnumeration\Provider;
use OpenActive\Models\OA\Concept;
use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\Organization;
use OpenActive\Models\OA\PriceSpecification;
use OpenActive\Models\OA\QuantitativeValue;
use OpenActive\Models\Playfinder\AddOn;
use OpenActive\Models\Playfinder\IndividualFacilityUse;
use PHPUnit\Framework\TestCase;

class IndividualFacilityUseTest extends TestCase
{
    public function testDeserialises()
    {
        $facility = IndividualFacilityUse::deserialize('{
            "@id": "https://example.com/api/openactive/individual-facility-uses/d7fb4341-756a-41a8-ad17-4b8f6b574bb6",
            "@type": "playfinder:IndividualFacilityUse",
            "@context": [
              "https://openactive.io/",
              "https://openactive.io/ns-beta"
            ],
            "identifier": "d7fb4341-756a-41a8-ad17-4b8f6b574bb6",
            "name": "Football 11-a-side",
            "url": "https://example.com/api/openactive/individual-facility-uses/d7fb4341-756a-41a8-ad17-4b8f6b574bb6",
            "activity": [
              {
                "@type": "Concept",
                "@id": "https://openactive.io/activity-list#117e7f70-6c42-4b1f-a3bb-620b63ea263l",
                "inScheme": "https://openactive.io/activity-list",
                "prefLabel": "11-a-side"
              }
            ],
            "beta:addOns": [{
              "@id": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603",
              "@type": "playfinder:AddOn",
              "name": "Adult Racket Hire",
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
                  "@id": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603#offer",
                  "priceCurrency": "GBP",
                  "price": 1.5
                }
              ]
            }, {
              "@id": "https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944",
              "@type": "playfinder:AddOn",
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
                  "price": 0
                }
              ]
            }],
            "provider": {
              "@type": "Organization",
              "@id": "https://example.com/api/venues/fe30c0e1-b4f9-4226-9fd8-3ddb230edd9f",
              "name": "Sundridge Park Lawn Tennis & Squash Rackets Club"
            }
        }');
        $this->assertInstanceOf(IndividualFacilityUse::class, $facility);
        $this->assertCount(2, $facility->getAddOns());
        $this->assertEquals('Adult Racket Hire', $facility->getAddOns()[0]->getName());
        $this->assertEquals('Junior Racket Hire', $facility->getAddOns()[1]->getName());
        $this->assertEquals('Football 11-a-side', $facility->getName());
    }

    public function testSerialises()
    {
        $facility = new IndividualFacilityUse([
            'id' => 'https://example.com/api/openactive/individual-facility-uses/d7fb4341-756a-41a8-ad17-4b8f6b574bb6',
            'identifier' => 'd7fb4341-756a-41a8-ad17-4b8f6b574bb6',
            'name' => 'Football 11-a-side',
            'url' => 'https://example.com/api/openactive/individual-facility-uses/d7fb4341-756a-41a8-ad17-4b8f6b574bb6',
            'activity' => [new Concept([
                'id' => 'https://openactive.io/activity-list#117e7f70-6c42-4b1f-a3bb-620b63ea263l',
                'inScheme' => 'https://openactive.io/activity-list',
                'prefLabel' => '11-a-side'
            ])],
            'addOns' => [
                new AddOn([
                    'id' => 'https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603',
                    'name' => 'Adult Racket Hire',
                    'priceSpecification' => new PriceSpecification([
                        'eligibleQuantity' => new QuantitativeValue([
                            'minValue' => 0,
                            'maxValue' => 4,
                        ])
                    ]),
                    'offers' => [
                        new Offer([
                            'id' => 'https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603#offer',
                            'priceCurrency' => 'GBP',
                            'price' => 1.5,
                        ]),
                    ]
                ]),
                new AddOn([
                    'id' => 'https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944',
                    'name' => 'Junior Racket Hire',
                    'priceSpecification' => new PriceSpecification([
                        'eligibleQuantity' => new QuantitativeValue([
                            'minValue' => 0,
                            'maxValue' => 4,
                        ])
                    ]),
                    'offers' => [
                        new Offer([
                            'id' => 'https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944#offer',
                            'priceCurrency' => 'GBP',
                            'price' => 0,
                        ]),
                    ]
                ]),
            ],
            'provider' => new Organization([
                'id' => 'https://example.com/api/venues/fe30c0e1-b4f9-4226-9fd8-3ddb230edd9f',
                'name' => 'Sundridge Park Lawn Tennis & Squash Rackets Club',
            ]),
        ]);
        $this->assertJsonStringEqualsJsonString('{
            "@id": "https://example.com/api/openactive/individual-facility-uses/d7fb4341-756a-41a8-ad17-4b8f6b574bb6",
            "@type": "playfinder:IndividualFacilityUse",
            "@context": [
              "https://openactive.io/",
              "https://openactive.io/ns-beta"
            ],
            "identifier": "d7fb4341-756a-41a8-ad17-4b8f6b574bb6",
            "name": "Football 11-a-side",
            "url": "https://example.com/api/openactive/individual-facility-uses/d7fb4341-756a-41a8-ad17-4b8f6b574bb6",
            "activity": [
              {
                "@type": "Concept",
                "@id": "https://openactive.io/activity-list#117e7f70-6c42-4b1f-a3bb-620b63ea263l",
                "inScheme": "https://openactive.io/activity-list",
                "prefLabel": "11-a-side"
              }
            ],
            "beta:addOns": [{
              "@id": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603",
              "@type": "playfinder:AddOn",
              "name": "Adult Racket Hire",
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
                  "@id": "https://example.com/openactive/add-ons/de505ce7-351f-4f8f-90c4-29887947a603#offer",
                  "priceCurrency": "GBP",
                  "price": 1.5
                }
              ]
            }, {
              "@id": "https://example.com/openactive/add-ons/b9372482-8d6e-4d89-9160-58fa52d86944",
              "@type": "playfinder:AddOn",
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
                  "price": 0
                }
              ]
            }],
            "provider": {
              "@type": "Organization",
              "@id": "https://example.com/api/venues/fe30c0e1-b4f9-4226-9fd8-3ddb230edd9f",
              "name": "Sundridge Park Lawn Tennis & Squash Rackets Club"
            }
        }', IndividualFacilityUse::serialize($facility));
    }
}
