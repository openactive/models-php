<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OccupationalExperienceRequirements extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OccupationalExperienceRequirements";
    }

    public static function fieldList() {
        $fields = [
            "monthsOfExperience" => "monthsOfExperience",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the minimal number of months of experience required for a position.
     *
     *
     * @var Number|null
     */
    protected $monthsOfExperience;

    /**
     * @return Number|null
     */
    public function getMonthsOfExperience()
    {
        return $this->monthsOfExperience;
    }

    /**
     * @param Number|null $monthsOfExperience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMonthsOfExperience($monthsOfExperience)
    {
        $types = [
            "Number",
            "null",
        ];

        $monthsOfExperience = self::checkTypes($monthsOfExperience, $types);

        $this->monthsOfExperience = $monthsOfExperience;
    }

}
