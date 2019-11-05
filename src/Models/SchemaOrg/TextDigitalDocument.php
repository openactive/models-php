<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TextDigitalDocument extends \OpenActive\Models\SchemaOrg\DigitalDocument
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:TextDigitalDocument";
    }

}
