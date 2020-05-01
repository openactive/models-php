<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DefinedRegion extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DefinedRegion";
    }

    public static function fieldList() {
        $fields = [
            "postalCodeRange" => "postalCodeRange",
            "postalCodePrefix" => "postalCodePrefix",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A defined range of postal codes.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification
     */
    protected $postalCodeRange;

    /**
     * A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
     *
     *
     * @var string
     */
    protected $postalCodePrefix;

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification
     */
    public function getPostalCodeRange()
    {
        return $this->postalCodeRange;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification $postalCodeRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostalCodeRange($postalCodeRange)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification",
        );

        $postalCodeRange = self::checkTypes($postalCodeRange, $types);

        $this->postalCodeRange = $postalCodeRange;
    }

    /**
     * @return string
     */
    public function getPostalCodePrefix()
    {
        return $this->postalCodePrefix;
    }

    /**
     * @param string $postalCodePrefix
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostalCodePrefix($postalCodePrefix)
    {
        $types = array(
            "string",
        );

        $postalCodePrefix = self::checkTypes($postalCodePrefix, $types);

        $this->postalCodePrefix = $postalCodePrefix;
    }

}
