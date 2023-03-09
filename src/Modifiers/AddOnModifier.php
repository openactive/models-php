<?php

namespace OpenActive\Modifiers;

use OpenActive\Models\OA;
use OpenActive\Models\Playfinder\OrderItem;

class AddOnModifier
{
    public function __invoke($class, $key, $value)
    {
        if (is_subclass_of($class, OA\Order::class) && $key === 'orderedItem') {
            return array_map(
                fn (array $item) => new OrderItem($item),
                $value
            );
        }
        return $value;
    }
}
