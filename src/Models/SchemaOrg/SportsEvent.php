<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Event](https://schema.org/Event), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class SportsEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SportsEvent";
    }

    /**
     * The away team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam|Person
     */
    protected $awayTeam;

    /**
     * A competitor in a sports event.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    protected $competitor;

    /**
     * The home team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam|Person
     */
    protected $homeTeam;

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam|Person
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam|Person $awayTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwayTeam($awayTeam)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "Person",
        );

        $awayTeam = self::checkTypes($awayTeam, $types);

        $this->awayTeam = $awayTeam;
    }

    /**
     * @return Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    public function getCompetitor()
    {
        return $this->competitor;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\SportsTeam $competitor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCompetitor($competitor)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\SportsTeam",
        );

        $competitor = self::checkTypes($competitor, $types);

        $this->competitor = $competitor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam|Person
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam|Person $homeTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHomeTeam($homeTeam)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "Person",
        );

        $homeTeam = self::checkTypes($homeTeam, $types);

        $this->homeTeam = $homeTeam;
    }

}
