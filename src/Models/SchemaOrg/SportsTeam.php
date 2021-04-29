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
            "coach" => "coach",
            "gender" => "gender",
            "athlete" => "athlete",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A person that acts in a coaching role for a sports team.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $coach;

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\GenderType|string|null
     */
    protected $gender;

    /**
     * A person that acts as performing member of a sports team; a player as opposed to a coach.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $athlete;

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $coach = self::checkTypes($coach, $types);

        $this->coach = $coach;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GenderType|string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GenderType|string|null $gender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGender($gender)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "string",
            "null",
        ];

        $gender = self::checkTypes($gender, $types);

        $this->gender = $gender;
    }

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $athlete = self::checkTypes($athlete, $types);

        $this->athlete = $athlete;
    }

}
