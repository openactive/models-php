<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BuyAction extends \OpenActive\Models\SchemaOrg\TradeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BuyAction";
    }

    public static function fieldList() {
        $fields = [
            "warrantyPromise" => "warrantyPromise",
            "seller" => "seller",
            "vendor" => "vendor",
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
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $seller;

    /**
     * 'vendor' is an earlier term for 'seller'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $vendor;

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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $vendor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVendor($vendor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $vendor = self::checkTypes($vendor, $types);

        $this->vendor = $vendor;
    }

}
