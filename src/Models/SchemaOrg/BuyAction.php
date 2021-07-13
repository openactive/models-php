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
            "vendor" => "vendor",
            "seller" => "seller",
            "warrantyPromise" => "warrantyPromise",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * 'vendor' is an earlier term for 'seller'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $vendor;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $seller;

    /**
     * The warranty promise(s) included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WarrantyPromise|string
     */
    protected $warrantyPromise;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $vendor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVendor($vendor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $vendor = self::checkTypes($vendor, $types);

        $this->vendor = $vendor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $seller
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
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
