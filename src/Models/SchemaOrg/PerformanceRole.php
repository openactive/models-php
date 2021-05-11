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
    public static function getType()
    {
        return "schema:PerformanceRole";
    }

    public static function fieldList() {
        $fields = [
            "characterName" => "characterName",
        ];

        return array_merge(parent::fieldList(), $fields);
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
        $types = [
            "string",
        ];

        $characterName = self::checkTypes($characterName, $types);

        $this->characterName = $characterName;
    }

}
