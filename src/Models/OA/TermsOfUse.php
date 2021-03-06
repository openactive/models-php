<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/DigitalDocument, which means that any of this type's properties within schema.org may also be used.
 *
 */
class TermsOfUse extends \OpenActive\Models\OA\Terms
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TermsOfUse";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
