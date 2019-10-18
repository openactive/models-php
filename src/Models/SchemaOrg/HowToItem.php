<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class HowToItem extends \OpenActive\Models\SchemaOrg\ListItem
{
    /**
     * The required quantity of the item(s).
     *
     *
     * @var QuantitativeValue|decimal|string|null
     */
    protected $requiredQuantity;

    /**
     * @return QuantitativeValue|decimal|string|null
     */
    public function getRequiredQuantity()
    {
        return $this->requiredQuantity;
    }

    /**
     * @param QuantitativeValue|decimal|string|null $requiredQuantity
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRequiredQuantity($requiredQuantity)
    {
        $types = array(
            "QuantitativeValue",
            "decimal",
            "string",
            "null",
        );

        $requiredQuantity = self::checkTypes($requiredQuantity, $types);

        $this->requiredQuantity = $requiredQuantity;
    }

}
