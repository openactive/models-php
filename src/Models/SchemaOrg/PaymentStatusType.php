<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PaymentStatusType extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PaymentStatusType";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
