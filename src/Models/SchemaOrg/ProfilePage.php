<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProfilePage extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ProfilePage";
    }

}
