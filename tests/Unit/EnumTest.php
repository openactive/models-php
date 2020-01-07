<?php

namespace OpenActive\Models\Tests\Unit;

use PHPUnit\Framework\TestCase;
use OpenActive\Enums\SchemaOrg\EventStatusType;
use OpenActive\Models\OA\ScheduledSession;

class EnumTest extends TestCase
{
    public function testConstruction()
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
    }
}
