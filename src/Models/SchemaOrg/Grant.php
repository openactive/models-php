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
            "funder" => "funder",
            "fundedItem" => "fundedItem",
            "sponsor" => "sponsor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $funder;

    /**
     * Indicates something directly or indirectly funded or sponsored through a [[Grant]]. See also [[ownershipFundingInfo]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\BioChemEntity|\OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\MedicalEntity|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Product|string
     */
    protected $fundedItem;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $sponsor;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\BioChemEntity|\OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\MedicalEntity|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Product|string
     */
    public function getFundedItem()
    {
        return $this->fundedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\BioChemEntity|\OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\MedicalEntity|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Product|string $fundedItem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFundedItem($fundedItem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\BioChemEntity",
            "\OpenActive\Models\SchemaOrg\Event",
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $fundedItem = self::checkTypes($fundedItem, $types);

        $this->fundedItem = $fundedItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

}
