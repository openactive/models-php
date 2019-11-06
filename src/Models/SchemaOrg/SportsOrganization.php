<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Organization](https://schema.org/Organization), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class SportsOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SportsOrganization";
    }

    /**
     * A type of sport (e.g. Baseball).
     *
     *
     * @var string
     */
    protected $sport;

    /**
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * @param string $sport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSport($sport)
    {
        $types = array(
            "string",
        );

        $sport = self::checkTypes($sport, $types);

        $this->sport = $sport;
    }

}
