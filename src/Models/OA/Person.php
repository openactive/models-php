<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Person](https://schema.org/Person), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Person extends \OpenActive\Models\SchemaOrg\Person
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Person";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "address" => "address",
            "email" => "email",
            "familyName" => "familyName",
            "gender" => "gender",
            "givenName" => "givenName",
            "jobTitle" => "jobTitle",
            "legalName" => "legalName",
            "logo" => "logo",
            "sameAs" => "sameAs",
            "taxMode" => "taxMode",
            "telephone" => "telephone",
            "termsOfService" => "termsOfService",
            "url" => "url",
            "vatID" => "vatID",
            "formattedDescription" => "beta:formattedDescription",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A local non-URI identifier for the resource
     *
     * ```json
     * "identifier": "SB1234"
     * ```
     *
     * @var int|string|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    protected $identifier;

    /**
     * A full name for the person.
     * This person must have given permission for their personal information to be shared as part of the open data.
     *
     * ```json
     * "name": "Daley Thompson"
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * The description of the Person
     *
     * ```json
     * "description": "The leader of the coaching team"
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * Address of the Seller, used on tax receipts.
     *
     *
     * @var \OpenActive\Models\OA\PostalAddress
     */
    protected $address;

    /**
     * The e-mail address of the person.
     * This person must have given permission for their personal information to be shared as part of the open data.
     *
     * ```json
     * "email": "jane.smith@example.com"
     * ```
     *
     * @var string
     */
    protected $email;

    /**
     * A last name for the person.
     * This person must have given permission for their personal information to be shared as part of the open data.
     *
     * ```json
     * "familyName": "Thompson"
     * ```
     *
     * @var string
     */
    protected $familyName;

    /**
     * Indicates the gender of the person.
     *
     * ```json
     * "gender": "https://schema.org/Female"
     * ```
     *
     * @var \OpenActive\Enums\SchemaOrg\GenderType|null
     */
    protected $gender;

    /**
     * A first name for the person.
     * This person must have given permission for their personal information to be shared as part of the open data.
     *
     * ```json
     * "givenName": "Daley"
     * ```
     *
     * @var string
     */
    protected $givenName;

    /**
     * The job title of a person
     * This person must have given permission for their personal information to be shared as part of the open data.
     *
     * ```json
     * "jobTitle": "Team Captain"
     * ```
     *
     * @var string
     */
    protected $jobTitle;

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
     * A logo for the person.
     *
     * ```json
     * "logo": {
     *   "@type": "ImageObject",
     *   "url": "http://example.com/static/image/speedball_large.jpg"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\ImageObject
     */
    protected $logo;

    /**
     * Lists the URL(s) of the official social media profile pages associated with the person.
     *
     * ```json
     * "sameAs": "https://example.org/example-org"
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
     * The telephone number of the person
     * This person must have given permission for their personal information to be shared as part of the open data.
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
     * @var \OpenActive\Models\OA\Terms[]
     */
    protected $termsOfService;

    /**
     * A URL where more information about the person may be found
     *
     * ```json
     * "url": "http://www.example.com/"
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
     * [NOTICE: This is a beta field, and is highly likely to change in future versions of this library.]
     * Sometimes a description is stored with formatting (e.g. href, bold, italics, embedded YouTube videos). This formatting can be useful for data consumers.
     *
     *
     * @var string
     */
    protected $formattedDescription;

    /**
     * @return int|string|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int|string|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "int",
            "string",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
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
     * @return \OpenActive\Models\OA\PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \OpenActive\Models\OA\PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "\OpenActive\Models\OA\PostalAddress",
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
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param string $familyName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFamilyName($familyName)
    {
        $types = array(
            "string",
        );

        $familyName = self::checkTypes($familyName, $types);

        $this->familyName = $familyName;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GenderType|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GenderType|null $gender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGender($gender)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "null",
        );

        $gender = self::checkTypes($gender, $types);

        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param string $givenName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGivenName($givenName)
    {
        $types = array(
            "string",
        );

        $givenName = self::checkTypes($givenName, $types);

        $this->givenName = $givenName;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobTitle($jobTitle)
    {
        $types = array(
            "string",
        );

        $jobTitle = self::checkTypes($jobTitle, $types);

        $this->jobTitle = $jobTitle;
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
     * @return \OpenActive\Models\OA\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param \OpenActive\Models\OA\ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = array(
            "\OpenActive\Models\OA\ImageObject",
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
     * @return \OpenActive\Models\OA\Terms[]
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param \OpenActive\Models\OA\Terms[] $termsOfService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTermsOfService($termsOfService)
    {
        $types = array(
            "\OpenActive\Models\OA\Terms[]",
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

    /**
     * @return string
     */
    public function getFormattedDescription()
    {
        return $this->formattedDescription;
    }

    /**
     * @param string $formattedDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFormattedDescription($formattedDescription)
    {
        $types = array(
            "string",
        );

        $formattedDescription = self::checkTypes($formattedDescription, $types);

        $this->formattedDescription = $formattedDescription;
    }

}
