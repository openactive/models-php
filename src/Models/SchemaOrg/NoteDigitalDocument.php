<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NoteDigitalDocument extends \OpenActive\Models\SchemaOrg\DigitalDocument
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:NoteDigitalDocument";
    }

}
