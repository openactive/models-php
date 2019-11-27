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
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Length of the lease for some <a class="localLink" href="https://schema.org/Accommodation">Accommodation</a>, either particular to some <a class="localLink" href="https://schema.org/Offer">Offer</a> or in some cases intrinsic to the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|null
     */
    protected $leaseLength;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|null
     */
    public function getLeaseLength()
    {
        return $this->leaseLength;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|DateInterval|null $leaseLength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeaseLength($leaseLength)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "DateInterval",
            "null",
        );

        $leaseLength = self::checkTypes($leaseLength, $types);

        $this->leaseLength = $leaseLength;
    }

}
