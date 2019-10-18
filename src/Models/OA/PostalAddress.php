<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [PostalAddress](https://schema.org/PostalAddress), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class PostalAddress extends \OpenActive\Models\SchemaOrg\PostalAddress
{
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAddressCountry($addressCountry)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAddressLocality($addressLocality)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAddressRegion($addressRegion)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPostalCode($postalCode)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setStreetAddress($streetAddress)
    {
        $types = array(
            "string",
        );

        $streetAddress = self::checkTypes($streetAddress, $types);

        $this->streetAddress = $streetAddress;
    }

}
