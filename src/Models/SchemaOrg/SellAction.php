<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SellAction extends \OpenActive\Models\SchemaOrg\TradeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SellAction";
    }

    public static function fieldList() {
        $fields = [
            "buyer" => "buyer",
            "warrantyPromise" => "warrantyPromise",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The participant/person/organization that bought the object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $buyer;

    /**
     * The warranty promise(s) included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WarrantyPromise|string
     */
    protected $warrantyPromise;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $buyer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBuyer($buyer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $buyer = self::checkTypes($buyer, $types);

        $this->buyer = $buyer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WarrantyPromise|string
     */
    public function getWarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WarrantyPromise|string $warrantyPromise
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWarrantyPromise($warrantyPromise)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WarrantyPromise",
            "string",
        ];

        $warrantyPromise = self::checkTypes($warrantyPromise, $types);

        $this->warrantyPromise = $warrantyPromise;
    }

}
