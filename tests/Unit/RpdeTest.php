<?php

namespace Tests\Unit;

use OpenActive\Models\OA\ImageObject;
use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\Place;
use OpenActive\Models\OA\PostalAddress;
use OpenActive\Models\OA\SessionSeries;
use OpenActive\Rpde\RpdeBody;
use OpenActive\Rpde\RpdeKind;
use OpenActive\Rpde\RpdeItem;
use OpenActive\Rpde\RpdeState;
use OpenActive\Models\SchemaOrg\VideoObject;
use PHPUnit\Framework\TestCase;

/**
 * RPDE specific tests.
 *
 * @see https://github.com/openactive/OpenActive.NET/blob/master/OpenActive.NET.Test/RPDETest.cs For the .NET implementation on which these tests are based on.
 */
class RpdeTest extends TestCase
{
    /**
     * @dataProvider jsonProvider
     * @return void
     */
    public function testToStringEventGoogleStructuredDataReturnsExpectedJsonLd($json)
    {
        $feedItems = $this->getFeedItems();

        $feed = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            1,
            "1",
            $feedItems
        );

        $this->assertEquals(
            json_decode($json, true),
            json_decode(RpdeBody::serialize($feed), true)
        );
    }

    public function jsonProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\SessionSeries";

        // Event
        $data[0] = array(
            file_get_contents(__DIR__ . "/rpde-session_series.json"),
            $classname
        );

        return $data;
    }

    /**
     * @return \OpenActive\Models\OA\SessionSeries
     */
    public function getSessionSeriesEvent()
    {
        return new SessionSeries([
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
                new Offer([
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
    }

    /**
     * @return \OpenActive\Models\OA\SessionSeries
     */
    public function getSessionSeries()
    {
        return new SessionSeries([
            "Category" => [""],
            "Name" => "",
            "AttendeeInstructions" => "",
            "Id" => "https://example.com",
            "Identifier" => "",
            "Duration" => new \DateInterval("P5D"),
            "GenderRestriction" => \OpenActive\Enums\GenderRestrictionType\MaleOnly::memberVal,
            "EventSchedule" => [
                new PartialSchedule([
                    "StartDate" => "",
                    "EndDate" => "",
                    "StartTime" => new \DateTime(),
                    "EndTime" => new \DateTime(),
                    "Duration" => new \DateInterval("P2D"),
                    "TimeZone" => "",
                    "ByDay" => []
                ])
            ],
            // **** Price mapping ****
            "Offers" => [
                new Offer([
                    "Name" => "",
                    "Identifier" => "",
                    "Description" => "",
                    "Price" => 0,
                    "AgeRange" => new QuantitativeValue([
                        "MinValue" => 0,
                        "MaxValue" => 2
                    ]),
                    "PriceCurrency" => "",
                    "AcceptedPaymentMethod" => [
                        \OpenActive\Enums\PaymentMethod\Cash::memberVal
                    ]
                ])
            ],
            // **** Place mapping ****
            "Location" => new Place([
                "Identifier" => "",
                "Address" => new PostalAddress([
                    "StreetAddress" => "",
                    "AddressLocality" => "",
                    "AddressRegion" => "",
                    "PostalCode" => "",
                    "AddressCountry" => ""
                ]),
                "Geo" => new GeoCoordinates([
                    "Latitude" => 0.1,
                    "Longitude" => 0.2
                ]),
                "Url" => "https://example.com",
                "Name" => "",
                "Telephone" => "",
                //"Email" => "",
                "FormattedDescription" => "",
                "Description" => "",
                "Image" => [
                    new ImageObject([
                        "Url" => "https://example.com"
                    ])
                ],
                "AmenityFeature" => [
                    new Showers([
                        "Name" => "Showers",
                        "Value" => true
                    ])
                ]
            ]),
            "AccessibilityInformation" => "",
            "IsWheelchairAccessible" => false,
            "Description" => "",
            "FormattedDescription" => "",
            "IsCoached" => false,
            "Video" => [
                new VideoObject([
                    "Url" => "https://example.com"
                ])
            ],
            "AccessibilitySupport" => [],
            "Level" => [""],
            "Image" => [
                new ImageObject(["Url" => "https://example.com"])
            ],
            "Programme" => new Brand([
                "Id" => "https://example.com",
                "Name" => "",
                "Description" => "",
                "Url" => "https://example.com",
                "Logo" =>  new ImageObject([
                    "Url" => "https://example.com"
                ]),
                "Video" => [
                    new VideoObject([
                        "Url" => "https://example.com"
                    ])
                ]
            ]),
            "AgeRange" => new QuantitativeValue([
                "Name" => null,
                "MaxValue" => 0,
                "MinValue" => 2
            ]),
            "Activity" => [
                new Concept([
                    "Id" => "https://example.com",
                    "PrefLabel" => "",
                    "InScheme" => "https://example.com"
                ]),
                new Concept([
                    "Id" => "https://example.com",
                    "PrefLabel" => "",
                    "InScheme" => "https://example.com"
                ]),
                new Concept([
                    "Id" => "https://example.com",
                    "PrefLabel" => "",
                    "InScheme" => "https://example.com"
                ])
            ],
            "Organizer" => new Organization([
                "Name" => "",
                "LegalName" => "",
                "Description" => "",
                "FormattedDescription" => "",
                "Telephone" => "",
                "Url" => "https://example.com",
                "Logo" => new ImageObject([
                    "Url" => "https://example.com"
                ]),
                "Video" => [
                    new VideoObject([
                        "Url" => "https://example.com"
                    ])
                ],
                "Email" => "",
                "SameAs" => [
                    "https://example.com",
                    "https://example.com"
                ]
            ])
        ]);
    }

    /**
     * @return \OpenActive\Rpde\RpdeItem[]
     */
    public function getFeedItems()
    {
        return [
            new RpdeItem([
                "Id" => "2",
                "Modified" => 4,
                "State" => RpdeState::UPDATED,
                "Kind" => RpdeKind::SESSION_SERIES,
                "Data" => [$this->getSessionSeriesEvent()]
            ]),
            new RpdeItem([
                "Id" => "1",
                "Modified" => 5,
                "State" => RpdeState::DELETED,
                "Kind" => RpdeKind::SESSION_SERIES,
                "Data" => null
            ])
        ];
    }
}