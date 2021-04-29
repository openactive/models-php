<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/PostalAddress, which means that any of this type's properties within schema.org may also be used.
 *
 */
class PostalAddress extends \OpenActive\Models\SchemaOrg\PostalAddress
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PostalAddress";
    }

    public static function fieldList() {
        $fields = [
            "addressCountry" => "addressCountry",
            "addressLocality" => "addressLocality",
            "addressRegion" => "addressRegion",
            "postalCode" => "postalCode",
            "streetAddress" => "streetAddress",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The country, expressed as a two-letter ISO 3166-1 alpha-2 country code.
     *
     * ```json
     * "addressCountry": "GB"
     * ```
     *
     * @var string
     */
    protected $addressCountry;

    /**
     * The locality, a suburb within a city or a town within a county or district.
     *
     * ```json
     * "addressLocality": "Shoreditch"
     * ```
     *
     * @var string
     */
    protected $addressLocality;

    /**
     * The region, either a city or a county or district.
     *
     * ```json
     * "addressRegion": "London"
     * ```
     *
     * @var string
     */
    protected $addressRegion;

    /**
     * The postal code.
     *
     * ```json
     * "postalCode": "EC2A 4JE"
     * ```
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The street address.
     *
     * ```json
     * "streetAddress": "Open Data Institute, Floor 3, 65 Clifton St"
     * ```
     *
     * @var string
     */
    protected $streetAddress;

    /**
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddressCountry($addressCountry)
    {
        $types = [
            "string",
        ];

        $addressCountry = self::checkTypes($addressCountry, $types);

        $this->addressCountry = $addressCountry;
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

}
