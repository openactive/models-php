<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WinAction extends \OpenActive\Models\SchemaOrg\AchieveAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WinAction";
    }

    public static function fieldList() {
        $fields = [
            "loser" => "loser",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The loser of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $loser;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getLoser()
    {
        return $this->loser;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $loser
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoser($loser)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $loser = self::checkTypes($loser, $types);

        $this->loser = $loser;
    }

}
