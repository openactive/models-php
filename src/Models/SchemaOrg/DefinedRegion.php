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
            "postalCode" => "postalCode",
            "postalCodePrefix" => "postalCodePrefix",
            "addressCountry" => "addressCountry",
            "postalCodeRange" => "postalCodeRange",
            "addressRegion" => "addressRegion",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The postal code. For example, 94043.
     *
     *
     * @var string
     */
    protected $postalCode;

    /**
     * A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
     *
     *
     * @var string
     */
    protected $postalCodePrefix;

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Country
     */
    protected $addressCountry;

    /**
     * A defined range of postal codes.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification|string
     */
    protected $postalCodeRange;

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country) 
     *
     *
     * @var string
     */
    protected $addressRegion;

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostalCode($postalCode)
    {
        $types = [
            "string",
        ];

        $postalCode = self::checkTypes($postalCode, $types);

        $this->postalCode = $postalCode;
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
        $types = [
            "string",
        ];

        $postalCodePrefix = self::checkTypes($postalCodePrefix, $types);

        $this->postalCodePrefix = $postalCodePrefix;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Country
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Country $addressCountry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddressCountry($addressCountry)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Country",
        ];

        $addressCountry = self::checkTypes($addressCountry, $types);

        $this->addressCountry = $addressCountry;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification|string
     */
    public function getPostalCodeRange()
    {
        return $this->postalCodeRange;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification|string $postalCodeRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostalCodeRange($postalCodeRange)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalCodeRangeSpecification",
            "string",
        ];

        $postalCodeRange = self::checkTypes($postalCodeRange, $types);

        $this->postalCodeRange = $postalCodeRange;
    }

    /**
     * @return string
     */
    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    /**
     * @param string $addressRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddressRegion($addressRegion)
    {
        $types = [
            "string",
        ];

        $addressRegion = self::checkTypes($addressRegion, $types);

        $this->addressRegion = $addressRegion;
    }

}
