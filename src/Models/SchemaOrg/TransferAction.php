<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TransferAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TransferAction";
    }

    public static function fieldList() {
        $fields = [
            "toLocation" => "toLocation",
            "fromLocation" => "fromLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $toLocation;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $fromLocation;

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $toLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setToLocation($toLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $toLocation = self::checkTypes($toLocation, $types);

        $this->toLocation = $toLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $fromLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFromLocation($fromLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $fromLocation = self::checkTypes($fromLocation, $types);

        $this->fromLocation = $fromLocation;
    }

}
