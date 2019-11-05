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
    static public function getType()
    {
        return "schema:EmailMessage";
    }

}
