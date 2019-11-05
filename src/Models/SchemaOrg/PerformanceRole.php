<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PerformanceRole extends \OpenActive\Models\SchemaOrg\Role
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:PerformanceRole";
    }

    /**
     * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
     *
     *
     * @var string
     */
    protected $characterName;

    /**
     * @return string
     */
    public function getCharacterName()
    {
        return $this->characterName;
    }

    /**
     * @param string $characterName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCharacterName($characterName)
    {
        $types = array(
            "string",
        );

        $characterName = self::checkTypes($characterName, $types);

        $this->characterName = $characterName;
    }

}
