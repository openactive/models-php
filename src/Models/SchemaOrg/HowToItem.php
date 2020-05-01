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
     * @var string|float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $requiredQuantity;

    /**
     * @return string|float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getRequiredQuantity()
    {
        return $this->requiredQuantity;
    }

    /**
     * @param string|float|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $requiredQuantity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiredQuantity($requiredQuantity)
    {
        $types = array(
            "string",
            "float",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $requiredQuantity = self::checkTypes($requiredQuantity, $types);

        $this->requiredQuantity = $requiredQuantity;
    }

}
