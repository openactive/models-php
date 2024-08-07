<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RealEstateListing extends \OpenActive\Models\SchemaOrg\WebPage
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RealEstateListing";
    }

    public static function fieldList() {
        $fields = [
            "datePosted" => "datePosted",
            "leaseLength" => "leaseLength",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $leaseLength;

    /**
     * @return Date|DateTime|null
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * @param Date|DateTime|null $datePosted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePosted($datePosted)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePosted = self::checkTypes($datePosted, $types);

        $this->datePosted = $datePosted;
    }

    /**
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getLeaseLength()
    {
        return $this->leaseLength;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $leaseLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeaseLength($leaseLength)
    {
        $types = [
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $leaseLength = self::checkTypes($leaseLength, $types);

        $this->leaseLength = $leaseLength;
    }

}
