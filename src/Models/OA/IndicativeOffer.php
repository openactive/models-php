<?php

namespace OpenActive\Models\OA;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.] 
 * This type is derived from https://schema.org/Offer, which means that any of this type's properties within schema.org may also be used.
 *
 */
class IndicativeOffer extends \OpenActive\Models\OA\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "beta:IndicativeOffer";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
