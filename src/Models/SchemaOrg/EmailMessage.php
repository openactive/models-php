<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EmailMessage extends \OpenActive\Models\SchemaOrg\Message
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EmailMessage";
    }

}
