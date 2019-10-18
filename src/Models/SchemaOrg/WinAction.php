<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class WinAction extends \OpenActive\Models\SchemaOrg\AchieveAction
{
    /**
     * A sub property of participant. The loser of the action.
     *
     *
     * @var Person
     */
    protected $loser;

    /**
     * @return Person
     */
    public function getLoser()
    {
        return $this->loser;
    }

    /**
     * @param Person $loser
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLoser($loser)
    {
        $types = array(
            "Person",
        );

        $loser = self::checkTypes($loser, $types);

        $this->loser = $loser;
    }

}
