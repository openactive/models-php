<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OwnershipInfo extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OwnershipInfo";
    }

    public static function fieldList() {
        $fields = [
            "typeOfGood" => "typeOfGood",
            "ownedFrom" => "ownedFrom",
            "ownedThrough" => "ownedThrough",
            "acquiredFrom" => "acquiredFrom",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The product that this structured value is referring to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    protected $typeOfGood;

    /**
     * The date and time of obtaining the product.
     *
     *
     * @var DateTime|null
     */
    protected $ownedFrom;

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
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $acquiredFrom;

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service $typeOfGood
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypeOfGood($typeOfGood)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $typeOfGood = self::checkTypes($typeOfGood, $types);

        $this->typeOfGood = $typeOfGood;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $acquiredFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcquiredFrom($acquiredFrom)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $acquiredFrom = self::checkTypes($acquiredFrom, $types);

        $this->acquiredFrom = $acquiredFrom;
    }

}
