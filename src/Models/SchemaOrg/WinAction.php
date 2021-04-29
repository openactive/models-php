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
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $loser;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getLoser()
    {
        return $this->loser;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $loser
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLoser($loser)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $loser = self::checkTypes($loser, $types);

        $this->loser = $loser;
    }

}
