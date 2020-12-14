<?php

namespace OpenActive\Models\SchemaOrg;

/**
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

    public static function fieldList() {
        $fields = [
            "sport" => "sport",
        ];

        return array_merge(parent::fieldList(), $fields);
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
        $types = [
            "string",
        ];

        $sport = self::checkTypes($sport, $types);

        $this->sport = $sport;
    }

}
