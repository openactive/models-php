<?php

namespace OpenActive\Models\Playfinder;

use OpenActive\Models\OA;

class OrderItem extends OA\OrderItem
{
    /**
     * @var OrderItem|OA\OrderItem|null
     */
    private ?OA\OrderItem $parentOrderItem = null;

    public static function getType()
    {
        return "playfinder:OrderItem";
    }

    public static function fieldList() {
        $fields = [
            "parentOrderItem" => "beta:parentOrderItem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    public function getParentOrderItem(): ?OA\OrderItem
    {
        return $this->parentOrderItem;
    }

    public function setParentOrderItem(?OA\OrderItem $orderItem): void
    {
        $this->parentOrderItem = $orderItem;
    }
}
