<?php

namespace OpenActive\Models\Tests\Unit\Concerns;

use OpenActive\Exceptions\InvalidArgumentException;
use OpenActive\Models\OA\Order;
use PHPUnit\Framework\TestCase;

class TypeCheckerTest extends TestCase
{
    public function testRejectsInvalidType()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The first argument type does not match any of the declared parameter types (\OpenActive\Models\OA\Organization) for "foo" at Order.Broker');
        new Order([
            'broker' => 'foo'
        ]);
    }

    public function testRejectsInvalidTypeWithLocationInformation()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The first argument type does not match any of the declared parameter types (int, null) for "foo" at OrderItem.Position');

        new Order([
            'orderedItem' => [[
                '@type' => 'OrderItem',
                'position' => 'foo',
            ]]
        ]);
    }

    public function testRejectsInvalidTypeWithDeepLocationInformation()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The first argument type does not match any of the declared parameter types (string) for 509384 at Offer.Description');

        new Order([
            'orderedItem' => [[
                '@type' => 'OrderItem',
                'acceptedOffer' => [
                    '@type' => 'Offer',
                    'description' => 509384,
                ],
            ]]
        ]);
    }
}
