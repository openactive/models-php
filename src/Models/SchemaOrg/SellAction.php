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
            "warrantyPromise" => "warrantyPromise",
            "buyer" => "buyer",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The warranty promise(s) included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WarrantyPromise
     */
    protected $warrantyPromise;

    /**
     * A sub property of participant. The participant/person/organization that bought the object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $buyer;

    /**
     * @return \OpenActive\Models\SchemaOrg\WarrantyPromise
     */
    public function getWarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WarrantyPromise $warrantyPromise
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWarrantyPromise($warrantyPromise)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WarrantyPromise",
        ];

        $warrantyPromise = self::checkTypes($warrantyPromise, $types);

        $this->warrantyPromise = $warrantyPromise;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $buyer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBuyer($buyer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $buyer = self::checkTypes($buyer, $types);

        $this->buyer = $buyer;
    }

}
