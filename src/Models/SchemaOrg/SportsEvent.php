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
            "homeTeam" => "homeTeam",
            "awayTeam" => "awayTeam",
            "competitor" => "competitor",
            "sport" => "sport",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The home team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam|string
     */
    protected $homeTeam;

    /**
     * The away team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $awayTeam;

    /**
     * A competitor in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam|string
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
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam|string
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam|string $homeTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHomeTeam($homeTeam)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "string",
        ];

        $homeTeam = self::checkTypes($homeTeam, $types);

        $this->homeTeam = $homeTeam;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person|string $awayTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwayTeam($awayTeam)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $awayTeam = self::checkTypes($awayTeam, $types);

        $this->awayTeam = $awayTeam;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam|string
     */
    public function getCompetitor()
    {
        return $this->competitor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam|string $competitor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCompetitor($competitor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "string",
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

}
