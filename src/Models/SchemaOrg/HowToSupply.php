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
    static public function getType()
    {
        return "schema:HowToSupply";
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        );

        $estimatedCost = self::checkTypes($estimatedCost, $types);

        $this->estimatedCost = $estimatedCost;
    }

}
