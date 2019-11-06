<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FAQPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FAQPage";
    }

}
