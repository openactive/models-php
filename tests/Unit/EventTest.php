<?php

namespace Tests\Unit;

use OpenActive\BaseModel;
use OpenActive\Models\OA\Concept;
use OpenActive\Models\OA\ImageObject;
use OpenActive\Models\OA\IndicativeOffer;
use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\Place;
use OpenActive\Models\OA\PostalAddress;
use OpenActive\Models\OA\SessionSeries;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that serialized serialized event returns expected JSON-LD.
     *
     * @dataProvider sessionSeriesProvider
     * @return void
     */
    public function testSerializeEventGoogleStructuredDataReturnsExpectedJsonLd($event, $json)
    {
        $this->assertEquals(
            json_decode($json, true),
            json_decode(BaseModel::serialize($event), true)
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
     * This test does not make sense.
     *
     * @return void
     */
    // public function testSerializeOfferCast()
    // {
    //     $event = new Event([
    //         "Offers" => [
    //             new IndicativeOffer([
    //                 "Url" => "https://www.example.com/event_offer/12345_201803180430",
    //                 "Price" => 30,
    //                 "PriceCurrency" => "USD",
    //                 "ValidFrom" => new \DateTime(
    //                     "2017-01-20 16:20:00",
    //                     new \DateTimeZone("-0800")
    //                 )
    //             ])
    //         ]
    //         // .Cast<Offer>().ToList()
    //     ]);
    //
    //     $this->assertSame(
    //         "Santa Clara City Library, Central Park Library",
    //         BaseModel::serialize($event)
    //     );
    // }

    /**
     * Test that serialization and deserialization return the same result
     * after the process.
     *
     * @return void
     */
    public function testSerializeEncodeDecode()
    {
        $original = "{\"type\":\"Concept\",\"id\":\"https://openactive.io/facility-types#37bbed12-270b-42b1-9af2-70f0273990dd\",\"prefLabel\":\"Grass\",\"inScheme\":\"https://openactive.io/facility-types\"}";
        $decode = Concept::deserialize($original);
        $encode = Concept::serialize($decode);

        // output.WriteLine(decode.Id?.ToString());
        // output.WriteLine(original);
        // output.WriteLine(encode);
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
    // public function testSerializeEncodeDecodeList()
    // {
    //     $originalList = "[{\"type\":\"Concept\",\"id\":\"https://openactive.io/facility-types#37bbed12-270b-42b1-9af2-70f0273990dd\",\"prefLabel\":\"Grass\",\"inScheme\":\"https://openactive.io/facility-types\"}]";
    //     $decodeList = Concept::deserialize($originalList);
    //     $encodeList = Concept::serialize($decodeList);
    //
    //     // output.WriteLine($decodeList->getId());
    //     // output.WriteLine($originalList);
    //     // output.WriteLine($encodeList);
    //     // $this->assertSame(
    //     //     "https://openactive.io/facility-types#37bbed12-270b-42b1-9af2-70f0273990dd",
    //     //     $decodeList->getId()
    //     // );
    //     $this->assertSame($originalList, $encodeList);
    // }

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
     * @var \OpenActive\Model\SessionSeries
     */
    public function sessionSeriesProvider()
    {
        $data = array();

        $data[0] = array();

        $data[0][] = new SessionSeries([
            "Name" => "Virtual BODYPUMP",
            "Description" => "This is the virtual version of the original barbell class, which will help you get lean, toned and fit - fast. Les Mills™ Virtual classes are designed for people who cannot get access to our live classes or who want to get a ‘taste’ of a Les Mills™ class before taking a live class with an instructor. The classes are played on a big video screen, with dimmed lighting and pumping surround sound, and are led onscreen by the people who actually choreograph the classes.",
            "Duration" => new \DateInterval("P1D"),
            "StartDate" => new \DateTime(
                "2017-04-24 19:30:00",
                new \DateTimeZone("-0800")
            ),
            "Location" => new Place([
                "Name" => "Santa Clara City Library, Central Park Library",
                "Address" => new PostalAddress([
                    "StreetAddress" => "2635 Homestead Rd",
                    "AddressLocality" => "Santa Clara",
                    "PostalCode" => "95051",
                    "AddressRegion" => "CA",
                    "AddressCountry" => "US"
                ])
            ]),
            "Image" => [
                new ImageObject([
                    "Url" => "http://www.example.com/event_image/12345"
                ])
            ],
            "EndDate" => new \DateTime(
                "2017-04-24 23:00:00",
                new \DateTimeZone("-0800")
            ),
            "Offers" => [
                new IndicativeOffer([
                    "Url" => "https://www.example.com/event_offer/12345_201803180430",
                    "Price" => 30,
                    "PriceCurrency" => "USD",
                    "ValidFrom" => new \DateTime(
                        "2017-01-20 16:20:00",
                        new \DateTimeZone("-0800")
                    )
                ])
            ],
            "AttendeeInstructions" => "Ensure you bring trainers and a bottle of water.",
            "MeetingPoint" => ""
        ]);

        $data[0][] = "{".
            "\"@context\":[\"https://openactive.io/\",\"https://openactive.io/ns-beta\"],".
            "\"type\":\"SessionSeries\",".
            // "\"name\":\"Jan Lieberman Concert Series: Journey in Jazz\",".
            // "\"description\":\"Join us for an afternoon of Jazz with Santa Clara resident and pianist Andy Lagunoff. Complimentary food and beverages will be served.\",".
            "\"name\":\"Virtual BODYPUMP\",".
            "\"description\":\"This is the virtual version of the original barbell class, which will help you get lean, toned and fit - fast. Les Mills™ Virtual classes are designed for people who cannot get access to our live classes or who want to get a ‘taste’ of a Les Mills™ class before taking a live class with an instructor. The classes are played on a big video screen, with dimmed lighting and pumping surround sound, and are led onscreen by the people who actually choreograph the classes.\",".
            "\"image\":[{".
                "\"type\":\"ImageObject\",".
                "\"url\":\"http://www.example.com/event_image/12345\"".
            "}],".
            "\"duration\":\"P1D\",".
            "\"location\":{".
                "\"type\":\"Place\",".
                "\"name\":\"Santa Clara City Library, Central Park Library\",".
                "\"address\":{".
                    "\"type\":\"PostalAddress\",".
                    "\"addressCountry\":\"US\",".
                    "\"addressLocality\":\"Santa Clara\",".
                    "\"addressRegion\":\"CA\",".
                    "\"postalCode\":\"95051\",".
                    "\"streetAddress\":\"2635 Homestead Rd\"".
                "}".
            "},".
            // "\"offers\":{".
            //     "\"type\":\"Offer\",".
            //     "\"url\":\"https://www.example.com/event_offer/12345_201803180430\",".
            //     "\"availability\":\"http://schema.org/InStock\",".
            //     "\"price\":30.0,".
            //     "\"priceCurrency\":\"USD\",".
            //     "\"validFrom\":\"2017-01-20T16:20:00-08:00\"".
            // "},".
            "\"offers\":[{".
                "\"type\":\"IndicativeOffer\",".
                "\"url\":\"https://www.example.com/event_offer/12345_201803180430\",".
                "\"price\":30,".
                "\"priceCurrency\":\"USD\"".
                // Skipping validFrom as not specified anywhere as an available attribute
                // "\"validFrom\":\"2017-01-20T16:20:00-08:00\"".
            "}],".
            // "\"performer\":{".
            //     "\"type\":\"Person\",".
            //     "\"name\":\"Andy Lagunoff\"".
            // "},".
            "\"startDate\":\"2017-04-24T19:30:00-08:00\",".
            "\"endDate\":\"2017-04-24T23:00:00-08:00\",".
            // "\"attendeeInstructions\":\"fun!\"".
            "\"attendeeInstructions\":\"Ensure you bring trainers and a bottle of water.\"".
        "}";

        return $data;
    }
}
