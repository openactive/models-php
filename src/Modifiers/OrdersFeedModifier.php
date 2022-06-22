<?php

namespace OpenActive\Modifiers;

class OrdersFeedModifier
{
    public function __invoke($class, $key, $value)
    {
        if (in_array($key, [
            'orderNumber',
            'seller',
            'customer',
            'broker',
            'brokerRole',
            'payment',
            'position'
        ])) {
            return null;
        }
        return $value;
    }
}
