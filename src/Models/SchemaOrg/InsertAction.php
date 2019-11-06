<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InsertAction extends \OpenActive\Models\SchemaOrg\AddAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InsertAction";
    }

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     *
     * @var Place
     */
    protected $toLocation;

    /**
     * @return Place
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param Place $toLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setToLocation($toLocation)
    {
        $types = array(
            "Place",
        );

        $toLocation = self::checkTypes($toLocation, $types);

        $this->toLocation = $toLocation;
    }

}
