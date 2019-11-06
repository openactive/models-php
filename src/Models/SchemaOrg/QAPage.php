<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class QAPage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:QAPage";
    }

}
