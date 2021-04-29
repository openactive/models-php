<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MoveAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MoveAction";
    }

    public static function fieldList() {
        $fields = [
            "fromLocation" => "fromLocation",
            "toLocation" => "toLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $toLocation;

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $fromLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFromLocation($fromLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $fromLocation = self::checkTypes($fromLocation, $types);

        $this->fromLocation = $fromLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $toLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setToLocation($toLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $toLocation = self::checkTypes($toLocation, $types);

        $this->toLocation = $toLocation;
    }

}
