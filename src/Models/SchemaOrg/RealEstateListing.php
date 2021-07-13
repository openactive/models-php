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
            "leaseLength" => "leaseLength",
            "datePosted" => "datePosted",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null
     */
    protected $leaseLength;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null
     */
    public function getLeaseLength()
    {
        return $this->leaseLength;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|string|null $leaseLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeaseLength($leaseLength)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "DateInterval",
            "string",
            "null",
        ];

        $leaseLength = self::checkTypes($leaseLength, $types);

        $this->leaseLength = $leaseLength;
    }

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

}
