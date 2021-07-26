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
            "originatesFrom" => "originatesFrom",
            "runsTo" => "runsTo",
            "regionDrained" => "regionDrained",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vessel|string
     */
    protected $originatesFrom;

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vessel|string
     */
    protected $runsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|string
     */
    protected $regionDrained;

    /**
     * @return \OpenActive\Models\SchemaOrg\Vessel|string
     */
    public function getOriginatesFrom()
    {
        return $this->originatesFrom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vessel|string $originatesFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOriginatesFrom($originatesFrom)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Vessel",
            "string",
        ];

        $originatesFrom = self::checkTypes($originatesFrom, $types);

        $this->originatesFrom = $originatesFrom;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Vessel|string
     */
    public function getRunsTo()
    {
        return $this->runsTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vessel|string $runsTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRunsTo($runsTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Vessel",
            "string",
        ];

        $runsTo = self::checkTypes($runsTo, $types);

        $this->runsTo = $runsTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|string
     */
    public function getRegionDrained()
    {
        return $this->regionDrained;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|string $regionDrained
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRegionDrained($regionDrained)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
            "string",
        ];

        $regionDrained = self::checkTypes($regionDrained, $types);

        $this->regionDrained = $regionDrained;
    }

}
