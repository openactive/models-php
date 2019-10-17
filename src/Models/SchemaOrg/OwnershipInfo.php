<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class OwnershipInfo extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The product that this structured value is referring to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product
     */
    protected $typeOfGood;

    /**
     * The date and time of giving up ownership on the product.
     *
     *
     * @var DateTime|null
     */
    protected $ownedThrough;

    /**
     * The organization or person from which the product was acquired.
     *
     *
     * @var Organization|Person
     */
    protected $acquiredFrom;

    /**
     * The date and time of obtaining the product.
     *
     *
     * @var DateTime|null
     */
    protected $ownedFrom;

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product $typeOfGood
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTypeOfGood($typeOfGood)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $typeOfGood = self::checkTypes($typeOfGood, $types);

        $this->typeOfGood = $typeOfGood;
    }

    /**
     * @return DateTime|null
     */
    public function getOwnedThrough()
    {
        return $this->ownedThrough;
    }

    /**
     * @param DateTime|null $ownedThrough
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOwnedThrough($ownedThrough)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $ownedThrough = self::checkTypes($ownedThrough, $types);

        $this->ownedThrough = $ownedThrough;
    }

    /**
     * @return Organization|Person
     */
    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }

    /**
     * @param Organization|Person $acquiredFrom
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAcquiredFrom($acquiredFrom)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $acquiredFrom = self::checkTypes($acquiredFrom, $types);

        $this->acquiredFrom = $acquiredFrom;
    }

    /**
     * @return DateTime|null
     */
    public function getOwnedFrom()
    {
        return $this->ownedFrom;
    }

    /**
     * @param DateTime|null $ownedFrom
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOwnedFrom($ownedFrom)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $ownedFrom = self::checkTypes($ownedFrom, $types);

        $this->ownedFrom = $ownedFrom;
    }

}
