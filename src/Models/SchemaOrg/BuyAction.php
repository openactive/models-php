<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class BuyAction extends \OpenActive\Models\SchemaOrg\TradeAction
{
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     *
     * @var Person|Organization
     */
    protected $seller;

    /**
     * The warranty promise(s) included in the offer.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WarrantyPromise
     */
    protected $warrantyPromise;

    /**
     * 'vendor' is an earlier term for 'seller'.
     *
     *
     * @var Organization|Person
     */
    protected $vendor;

    /**
     * @return Person|Organization
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Person|Organization $seller
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSeller($seller)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $seller = self::checkTypes($seller, $types);

        $this->seller = $seller;
    }

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return Organization|Person
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param Organization|Person $vendor
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setVendor($vendor)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $vendor = self::checkTypes($vendor, $types);

        $this->vendor = $vendor;
    }

}
