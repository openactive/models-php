<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Thing, which means that any of this type's properties within schema.org may also be used.
 *
 */
class DynamicPayment extends \OpenActive\Models\OA\Payment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "DynamicPayment";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
