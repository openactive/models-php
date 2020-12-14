<?php

namespace OpenActive\Models\SchemaOrg;

/**
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

    public static function fieldList() {
        $fields = [
            "competitor" => "competitor",
            "sport" => "sport",
            "awayTeam" => "awayTeam",
            "homeTeam" => "homeTeam",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A competitor in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person
     */
    protected $competitor;

    /**
     * A type of sport (e.g. Baseball).
     *
     *
     * @var string
     */
    protected $sport;

    /**
     * The away team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    protected $awayTeam;

    /**
     * The home team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    protected $homeTeam;

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person
     */
    public function getCompetitor()
    {
        return $this->competitor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person $competitor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCompetitor($competitor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $competitor = self::checkTypes($competitor, $types);

        $this->competitor = $competitor;
    }

    /**
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * @param string $sport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSport($sport)
    {
        $types = [
            "string",
        ];

        $sport = self::checkTypes($sport, $types);

        $this->sport = $sport;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam $awayTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwayTeam($awayTeam)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\SportsTeam",
        ];

        $awayTeam = self::checkTypes($awayTeam, $types);

        $this->awayTeam = $awayTeam;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam $homeTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHomeTeam($homeTeam)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\SportsTeam",
        ];

        $homeTeam = self::checkTypes($homeTeam, $types);

        $this->homeTeam = $homeTeam;
    }

}
