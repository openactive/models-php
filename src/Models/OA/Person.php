<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Person, which means that any of this type's properties within schema.org may also be used.
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
            "emergencyContact" => "emergencyContact",
            "familyName" => "familyName",
            "gender" => "gender",
            "givenName" => "givenName",
            "isOpenBookingAllowed" => "isOpenBookingAllowed",
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
            "formalCriteriaMet" => "beta:formalCriteriaMet",
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
     * @var string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
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
     * A plain text description of the Person, which must not include HTML or other markup.
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
     * Person to contact in case of emergencies related to this Person.
     *
     *
     * @var \OpenActive\Models\OA\Person
     */
    protected $emergencyContact;

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
     * Indicates the gender of the person. While `https://schema.org/Male` and `https://schema.org/Female` may be used, text strings are also acceptable for people who do not identify as a binary gender.
     *
     * ```json
     * "gender": "https://schema.org/Female"
     * ```
     *
     * @var string|\OpenActive\Enums\SchemaOrg\GenderType|null
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
     * Indicates whether the Seller allows open booking
     *
     * ```json
     * "isOpenBookingAllowed": "true"
     * ```
     *
     * @var bool|null
     */
    protected $isOpenBookingAllowed;

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
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Sometimes a description is stored with formatting (e.g. href, bold, italics, embedded YouTube videos). This formatting can be useful for data consumers. This property must contain HTML.
     * 
     * If you are using this property, please join the discussion at proposal [#276](https://github.com/openactive/modelling-opportunity-data/issues/276).
     *
     *
     * @var string
     */
    protected $formattedDescription;

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * An array of URLs, each of which describe the formal criteria that are met by the organizer.
     * 
     * If you are using this property, please join the discussion at proposal [#236](https://github.com/openactive/modelling-opportunity-data/issues/236).
     *
     *
     * @var string[]
     */
    protected $formalCriteriaMet;

    /**
     * @return string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string|int|\OpenActive\Models\OA\PropertyValue|\OpenActive\Models\OA\PropertyValue[]|null $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "string",
            "int",
            "\OpenActive\Models\OA\PropertyValue",
            "\OpenActive\Models\OA\PropertyValue[]",
            "null",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "\OpenActive\Models\OA\PostalAddress",
        ];

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
        $types = [
            "string",
        ];

        $email = self::checkTypes($email, $types);

        $this->email = $email;
    }

    /**
     * @return \OpenActive\Models\OA\Person
     */
    public function getEmergencyContact()
    {
        return $this->emergencyContact;
    }

    /**
     * @param \OpenActive\Models\OA\Person $emergencyContact
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmergencyContact($emergencyContact)
    {
        $types = [
            "\OpenActive\Models\OA\Person",
        ];

        $emergencyContact = self::checkTypes($emergencyContact, $types);

        $this->emergencyContact = $emergencyContact;
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
        $types = [
            "string",
        ];

        $familyName = self::checkTypes($familyName, $types);

        $this->familyName = $familyName;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\GenderType|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\GenderType|null $gender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGender($gender)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "null",
        ];

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
        $types = [
            "string",
        ];

        $givenName = self::checkTypes($givenName, $types);

        $this->givenName = $givenName;
    }

    /**
     * @return bool|null
     */
    public function getIsOpenBookingAllowed()
    {
        return $this->isOpenBookingAllowed;
    }

    /**
     * @param bool|null $isOpenBookingAllowed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsOpenBookingAllowed($isOpenBookingAllowed)
    {
        $types = [
            "bool",
            "null",
        ];

        $isOpenBookingAllowed = self::checkTypes($isOpenBookingAllowed, $types);

        $this->isOpenBookingAllowed = $isOpenBookingAllowed;
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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "\OpenActive\Models\OA\ImageObject",
        ];

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
        $types = [
            "string[]",
        ];

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
        $types = [
            "\OpenActive\Enums\TaxMode",
            "null",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "\OpenActive\Models\OA\Terms[]",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

        $formattedDescription = self::checkTypes($formattedDescription, $types);

        $this->formattedDescription = $formattedDescription;
    }

    /**
     * @return string[]
     */
    public function getFormalCriteriaMet()
    {
        return $this->formalCriteriaMet;
    }

    /**
     * @param string[] $formalCriteriaMet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFormalCriteriaMet($formalCriteriaMet)
    {
        $types = [
            "string[]",
        ];

        $formalCriteriaMet = self::checkTypes($formalCriteriaMet, $types);

        $this->formalCriteriaMet = $formalCriteriaMet;
    }

}
