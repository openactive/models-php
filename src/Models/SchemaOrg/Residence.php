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
            "floorLevel" => "floorLevel",
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
     * The floor level for an [[Accommodation]] in a multi-storey building. Since counting
     *   systems [vary internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations), the local system should be used where possible.
     *
     *
     * @var string
     */
    protected $floorLevel;

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

    /**
     * @return string
     */
    public function getFloorLevel()
    {
        return $this->floorLevel;
    }

    /**
     * @param string $floorLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFloorLevel($floorLevel)
    {
        $types = [
            "string",
        ];

        $floorLevel = self::checkTypes($floorLevel, $types);

        $this->floorLevel = $floorLevel;
    }

}
