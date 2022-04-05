<?php

namespace OpenActive\Models\Tests\Unit;

use OpenActive\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use OpenActive\Enums\SchemaOrg\EventStatusType;
use OpenActive\Models\OA\ScheduledSession;
use OpenActive\Enums\PaymentMethod;
use OpenActive\Models\OA\Offer;

class EnumTest extends TestCase
{
    public function testConstructionFromObj()
    {
        $eventStatus = new EventStatusType\EventCancelled();
        $scheduledSessionData = [
            'id' => '124',
            'identifier' => '1234',
            'duration' => 'PT1H',
            'eventStatus' => $eventStatus
        ];
        $session = new ScheduledSession($scheduledSessionData);

        $this->assertInstanceOf(ScheduledSession::class, $session);
        $this->assertInstanceOf(
            EventStatusType\EventCancelled::class,
            $session->getEventStatus()
        );
    }

    public function testConstructionFromStr()
    {
        $eventStatus = "https://schema.org/EventCancelled";
        $scheduledsessionOptions = [
            'id' => '124',
            'identifier' => '1234',
            'duration' => 'PT1H',
            'eventStatus' => $eventStatus
        ];
        $session = new ScheduledSession($scheduledsessionOptions);

        $this->assertInstanceOf(ScheduledSession::class, $session);
        $this->assertInstanceOf(
            EventStatusType\EventCancelled::class,
            $session->getEventStatus()
        );
    }

    public function testEnumSerialization()
    {
        $eventStatus = new EventStatusType\EventCancelled();
        $scheduledSessionData = [
            'id' => '124',
            'identifier' => '1234',
            'duration' => 'PT1H',
            'eventStatus' => $eventStatus
        ];
        $session = new ScheduledSession($scheduledSessionData);

        $classname = ScheduledSession::class;

        $serializedData = json_decode($classname::serialize($session), true);

        $this->assertEquals(
            $serializedData['eventStatus'],
            $eventStatus::memberVal
        );
    }

    public function testPaymentMethodEnum()
    {
        $paymentMethod = new PaymentMethod\Cash;

        $offer = new Offer(['acceptedPaymentMethod' => [$paymentMethod]]);

        $this->assertEquals(
            [$paymentMethod],
            $offer->getAcceptedPaymentMethod()
        );
    }

    /** @dataProvider invalidEnumValues */
    public function testInvalidPaymentMethodEnum($value)
    {
        $this->expectException(InvalidArgumentException::class);

        new Offer(['acceptedPaymentMethod' => [$value]]);
    }

    public function invalidEnumValues()
    {
        return [
            'string' => ['dummy'],
            'numeric' => [50],
            'object' => [new \stdClass],
            'array' => [[1, 2, 3]],
        ];
    }
}
