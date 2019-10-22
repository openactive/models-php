<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class PerformanceRole extends \OpenActive\Models\SchemaOrg\Role
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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