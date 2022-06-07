<?php

namespace OpenActive\Models\Tests\Unit\Modifiers;

use OpenActive\Models\OA\Slot;
use OpenActive\Modifiers\TimezoneNormalizerModifier;
use PHPUnit\Framework\TestCase;

class TimezoneNormalizerModifierTest extends TestCase
{
    public function testAddsTimezoneToSlot()
    {
        $slot = new Slot([
            'startDate' => '2020-06-01T10:00:00+00:00',
            'endDate' => '2020-06-01T11:00:00+00:00',
        ]);
        $serialized = Slot::serialize($slot, false, false, [
            new TimezoneNormalizerModifier('Europe/London')
        ]);
        $decoded = json_decode($serialized, true);
        $this->assertEquals('2020-06-01T11:00:00+01:00', $decoded['startDate']);
        $this->assertEquals('2020-06-01T12:00:00+01:00', $decoded['endDate']);
    }

    public function testConvertsSlotBackToUTC()
    {
        $serialized = Slot::serialize(new Slot([
            'startDate' => '2020-06-01T11:00:00+01:00',
            'endDate' => '2020-06-01T12:00:00+01:00',
        ]));
        /** @var Slot $slot */
        $slot = Slot::deserialize($serialized, [
            new TimezoneNormalizerModifier('Europe/London')
        ]);
        $this->assertEquals(new \DateTime('2020-06-01T10:00:00+00:00'), $slot->getStartDate());
        $this->assertEquals(new \DateTime('2020-06-01T11:00:00+00:00'), $slot->getEndDate());
    }
}
