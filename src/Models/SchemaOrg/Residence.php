<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Residence extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Residence";
    }

    public static function fieldList() {
        $fields = [
            "accommodationFloorPlan" => "accommodationFloorPlan",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A floorplan of some [[Accommodation]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\FloorPlan|string
     */
    protected $accommodationFloorPlan;

    /**
     * @return \OpenActive\Models\SchemaOrg\FloorPlan|string
     */
    public function getAccommodationFloorPlan()
    {
        return $this->accommodationFloorPlan;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\FloorPlan|string $accommodationFloorPlan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccommodationFloorPlan($accommodationFloorPlan)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\FloorPlan",
            "string",
        ];

        $accommodationFloorPlan = self::checkTypes($accommodationFloorPlan, $types);

        $this->accommodationFloorPlan = $accommodationFloorPlan;
    }

}
