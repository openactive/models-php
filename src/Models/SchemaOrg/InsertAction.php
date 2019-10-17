<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class InsertAction extends \OpenActive\Models\SchemaOrg\AddAction
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
