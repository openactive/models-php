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
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $requiredQuantity;

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getRequiredQuantity()
    {
        return $this->requiredQuantity;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $requiredQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredQuantity($requiredQuantity)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $requiredQuantity = self::checkTypes($requiredQuantity, $types);

        $this->requiredQuantity = $requiredQuantity;
    }

}
