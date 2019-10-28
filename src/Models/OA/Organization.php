<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Organization](https://schema.org/Organization), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Organization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|PropertyValue|PropertyValue[]|null
     */
    protected $identifier;

    /**
     * The name of the Organization
     *
     * ```json
     * "name": "Central Speedball Association"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * The description of the Organization
     *
     * ```json
     * "description": "The national governing body of cycling"
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Address of the Seller, used on tax receipts.
     *
     *
     * @var PostalAddress
     */
    protected $address;

    /**
     * General enquiries e-mail address for the organization.
     *
     * ```json
     * "email": "info@example.com"
     * ```
     *
     * @var string
     */
    protected $email;

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * ```json
     * "legalName": "Central Speedball Ltd"
     * ```
     *
     * @var string
     */
    protected $legalName;

    /**
     * A logo for the Organization.
     *
     * ```json
     * "logo": {
     *   "@type": "ImageObject",
     *   "url": "http://example.com/static/image/speedball_large.jpg"
     * }
     * ```
     *
     * @var ImageObject
     */
    protected $logo;

    /**
     * Lists the URL(s) of the official social media profile pages associated with the organization.
     *
     * ```json
     * "sameAs": [
     *   "https://www.facebook.com/everyoneactive/",
     *   "https://twitter.com/everyoneactive"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $sameAs;

    /**
     * Either  https://openactive.io/TaxNet or  https://openactive.io/TaxGross
     *
     *
     * @var \OpenActive\Enums\TaxMode|null
     */
    protected $taxMode;

    /**
     * The telephone number of the Organization
     *
     * ```json
     * "telephone": "01234 567890"
     * ```
     *
     * @var string
     */
    protected $telephone;

    /**
     * The terms of service of the Seller.
     *
     *
     * @var Terms[]
     */
    protected $termsOfService;

    /**
     * A definitive canonical URL for the Organization.
     *
     * ```json
     * "url": "http://www.speedball-world.com"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * The Value-added Tax ID of the of the Seller.
     *
     *
     * @var string
     */
    protected $vatID;

    /**
     * @return int|string|PropertyValue|PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|PropertyValue|PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "PropertyValue",
            "PropertyValue[]",
            "null",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "PostalAddress",
        );

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmail($email)
    {
        $types = array(
            "string",
        );

        $email = self::checkTypes($email, $types);

        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegalName($legalName)
    {
        $types = array(
            "string",
        );

        $legalName = self::checkTypes($legalName, $types);

        $this->legalName = $legalName;
    }

    /**
     * @return ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = array(
            "ImageObject",
        );

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return string[]
     */
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * @param string[] $sameAs
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSameAs($sameAs)
    {
        $types = array(
            "string[]",
        );

        $sameAs = self::checkTypes($sameAs, $types);

        $this->sameAs = $sameAs;
    }

    /**
     * @return \OpenActive\Enums\TaxMode|null
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * @param \OpenActive\Enums\TaxMode|null $taxMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTaxMode($taxMode)
    {
        $types = array(
            "\OpenActive\Enums\TaxMode",
            "null",
        );

        $taxMode = self::checkTypes($taxMode, $types);

        $this->taxMode = $taxMode;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTelephone($telephone)
    {
        $types = array(
            "string",
        );

        $telephone = self::checkTypes($telephone, $types);

        $this->telephone = $telephone;
    }

    /**
     * @return Terms[]
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param Terms[] $termsOfService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsOfService($termsOfService)
    {
        $types = array(
            "Terms[]",
        );

        $termsOfService = self::checkTypes($termsOfService, $types);

        $this->termsOfService = $termsOfService;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getVatID()
    {
        return $this->vatID;
    }

    /**
     * @param string $vatID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVatID($vatID)
    {
        $types = array(
            "string",
        );

        $vatID = self::checkTypes($vatID, $types);

        $this->vatID = $vatID;
    }

}
