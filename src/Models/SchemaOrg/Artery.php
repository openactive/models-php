<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Artery extends \OpenActive\Models\SchemaOrg\Vessel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Artery";
    }

    public static function fieldList() {
        $fields = [
            "arterialBranch" => "arterialBranch",
            "supplyTo" => "supplyTo",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The branches that comprise the arterial structure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    protected $arterialBranch;

    /**
     * The area to which the artery supplies blood.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    protected $supplyTo;

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    public function getArterialBranch()
    {
        return $this->arterialBranch;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure $arterialBranch
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArterialBranch($arterialBranch)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
        ];

        $arterialBranch = self::checkTypes($arterialBranch, $types);

        $this->arterialBranch = $arterialBranch;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    public function getSupplyTo()
    {
        return $this->supplyTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure $supplyTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSupplyTo($supplyTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
        ];

        $supplyTo = self::checkTypes($supplyTo, $types);

        $this->supplyTo = $supplyTo;
    }

}
