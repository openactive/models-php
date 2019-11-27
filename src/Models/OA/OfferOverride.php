<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Offer](https://schema.org/Offer), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class OfferOverride extends \OpenActive\Models\OA\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OfferOverride";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
