<?php

namespace OpenActive\Models\Tests\Unit\Helpers;

use OpenActive\Helpers\JsonLd;
use PHPUnit\Framework\TestCase;

class JsonLdTest extends TestCase
{
    /**
     * @param $dateTime
     * @dataProvider dateTimeProvider
     */
    public function testSerializesDateTimes($dateTime)
    {
        $this->assertEquals('2020-01-01T11:00:00+00:00', JsonLd::prepareDataForSerialization($dateTime));
    }

    /**
     * @param $dateInterval
     * @dataProvider dateIntervalProvider
     */
    public function testSerializesDateIntervals($dateInterval)
    {
        $this->assertEquals('P1DT1H', JsonLd::prepareDataForSerialization($dateInterval));
    }

    public function dateTimeProvider()
    {
        return [
            [new \DateTime('2020-01-01T11:00:00+00:00')],
            [new \DateTimeImmutable('2020-01-01T11:00:00+00:00')],
            [new DateTimeExtension('2020-01-01T11:00:00+00:00')],
        ];
    }

    public function dateIntervalProvider()
    {
        return [
            [new \DateInterval('P1DT1H')],
            [new DateIntervalExtension('P1DT1H')],
        ];
    }
}
