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
     * @var Person
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\WarrantyPromise",
        );

        $warrantyPromise = self::checkTypes($warrantyPromise, $types);

        $this->warrantyPromise = $warrantyPromise;
    }

    /**
     * @return Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param Person $buyer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBuyer($buyer)
    {
        $types = array(
            "Person",
        );

        $buyer = self::checkTypes($buyer, $types);

        $this->buyer = $buyer;
    }

}
