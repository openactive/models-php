<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowToSupply extends \OpenActive\Models\SchemaOrg\HowToItem
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowToSupply";
    }

    public static function fieldList() {
        $fields = [
            "estimatedCost" => "estimatedCost",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $estimatedCost;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getEstimatedCost()
    {
        return $this->estimatedCost;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $estimatedCost
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedCost($estimatedCost)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $estimatedCost = self::checkTypes($estimatedCost, $types);

        $this->estimatedCost = $estimatedCost;
    }

}
