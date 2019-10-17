<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class SportsTeam extends \OpenActive\Models\SchemaOrg\SportsOrganization
{
    /**
     * A person that acts as performing member of a sports team; a player as opposed to a coach.
     *
     *
     * @var Person
     */
    protected $athlete;

    /**
     * A person that acts in a coaching role for a sports team.
     *
     *
     * @var Person
     */
    protected $coach;

    /**
     * @return Person
     */
    public function getAthlete()
    {
        return $this->athlete;
    }

    /**
     * @param Person $athlete
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAthlete($athlete)
    {
        $types = array(
            "Person",
        );

        $athlete = self::checkTypes($athlete, $types);

        $this->athlete = $athlete;
    }

    /**
     * @return Person
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param Person $coach
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCoach($coach)
    {
        $types = array(
            "Person",
        );

        $coach = self::checkTypes($coach, $types);

        $this->coach = $coach;
    }

}
