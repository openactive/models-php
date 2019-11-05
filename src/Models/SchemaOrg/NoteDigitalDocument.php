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
    static public function getType()
    {
        return "schema:NoteDigitalDocument";
    }

}
