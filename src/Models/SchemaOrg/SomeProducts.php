<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class SomeProducts extends \OpenActive\Models\SchemaOrg\Product
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
