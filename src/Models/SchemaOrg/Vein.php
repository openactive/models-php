<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Vein extends \OpenActive\Models\SchemaOrg\Vessel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Vein";
    }

    public static function fieldList() {
        $fields = [
            "regionDrained" => "regionDrained",
            "tributary" => "tributary",
            "drainsTo" => "drainsTo",
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
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    protected $tributary;

    /**
     * The vasculature that the vein drains into.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vessel
     */
    protected $drainsTo;

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
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    public function getTributary()
    {
        return $this->tributary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure $tributary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTributary($tributary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
        ];

        $tributary = self::checkTypes($tributary, $types);

        $this->tributary = $tributary;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Vessel
     */
    public function getDrainsTo()
    {
        return $this->drainsTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vessel $drainsTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrainsTo($drainsTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Vessel",
        ];

        $drainsTo = self::checkTypes($drainsTo, $types);

        $this->drainsTo = $drainsTo;
    }

}
