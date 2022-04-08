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
            "ownedFrom" => "ownedFrom",
            "typeOfGood" => "typeOfGood",
            "acquiredFrom" => "acquiredFrom",
            "ownedThrough" => "ownedThrough",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date and time of obtaining the product.
     *
     *
     * @var DateTime|null
     */
    protected $ownedFrom;

    /**
     * The product that this structured value is referring to.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    protected $typeOfGood;

    /**
     * The organization or person from which the product was acquired.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $acquiredFrom;

    /**
     * The date and time of giving up ownership on the product.
     *
     *
     * @var DateTime|null
     */
    protected $ownedThrough;

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
        $types = [
            "DateTime",
            "null",
        ];

        $ownedFrom = self::checkTypes($ownedFrom, $types);

        $this->ownedFrom = $ownedFrom;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string $typeOfGood
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypeOfGood($typeOfGood)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "string",
        ];

        $typeOfGood = self::checkTypes($typeOfGood, $types);

        $this->typeOfGood = $typeOfGood;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $acquiredFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcquiredFrom($acquiredFrom)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $acquiredFrom = self::checkTypes($acquiredFrom, $types);

        $this->acquiredFrom = $acquiredFrom;
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
        $types = [
            "DateTime",
            "null",
        ];

        $ownedThrough = self::checkTypes($ownedThrough, $types);

        $this->ownedThrough = $ownedThrough;
    }

}
