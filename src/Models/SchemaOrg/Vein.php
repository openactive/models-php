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
            "tributary" => "tributary",
            "drainsTo" => "drainsTo",
            "regionDrained" => "regionDrained",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $tributary;

    /**
     * The vasculature that the vein drains into.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Vessel|string
     */
    protected $drainsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem|string
     */
    protected $regionDrained;

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    public function getTributary()
    {
        return $this->tributary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|string $tributary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTributary($tributary)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $tributary = self::checkTypes($tributary, $types);

        $this->tributary = $tributary;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Vessel|string
     */
    public function getDrainsTo()
    {
        return $this->drainsTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Vessel|string $drainsTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrainsTo($drainsTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Vessel",
            "string",
        ];

        $drainsTo = self::checkTypes($drainsTo, $types);

        $this->drainsTo = $drainsTo;
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
