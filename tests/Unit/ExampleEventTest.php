<?php

namespace OpenActive\Models\Tests\Unit;

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
 * This is an illustration of the general testing approach,
 * as found in the [.NET model tests](https://github.com/openactive/OpenActive.NET/blob/master/OpenActive.NET.Test/EventTest.cs)
 * For better written tasks, please see the other unit tests.
 *
 * @see https://github.com/openactive/models-lib/tree/master/test-description For the test description
 */
class ExampleEventTest extends TestCase
{
    /**
     * Test that serialized serialized event returns expected JSON-LD.
     *
     * @dataProvider sessionSeriesProvider
     * @return void
     */
    public function testSerializeEventGoogleStructuredDataReturnsExpectedJsonLd($event, $json)
    {
        $classname = "\\".get_class($event);

        $jsonEvent = $classname::serialize($event);

        $this->assertEquals(
            json_decode($json, true),
            json_decode($jsonEvent, true)
        );
    }

    /**
     * Test event accessors.
     *
     * @dataProvider sessionSeriesProvider
     * @return void
     */
    public function testSerializeEventAccessor($event)
    {
        $this->assertSame(
            "Santa Clara City Library, Central Park Library",
            $event->getLocation()->getName()
        );
    }

    /**
     * Test that serialization and deserialization return the same result
     * after the process.
     *
     * @return void
     */
    public function testSerializeEncodeDecode()
    {
        $original = "{\"@context\":[\"https:\\/\\/openactive.io\\/\",\"https:\\/\\/openactive.io\\/ns-beta\"],\"type\":\"Concept\",\"id\":\"https://openactive.io/facility-types#37bbed12-270b-42b1-9af2-70f0273990dd\",\"prefLabel\":\"Grass\",\"inScheme\":\"https://openactive.io/facility-types\"}";
        $decode = Concept::deserialize($original);
        $encode = Concept::serialize($decode);

        // $this->assertSame(
        //     "https://openactive.io/facility-types#37bbed12-270b-42b1-9af2-70f0273990dd",
        //     $decode->getId()
        // );
        $this->assertEquals(
            json_decode($original, true),
            json_decode($encode, true)
        );
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSerializeOfferEncodeDecode()
    {
        $offer = new Offer([
            "Id" => "https://www.example.com/event_offer/12345_201803180430",
            "Url" => "https://www.example.com/event_offer/12345_201803180430",
            "Price" => 30,
            "PriceCurrency" => "USD",
            "ValidFrom" => new \DateTime(
                "2017-01-20 16:20:00",
                new \DateTimeZone("-0800")
            )
        ]);

        $encode = Offer::serialize($offer);

        $decode = Offer::deserialize($encode);

        $reencode = Offer::serialize($decode);

        // output.WriteLine($encode);
        // output.WriteLine($reencode);
        $this->assertSame($encode, $reencode);
    }

    /**
     * Returns an array of arrays.
     * Each item contains a classname and the deserialized representation
     * of the JSON provided in the test description.
     * This data is automatically picked up by PHPUnit
     * whenever using a directive like "@dataProvider sessionSeriesProvider"
     * in a test method PHP doc block.
     *
     * @return array[]
     */
    public function sessionSeriesProvider()
    {
        $testData = array();

        $testData[0] = array();

        $testData[0][] = new SessionSeries([
            "name" => "Virtual BODYPUMP",
            "description" => "This is the virtual version of the original barbell class, which will help you get lean, toned and fit - fast. Les Mills™ Virtual classes are designed for people who cannot get access to our live classes or who want to get a ‘taste’ of a Les Mills™ class before taking a live class with an instructor. The classes are played on a big video screen, with dimmed lighting and pumping surround sound, and are led onscreen by the people who actually choreograph the classes.",
            "duration" => new \DateInterval("P1D"),
            "startDate" => new \DateTime(
                "2017-04-24 19:30:00",
                new \DateTimeZone("-0800")
            ),
            "location" => new Place([
                "name" => "Santa Clara City Library, Central Park Library",
                "address" => new PostalAddress([
                    "StreetAddress" => "2635 Homestead Rd",
                    "AddressLocality" => "Santa Clara",
                    "PostalCode" => "95051",
                    "AddressRegion" => "CA",
                    "AddressCountry" => "US"
                ])
            ]),
            "image" => [
                new ImageObject([
                    "url" => "http://www.example.com/event_image/12345"
                ])
            ],
            "endDate" => new \DateTime(
                "2017-04-24 23:00:00",
                new \DateTimeZone("-0800")
            ),
            "offers" => [
                new IndicativeOffer([
                    "url" => "https://www.example.com/event_offer/12345_201803180430",
                    "price" => 30,
                    "priceCurrency" => "USD",
                    "validFrom" => new \DateTime(
                        "2017-01-20 16:20:00",
                        new \DateTimeZone("-0800")
                    )
                ])
            ],
            "attendeeInstructions" => "Ensure you bring trainers and a bottle of water.",
            "meetingPoint" => ""
        ]);

        $testData[0][] = file_get_contents(__DIR__ . "/session_series.json");

        return $testData;
    }
}
