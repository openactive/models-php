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
            "serviceArea" => "serviceArea",
            "hoursAvailable" => "hoursAvailable",
            "contactOption" => "contactOption",
            "availableLanguage" => "availableLanguage",
            "telephone" => "telephone",
            "email" => "email",
            "contactType" => "contactType",
            "productSupported" => "productSupported",
            "faxNumber" => "faxNumber",
            "areaServed" => "areaServed",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The geographic area where the service is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $serviceArea;

    /**
     * The hours during which this service or contact is available.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OpeningHoursSpecification
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
     * @var string|\OpenActive\Models\SchemaOrg\Product
     */
    protected $productSupported;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $areaServed;

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape $serviceArea
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceArea($serviceArea)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        );

        $serviceArea = self::checkTypes($serviceArea, $types);

        $this->serviceArea = $serviceArea;
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
     * @return \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\AdministrativeArea $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

}
