<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Grant extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Grant";
    }

    public static function fieldList() {
        $fields = [
            "fundedItem" => "fundedItem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates an item funded or sponsored through a <a class="localLink" href="https://schema.org/Grant">Grant</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $fundedItem;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getFundedItem()
    {
        return $this->fundedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $fundedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFundedItem($fundedItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $fundedItem = self::checkTypes($fundedItem, $types);

        $this->fundedItem = $fundedItem;
    }

}
