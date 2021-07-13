<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TravelAction extends \OpenActive\Models\SchemaOrg\MoveAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TravelAction";
    }

    public static function fieldList() {
        $fields = [
            "distance" => "distance",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|string
     */
    protected $distance;

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|string $distance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistance($distance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
        ];

        $distance = self::checkTypes($distance, $types);

        $this->distance = $distance;
    }

}
