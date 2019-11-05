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
    static public function getType()
    {
        return "schema:ContactPage";
    }

}
