<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ContactPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ContactPage";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
