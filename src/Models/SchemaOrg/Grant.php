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
            "sponsor" => "sponsor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates an item funded or sponsored through a [[Grant]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $fundedItem;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $sponsor;

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $fundedItem = self::checkTypes($fundedItem, $types);

        $this->fundedItem = $fundedItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

}
