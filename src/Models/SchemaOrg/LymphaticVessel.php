<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LymphaticVessel extends \OpenActive\Models\SchemaOrg\Vessel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LymphaticVessel";
    }

    public static function fieldList() {
        $fields = [
            "regionDrained" => "regionDrained",
            "originatesFrom" => "originatesFrom",
            "runsTo" => "runsTo",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem
     */
    protected $regionDrained;

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vessel
     */
    protected $originatesFrom;

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vessel
     */
    protected $runsTo;

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem
     */
    public function getRegionDrained()
    {
        return $this->regionDrained;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem $regionDrained
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRegionDrained($regionDrained)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
        ];

        $regionDrained = self::checkTypes($regionDrained, $types);

        $this->regionDrained = $regionDrained;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Vessel
     */
    public function getOriginatesFrom()
    {
        return $this->originatesFrom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vessel $originatesFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginatesFrom($originatesFrom)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Vessel",
        ];

        $originatesFrom = self::checkTypes($originatesFrom, $types);

        $this->originatesFrom = $originatesFrom;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Vessel
     */
    public function getRunsTo()
    {
        return $this->runsTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vessel $runsTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRunsTo($runsTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Vessel",
        ];

        $runsTo = self::checkTypes($runsTo, $types);

        $this->runsTo = $runsTo;
    }

}
