<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LoseAction extends \OpenActive\Models\SchemaOrg\AchieveAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LoseAction";
    }

    public static function fieldList() {
        $fields = [
            "winner" => "winner",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The winner of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $winner;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $winner
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWinner($winner)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $winner = self::checkTypes($winner, $types);

        $this->winner = $winner;
    }

}
