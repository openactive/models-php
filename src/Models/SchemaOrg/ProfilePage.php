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
    static public function getType()
    {
        return "schema:ProfilePage";
    }

}
