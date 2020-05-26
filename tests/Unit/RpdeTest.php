<?php

namespace OpenActive\Models\Tests\Unit;

use OpenActive\Models\OA\ImageObject;
use OpenActive\Models\OA\Offer;
use OpenActive\Models\OA\Place;
use OpenActive\Models\OA\PostalAddress;
use OpenActive\Models\OA\SessionSeries;
use OpenActive\Rpde\Exceptions\DeletedItemsDataException;
use OpenActive\Rpde\Exceptions\FirstTimeAfterChangeNumberException;
use OpenActive\Rpde\Exceptions\FirstTimeAfterTimestampAndAfterIdException;
use OpenActive\Rpde\Exceptions\IncompleteItemsDataException;
use OpenActive\Rpde\Exceptions\ModifiedIdItemsOrderException;
use OpenActive\Rpde\Exceptions\NextChangeNumbersItemsOrderException;
use OpenActive\Rpde\RpdeBody;
use OpenActive\Rpde\RpdeKind;
use OpenActive\Rpde\RpdeItem;
use OpenActive\Rpde\RpdeState;
use PHPUnit\Framework\TestCase;

/**
 * RPDE specific tests.
 *
 * @see https://github.com/openactive/OpenActive.NET/blob/master/OpenActive.NET.Test/RPDETest.cs For the .NET implementation on which these tests are based on.
 */
class RpdeTest extends TestCase
{
    /**
     * @dataProvider allTypesDataProvider
     * @param array $feed
     * @param string $expectedJson
     */
    public function testCreatesSerializedRpdeFeedPageWithAllTypes($feed, $expectedJson)
    {
        $body = RpdeBody::createFromModifiedId(
            'https://www.example.com/feed',
            1,
            "1",
            $feed
        );

        $this->assertEquals(
            json_decode($expectedJson),
            json_decode(RpdeBody::serialize($body))
        );
    }

    /**
     * Test the serialized RPDE body created with createFromModifiedId returns the expected JSON-LD.
     *
     * @dataProvider jsonAfterModifiedAfterIdProvider
     * @return void
     */
    public function testCreateFromModifiedIdCreatesCorrectlySerializableRpdeFeedPage($json)
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

    /**
     * Test the serialized RPDE body created with createFromNextChangeNumber returns the expected JSON-LD.
     *
     * @dataProvider jsonChangeNumberProvider
     * @return void
     */
    public function testCreateFromNextChangeNumberCreatesCorrectlySerializableRpdeFeedPage($json)
    {
        $feedItems = $this->getFeedItems();

        $feed = RpdeBody::createFromNextChangeNumber(
            "https://www.example.com/feed",
            1,
            $feedItems
        );

        $this->assertEquals(
            json_decode($json, true),
            json_decode(RpdeBody::serialize($feed), true)
        );
    }

