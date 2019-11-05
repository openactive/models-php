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
    static public function getType()
    {
        return "schema:LoseAction";
    }

    /**
     * A sub property of participant. The winner of the action.
     *
     *
     * @var Person
     */
    protected $winner;

    /**
     * @return Person
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param Person $winner
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWinner($winner)
    {
        $types = array(
            "Person",
        );

        $winner = self::checkTypes($winner, $types);

        $this->winner = $winner;
    }

}
