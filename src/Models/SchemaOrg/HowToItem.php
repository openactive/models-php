<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowToItem extends \OpenActive\Models\SchemaOrg\ListItem
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowToItem";
    }

    public static function fieldList() {
        $fields = [
            "requiredQuantity" => "requiredQuantity",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The required quantity of the item(s).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|float|null
     */
    protected $requiredQuantity;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|float|null
     */
    public function getRequiredQuantity()
    {
        return $this->requiredQuantity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|float|null $requiredQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredQuantity($requiredQuantity)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "float",
            "null",
        );

        $requiredQuantity = self::checkTypes($requiredQuantity, $types);

        $this->requiredQuantity = $requiredQuantity;
    }

}
