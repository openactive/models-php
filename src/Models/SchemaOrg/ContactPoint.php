<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ContactPoint extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ContactPoint";
    }

    public static function fieldList() {
        $fields = [
            "telephone" => "telephone",
            "email" => "email",
            "availableLanguage" => "availableLanguage",
            "faxNumber" => "faxNumber",
            "hoursAvailable" => "hoursAvailable",
            "contactOption" => "contactOption",
            "serviceArea" => "serviceArea",
            "productSupported" => "productSupported",
            "contactType" => "contactType",
            "areaServed" => "areaServed",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $availableLanguage;

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
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    protected $hoursAvailable;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ContactPointOption|null
     */
    protected $contactOption;

    /**
     * The geographic area where the service is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $serviceArea;

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Product
     */
    protected $productSupported;

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     *
     *
     * @var string
     */
    protected $contactType;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea|string|\OpenActive\Models\SchemaOrg\Place
     */
    protected $areaServed;

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
        $types = [
            "string",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmail($email)
    {
        $types = [
            "string",
        ];

        $email = self::checkTypes($email, $types);

        $this->email = $email;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFaxNumber($faxNumber)
    {
        $types = [
            "string",
        ];

        $faxNumber = self::checkTypes($faxNumber, $types);

        $this->faxNumber = $faxNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification|string $hoursAvailable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
            "string",
        ];

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ContactPointOption|null
     */
    public function getContactOption()
    {
        return $this->contactOption;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ContactPointOption|null $contactOption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactOption($contactOption)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\ContactPointOption",
            "null",
        ];

        $contactOption = self::checkTypes($contactOption, $types);

        $this->contactOption = $contactOption;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea|string $serviceArea
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceArea($serviceArea)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $serviceArea = self::checkTypes($serviceArea, $types);

        $this->serviceArea = $serviceArea;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Product
     */
    public function getProductSupported()
    {
        return $this->productSupported;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Product $productSupported
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductSupported($productSupported)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Product",
        ];

        $productSupported = self::checkTypes($productSupported, $types);

        $this->productSupported = $productSupported;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactType($contactType)
    {
        $types = [
            "string",
        ];

        $contactType = self::checkTypes($contactType, $types);

        $this->contactType = $contactType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea|string|\OpenActive\Models\SchemaOrg\Place
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\AdministrativeArea|string|\OpenActive\Models\SchemaOrg\Place $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

}
