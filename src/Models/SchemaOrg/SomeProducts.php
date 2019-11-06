<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SomeProducts extends \OpenActive\Models\SchemaOrg\Product
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SomeProducts";
    }

    /**
     * The current approximate inventory level for the item or items.
     *
     *
     * @var QuantitativeValue
     */
    protected $inventoryLevel;

    /**
     * @return QuantitativeValue
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    /**
     * @param QuantitativeValue $inventoryLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInventoryLevel($inventoryLevel)
    {
        $types = array(
            "QuantitativeValue",
        );

        $inventoryLevel = self::checkTypes($inventoryLevel, $types);

        $this->inventoryLevel = $inventoryLevel;
    }

}
