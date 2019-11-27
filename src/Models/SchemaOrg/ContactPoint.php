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
            "areaServed" => "areaServed",
            "faxNumber" => "faxNumber",
            "productSupported" => "productSupported",
            "contactType" => "contactType",
            "email" => "email",
            "telephone" => "telephone",
            "availableLanguage" => "availableLanguage",
            "contactOption" => "contactOption",
            "hoursAvailable" => "hoursAvailable",
            "serviceArea" => "serviceArea",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place
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
     * Email address.
     *
     *
     * @var string
     */
    protected $email;

    /**
     * The telephone number.
     *
     *
     * @var string
     */
    protected $telephone;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/inLanguage">inLanguage</a>
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $availableLanguage;

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ContactPointOption|null
     */
    protected $contactOption;

    /**
     * The hours during which this service or contact is available.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    protected $hoursAvailable;

    /**
     * The geographic area where the service is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $serviceArea;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Product",
        );

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
        $types = array(
            "string",
        );

        $contactType = self::checkTypes($contactType, $types);

        $this->contactType = $contactType;
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
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $availableLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableLanguage($availableLanguage)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        );

        $availableLanguage = self::checkTypes($availableLanguage, $types);

        $this->availableLanguage = $availableLanguage;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\ContactPointOption",
            "null",
        );

        $contactOption = self::checkTypes($contactOption, $types);

        $this->contactOption = $contactOption;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
     */
    public function getHoursAvailable()
    {
        return $this->hoursAvailable;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OpeningHoursSpecification $hoursAvailable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHoursAvailable($hoursAvailable)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\OpeningHoursSpecification",
        );

        $hoursAvailable = self::checkTypes($hoursAvailable, $types);

        $this->hoursAvailable = $hoursAvailable;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape $serviceArea
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceArea($serviceArea)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        );

        $serviceArea = self::checkTypes($serviceArea, $types);

        $this->serviceArea = $serviceArea;
    }

}
