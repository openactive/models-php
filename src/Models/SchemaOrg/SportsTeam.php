<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SportsTeam extends \OpenActive\Models\SchemaOrg\SportsOrganization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SportsTeam";
    }

    public static function fieldList() {
        $fields = [
            "athlete" => "athlete",
            "coach" => "coach",
            "gender" => "gender",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A person that acts as performing member of a sports team; a player as opposed to a coach.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $athlete;

    /**
     * A person that acts in a coaching role for a sports team.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $coach;

    /**
     * Gender of something, typically a <a class="localLink" href="https://schema.org/Person">Person</a>, but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The <a class="localLink" href="https://schema.org/gender">gender</a> property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender <a class="localLink" href="https://schema.org/SportsTeam">SportsTeam</a> can be indicated with a text value of "Mixed".
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\GenderType|null|string
     */
    protected $gender;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getAthlete()
    {
        return $this->athlete;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $athlete
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAthlete($athlete)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $athlete = self::checkTypes($athlete, $types);

        $this->athlete = $athlete;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $coach
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoach($coach)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $coach = self::checkTypes($coach, $types);

        $this->coach = $coach;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GenderType|null|string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GenderType|null|string $gender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGender($gender)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "null",
            "string",
        );

        $gender = self::checkTypes($gender, $types);

        $this->gender = $gender;
    }

}
