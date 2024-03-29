<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MonetaryGrant extends \OpenActive\Models\SchemaOrg\Grant
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MonetaryGrant";
    }

    public static function fieldList() {
        $fields = [
            "funder" => "funder",
            "amount" => "amount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $funder;

    /**
     * The amount of money.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|null
     */
    protected $amount;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\MonetaryAmount|string|null $amount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAmount($amount)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
            "null",
        ];

        $amount = self::checkTypes($amount, $types);

        $this->amount = $amount;
    }

}
