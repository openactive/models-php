<?php

namespace OpenActive\Models\OA;

/**
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
