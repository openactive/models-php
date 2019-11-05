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
    static public function getType()
    {
        return "schema:QAPage";
    }

}
