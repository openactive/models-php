<?php

namespace OpenActive\Models\Tests\Unit\Modifiers;

use OpenActive\Models\OA\ImageObject;
use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\Order;
use OpenActive\Models\OA\OrderItem;
use OpenActive\Models\OA\Organization;
use OpenActive\Models\OA\Payment;
use OpenActive\Models\OA\Person;
use OpenActive\Models\OA\PostalAddress;
use OpenActive\Models\OA\PriceSpecification;
use OpenActive\Models\OA\PrivacyPolicy;
use OpenActive\Models\OA\PropertyValue;
use OpenActive\Models\OA\ScheduledSession;
use OpenActive\Models\OA\TermsOfUse;
use OpenActive\Modifiers\OrdersFeedModifier;
use PHPUnit\Framework\TestCase;

class OrdersFeedModifierTest extends TestCase
{
    /**
     * Check that the Order RPDE Feed serialization filter correctly
     * filters elements out of orders that should not be in the RPDE
     * Orders feed
     *
     * @return void
     */
    public function testModifierRemovesKeys()
    {
        // Generate a test order
        $order = $this->getTestOrder();

        // Check the order has the items we're going to filter out

        // Serialise and decode the order
        $serialized = Order::serialize($order);
        $decoded = json_decode($serialized, true);

        // Check that the test order has the keys without the serialization filter
        $this->assertArrayHasKey('orderNumber', $decoded);
        $this->assertArrayHasKey('seller', $decoded);
        $this->assertArrayHasKey('customer', $decoded);
        $this->assertArrayHasKey('broker', $decoded);
        $this->assertArrayHasKey('brokerRole', $decoded);
        $this->assertArrayHasKey('payment', $decoded);

        // Check the orderedItem(s) have the position key
        $orderedItem = $decoded['orderedItem'];
        foreach ($orderedItem as $item) {
            $this->assertArrayHasKey('position', $item);
        }

        // Test the filter

        // Serialise and decode the order again,
        // this time with the Orders feed filter
        $serialized = Order::serialize($order, false, false, [
            new OrdersFeedModifier()
        ]);
        $decoded = json_decode($serialized, true);

        // Check the keys have been removed
        $this->assertArrayNotHasKey('orderNumber', $decoded);
        $this->assertArrayNotHasKey('seller', $decoded);
        $this->assertArrayNotHasKey('customer', $decoded);
        $this->assertArrayNotHasKey('broker', $decoded);
        $this->assertArrayNotHasKey('brokerRole', $decoded);
        $this->assertArrayNotHasKey('payment', $decoded);

        // Check that the orderedItem(s) don't have the position key
        $orderedItem = $decoded['orderedItem'];
        foreach ($orderedItem as $item) {
            $this->assertArrayNotHasKey('position', $item);
        }
    }

    /**
     * Generate a test order for use with the tests
     *
     * @return Order
     */
    protected function getTestOrder()
    {
        return new Order([
            'id' => 'https://testseller.local/orders/00000000-0000-0000-0000-000000000000',
            'broker' => new Organization([
                'name' => 'Test Broker inc.',
                'description' => 'A test broker for unit tests',
                'url' => 'https://testbroker.local',
                'logo' => new ImageObject([
                    'url' => 'https://testbroker.local/img/logo.svg'
                ]),
                'address' => new PostalAddress([
                    'addressCountry' => 'GB',
                    'addressLocality' => 'A Villate',
                    'addressRegion' => 'Oneoftheshires',
                    'postalCode' => 'XX12 3XX',
                    'streetAddress' => '1 Made up ave.'
                ])
            ]),
            'brokerRole' => 'https://openactive.io/AgentBroker',
            'customer' => new Person([
                'email' => 'test.customer@test.openactive.io',
                'familyName' => 'Customer',
                'givenName' => 'Test',
                'identifier' => '00000000-0000-0000-0000-000000000000',
                'telephone' => '+1 (212) 555-2368'
            ]),
            'orderNumber' => 'TEST0000000',
            'orderedItem' =>[
                new OrderItem([
                    'id' => 'https://testseller.local/orders/00000000-0000-0000-0000-000000000000/scheduled-session/1',
                    'orderedItem' => new ScheduledSession([
                        'id' => 'https://testseller.local/openactive/feeds/scheduled-sessions/1',
                        'duration' => 'PT1H',
                        'endDate' => '2022-09-02T19:00:00+01:00',
                        'eventStatus' => 'https://schema.org/EventScheduled',
                        'identifier' => '1',
                        'maximumAttendeeCapacity' => 5,
                        'remainingAttendeeCapacity' => 4,
                        'startDate' => '2022-09-02T18:00:00+01:00',
                        'superEvent' => 'https://testseller.local/openactive/feeds/session-series/1'
                    ]),
                    'acceptedOffer' => new Offer([
                        'id' => 'https://testseller.local/openactive/feeds/scheduled-sessions/1/offers/1',
                        'identifier' => 'base',
                        'name' => 'Price',
                        'price' => '10',
                        'priceCurrency' => 'GBP'
                    ]),
                    'accessCode' => [
                        new PropertyValue([
                            'description' => '123456',
                            'name' => 'Test code',
                            'value' => 'defaultValue'
                        ])
                    ],
                    'position' => 0
                ])
            ],
            'seller' => new Organization([
                'id' => 'https://testseller.local/openactive/identifiers/sellers/1',
                'address' => new PostalAddress([
                    'addressCountry' => 'GB',
                    'addressLocality' => 'A Villate',
                    'addressRegion' => 'Oneoftheshires',
                    'postalCode' => 'XX12 3XX',
                    'streetAddress' => '1 Made up ave.'
                ]),
                'email' => 'seller1@testseller.local',
                'isOpenBookingAllowed' => true,
                'legalName' => 'Test Seller Ltd.',
                'logo' => new ImageObject([
                    'url' => 'https://testseller.local/img/seller1.svg'
                ]),
                'name' => 'Test Seller',
                'taxMode' => 'https://openactive.io/TaxNet',
                'telephone' => '+1 (212) 555-2368',
                'termsOfService' => [
                    new PrivacyPolicy([
                        'name' => 'Privacy Policy',
                        'requiresExplicitConsent' => false,
                        'url' => 'https://testseller.local/openactive/policies/privacy'
                    ]),
                    new TermsOfUse([
                        'name' => 'Booking terms and conditions',
                        'requiresExplicitConsent' => true,
                        'url' => 'https://testseller.local/openactive/policies/terms'
                    ])
                ],
                'url' => 'https://testseller.local'
            ]),
            'totalPaymentDue' => new PriceSpecification([
                'price' => 10,
                'priceCurrency' => 'GBP'
            ]),
            'payment' => new Payment([
                'accountId' => 'TestAcc123',
                'identifier' => 'TestID123',
                'name' => 'Test broker payment',
                'paymentProviderId' => 'PROCESSORID'
            ])
        ]);
    }
}