    /**
     * Test RPDE body with unordered "modified" attribute,
     * throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyUnorderedModifiedReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(ModifiedIdItemsOrderException::class);
        $this->expectExceptionMessage(
            "Items must be ordered first by 'modified', ".
            "then by 'id'. Please check the RPDE specification ".
            "and ensure you are using the correct query for ".
            "your ordering strategy."
        );

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            1,
            "1",
            [
                new RpdeItem([
                    "Id" => "2",
                    "Modified" => 5,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => "1",
                    "Modified" => 4,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE body with unordered "id" attribute, throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyUnorderedIdReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(ModifiedIdItemsOrderException::class);
        $this->expectExceptionMessage(
            "Items must be ordered first by 'modified', ".
            "then by 'id'. Please check the RPDE specification ".
            "and ensure you are using the correct query for ".
            "your ordering strategy."
        );

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            1,
            "1",
            [
                new RpdeItem([
                    "Id" => "2",
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => "1",
                    "Modified" => 4,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE body with a deleted item with "data", throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyDeletedWithDataReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(DeletedItemsDataException::class);
        $this->expectExceptionMessage("Deleted items must not contain data.");

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            1,
            "1",
            [
                new RpdeItem([
                    "Id" => "2",
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => "1",
                    "Modified" => 5,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ])
            ]
        );
    }

    /**
     * Test RPDE body throws expected exception,
     * with a first item in feed with same modified and id
     * as afterId and afterTimestamp parameters.
     *
     * @return void
     */
    public function testRpdeBodyFirstItemInFeedReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(FirstTimeAfterTimestampAndAfterIdException::class);
        $this->expectExceptionMessage(
            "First item in the feed must never have same 'modified' ".
            "and 'id' as afterTimestamp and afterId query parameters. ".
            "Please check the RPDE specification and ensure you are ".
            "using the correct query for your ordering strategy."
        );

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            4,
            "2",
            [
                new RpdeItem([
                    "Id" => "2",
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => "1",
                    "Modified" => 5,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE body with unordered "modified" attribute,
     * throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyIntUnorderedModifiedReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(ModifiedIdItemsOrderException::class);
        $this->expectExceptionMessage(
            "Items must be ordered first by 'modified', ".
            "then by 'id'. Please check the RPDE specification ".
            "and ensure you are using the correct query for ".
            "your ordering strategy."
        );

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            1,
            1,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 5,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 4,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE body integer with unordered "id" attribute,
     * throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyIntUnorderedIdReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(ModifiedIdItemsOrderException::class);
        $this->expectExceptionMessage(
            "Items must be ordered first by 'modified', ".
            "then by 'id'. Please check the RPDE specification ".
            "and ensure you are using the correct query for ".
            "your ordering strategy."
        );

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            1,
            1,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 4,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE body int with a deleted item with "data",
     * throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyIntDeletedWithData_ReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(DeletedItemsDataException::class);
        $this->expectExceptionMessage("Deleted items must not contain data.");

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            1,
            1,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 5,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ])
            ]
        );
    }

    /**
     * Test RPDE body int throws expected exception,
     * with a first item in feed with same modified and id
     * as afterId and afterTimestamp parameters.
     *
     * @return void
     */
    public function testRpdeBodyIntFirstItemInFeed_ReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(FirstTimeAfterTimestampAndAfterIdException::class);
        $this->expectExceptionMessage(
            "First item in the feed must never have same 'modified' ".
            "and 'id' as afterTimestamp and afterId query parameters. ".
            "Please check the RPDE specification and ensure you are ".
            "using the correct query for your ordering strategy."
        );

        $rpdeBody = RpdeBody::createFromModifiedId(
            "https://www.example.com/feed",
            4,
            2,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 5,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE with change number unordered "modified" attribute,
     * throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyChangeNumberUnorderedModifiedReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(NextChangeNumbersItemsOrderException::class);
        $this->expectExceptionMessage(
            "Items must be ordered by 'modified'. Please check ".
            "the RPDE specification and ensure you are using ".
            "the correct query for your ordering strategy."
        );

        $rpdeBody = RpdeBody::createFromNextChangeNumber(
            "https://www.example.com/feed",
            1,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 5,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 4,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE with change number unordered "id" attribute,
     * throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyChangeNumberUnorderedID_ReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(NextChangeNumbersItemsOrderException::class);
        $this->expectExceptionMessage(
            "Items must be ordered by 'modified'. Please check ".
            "the RPDE specification and ensure you are using ".
            "the correct query for your ordering strategy."
        );
        $rpdeBody = RpdeBody::createFromNextChangeNumber(
            "https://www.example.com/feed",
            1,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 4,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => null
                ])
            ]
        );
    }

    /**
     * Test RPDE body created with change number
     * with a deleted item with "data", throws expected exception.
     *
     * @return void
     */
    public function testRpdeBodyChangeNumberDeletedWithDataReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(DeletedItemsDataException::class);
        $this->expectExceptionMessage("Deleted items must not contain data.");

        $rpdeBody = RpdeBody::createFromNextChangeNumber(
            "https://www.example.com/feed",
            1,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 5,
                    "State" => RpdeState::DELETED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ])
            ]
        );
    }

    /**
     * Test RPDE body created with change number throws expected exception,
     * with a first item in feed with same modified
     * as afterChangeNumber parameters.
     *
     * @return void
     */
    public function testRpdeBodyChangeNumberFirstItemInFeed_ReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(FirstTimeAfterChangeNumberException::class);
        $this->expectExceptionMessage(
            "First item in the feed must never have same 'modified' ".
            "as afterChangeNumber query parameter. Please check ".
            "the RPDE specification and ensure you are using ".
            "the correct query for your ordering strategy."
        );
        $rpdeBody = RpdeBody::createFromNextChangeNumber(
            "https://www.example.com/feed",
            4,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 5,
                    "Kind" => RpdeKind::SESSION_SERIES,
                    "State" => RpdeState::DELETED,
                    "Data" => null
                ])
            ]
        );
    }

    public function testRpdeBodyMissingPros_ReturnsExpectedException()
    {
        $event = $this->getSessionSeriesEvent();

        $this->expectException(IncompleteItemsDataException::class);
        $this->expectExceptionMessage(
            "All RPDE feed items must include id, modified, state, and kind."
        );

        $rpdeBody = RpdeBody::createFromNextChangeNumber(
            "https://www.example.com/feed",
            1,
            [
                new RpdeItem([
                    "Id" => 2,
                    "Modified" => 4,
                    "State" => RpdeState::UPDATED,
                    "Data" => $event
                ]),
                new RpdeItem([
                    "Id" => 1,
                    "Modified" => 5,
                    "State" => RpdeState::DELETED,
                    "Data" => null
                ])
            ]
        );
    }

    public function jsonAfterModifiedAfterIdProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\SessionSeries";

        $items = json_decode(file_get_contents(__DIR__ . "/rpde-session_series-items.json"));

        $page = [
            "next" => "https://www.example.com/feed?afterTimestamp=5&afterId=1",
            "items" => $items,
            "license" => "https://creativecommons.org/licenses/by/4.0/"
        ];

        // Event
        $data[0] = array(
            json_encode($page),
            $classname
        );

        return $data;
    }

    public function jsonChangeNumberProvider()
    {
        $data = array();

        $classname = "\\OpenActive\\Models\\OA\\SessionSeries";

        $items = json_decode(file_get_contents(__DIR__ . "/rpde-session_series-items.json"));

        $page = [
            "next" => "https://www.example.com/feed?afterChangeNumber=5",
            "items" => $items,
            "license" => "https://creativecommons.org/licenses/by/4.0/"
        ];

        // Event
        $data[0] = array(
            json_encode($page),
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
                "Data" => $this->getSessionSeriesEvent()
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

    public function allTypesDataProvider()
    {
        $res = __DIR__ . '/RpdeResources';
        return [
            [require $res . '/Orders.php', file_get_contents($res . '/orders.json')],
            [require $res . '/FacilityUses.php', file_get_contents($res . '/facility_uses.json')],
            [require $res . '/Slots.php', file_get_contents($res . '/slots.json')],
        ];
    }
}
