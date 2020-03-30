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
     * A floorplan of some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\FloorPlan
     */
    protected $accommodationFloorPlan;

    /**
     * @return \OpenActive\Models\SchemaOrg\FloorPlan
     */
    public function getAccommodationFloorPlan()
    {
        return $this->accommodationFloorPlan;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\FloorPlan $accommodationFloorPlan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccommodationFloorPlan($accommodationFloorPlan)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\FloorPlan",
        );

        $accommodationFloorPlan = self::checkTypes($accommodationFloorPlan, $types);

        $this->accommodationFloorPlan = $accommodationFloorPlan;
    }

}
