<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class PrivacyPolicy extends \OpenActive\Models\OA\Terms
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PrivacyPolicy";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
