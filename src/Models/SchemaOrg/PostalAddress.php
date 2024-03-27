<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PostalAddress extends \OpenActive\Models\SchemaOrg\ContactPoint
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PostalAddress";
    }

    public static function fieldList() {
        $fields = [
            "addressCountry" => "addressCountry",
            "postOfficeBoxNumber" => "postOfficeBoxNumber",
            "postalCode" => "postalCode",
            "addressRegion" => "addressRegion",
            "streetAddress" => "streetAddress",
            "addressLocality" => "addressLocality",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $addressCountry;

    /**
     * The post office box number for PO box addresses.
     *
     *
     * @var string
     */
    protected $postOfficeBoxNumber;

    /**
     * The postal code. For example, 94043.
     *
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     *
     *
     * @var string
     */
    protected $addressRegion;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     *
     * @var string
     */
    protected $streetAddress;

    /**
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     *
     *
     * @var string
     */
    protected $addressLocality;

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $addressCountry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddressCountry($addressCountry)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $addressCountry = self::checkTypes($addressCountry, $types);

        $this->addressCountry = $addressCountry;
    }

    /**
     * @return string
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    /**
     * @param string $postOfficeBoxNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $types = [
            "string",
        ];

        $postOfficeBoxNumber = self::checkTypes($postOfficeBoxNumber, $types);

        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
    }

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

    /**
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStreetAddress($streetAddress)
    {
        $types = [
            "string",
        ];

        $streetAddress = self::checkTypes($streetAddress, $types);

        $this->streetAddress = $streetAddress;
    }

    /**
     * @return string
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * @param string $addressLocality
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddressLocality($addressLocality)
    {
        $types = [
            "string",
        ];

        $addressLocality = self::checkTypes($addressLocality, $types);

        $this->addressLocality = $addressLocality;
    }

}
