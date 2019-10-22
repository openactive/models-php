<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ContactPoint extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The geographic area where the service is provided.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $serviceArea;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var Place|string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $areaServed;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * The hours during which this service or contact is available.
     *
     *
     * @var OpeningHoursSpecification
     */
    protected $hoursAvailable;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     *
     *
     * @var Schema.NET.ContactPointOption|null
     */
    protected $contactOption;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/inLanguage">inLanguage</a>
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $availableLanguage;

    /**
     * The telephone number.
     *
     *
     * @var string
     */
    protected $telephone;

    /**
     * Email address.
     *
     *
     * @var string
     */
    protected $email;

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     *
     *
     * @var string
     */
    protected $contactType;

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $productSupported;

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea $serviceArea
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setServiceArea($serviceArea)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $serviceArea = self::checkTypes($serviceArea, $types);

        $this->serviceArea = $serviceArea;
    }

    /**
     * @return Place|string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param Place|string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea $areaServed
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = array(
            "Place",
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFaxNumber($faxNumber)
    {
        $types = array(
            "string",
        );

        $faxNumber = self::checkTypes($faxNumber, $types);

        $this->faxNumber = $faxNumber;
    }

    /**
     * @return OpeningHoursSpecification
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param OpeningHoursSpecification $hoursAvailable
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = array(
            "OpeningHoursSpecification",
        );

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return Schema.NET.ContactPointOption|null
     */
    public function getContactOption()
    {
        return $this->contactOption;
    }

    /**
     * @param Schema.NET.ContactPointOption|null $contactOption
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setContactOption($contactOption)
    {
        $types = array(
            "Schema.NET.ContactPointOption",
            "null",
        );

        $contactOption = self::checkTypes($contactOption, $types);

        $this->contactOption = $contactOption;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $availableLanguage
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        );

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @param string $contactType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setContactType($contactType)
    {
        $types = array(
            "string",
        );

        $contactType = self::checkTypes($contactType, $types);

        $this->contactType = $contactType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getProductSupported()
    {
        return $this->productSupported;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $productSupported
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setProductSupported($productSupported)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        );

        $productSupported = self::checkTypes($productSupported, $types);

        $this->productSupported = $productSupported;
    }

}
