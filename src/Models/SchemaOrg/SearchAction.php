<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Action](https://schema.org/Action), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class SearchAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * A sub property of instrument. The query used on this action.
     *
     *
     * @var string
     */
    protected $query;

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setQuery($query)
    {
        $types = array(
            "string",
        );

        $query = self::checkTypes($query, $types);

        $this->query = $query;
    }

}
