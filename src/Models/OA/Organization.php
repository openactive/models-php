<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Organization, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Organization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Organization";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "activity" => "activity",
            "address" => "address",
            "ageRange" => "ageRange",
            "alternateName" => "alternateName",
            "email" => "email",
            "genderRestriction" => "genderRestriction",
            "hasAccount" => "hasAccount",
            "isOpenBookingAllowed" => "isOpenBookingAllowed",
            "legalName" => "legalName",
            "license" => "license",
            "location" => "location",
            "logo" => "logo",
            "member" => "member",
            "memberOf" => "memberOf",
            "sameAs" => "sameAs",
            "taxMode" => "taxMode",
            "telephone" => "telephone",
            "termsOfService" => "termsOfService",
            "url" => "url",
            "vatID" => "vatID",
            "formattedDescription" => "beta:formattedDescription",
            "video" => "beta:video",
            "formalCriteriaMet" => "beta:formalCriteriaMet",
            "dateVerified" => "beta:dateVerified",
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
     * A plain text description of the Organization, which must not include HTML or other markup.
     *
     * ```json
     * "description": "The national governing body of cycling"
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * The physical activity or activities provided by this organization.
     *
     * ```json
     * "activity": [
     *   {
     *     "@type": "Concept",
     *     "@id": "https://openactive.io/activity-list#6bb8b844-df3e-4cae-bf5f-3e129c6b1a9d",
     *     "prefLabel": "Sailing",
     *     "inScheme": "https://openactive.io/activity-list"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Concept[]
     */
    protected $activity;

    /**
     * Address of the Seller, used on tax receipts.
     *
     *
     * @var \OpenActive\Models\OA\PostalAddress
     */
    protected $address;

    /**
     * The age range this organization caters for overall.
     *
     * ```json
     * "ageRange": {
     *   "@type": "QuantitativeValue",
     *   "minValue": 5,
     *   "maxValue": 16
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     */
    protected $ageRange;

    /**
     * Aliases, common acronyms or alternative names for the organization.
     *
     * ```json
     * "alternateName": [
     *   "EYC"
     * ]
     * ```
     *
     * @var string[]|string
     */
    protected $alternateName;

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
     * Indicates that the organization provides activities that are restricted to male or female participants, or that there are no restrictions.
     *
     * ```json
     * "genderRestriction": "https://openactive.io/FemaleOnly"
     * ```
     *
     * @var \OpenActive\Enums\GenderRestrictionType|null
     */
    protected $genderRestriction;

    /**
     * Reference to the CustomerAccount associated with this Customer, for use within the Open Booking API flow.
     * Note that this property is in EARLY RELEASE AND IS SUBJECT TO CHANGE, as the [Customer Accounts proposal](https://github.com/openactive/customer-accounts) evolves.
     *
     *
     * @var \OpenActive\Models\OA\CustomerAccount|string
     */
    protected $hasAccount;

    /**
     * Indicates whether the Seller allows open booking or not
     *
     * ```json
     * "isOpenBookingAllowed": "true"
     * ```
     *
     * @var bool|null
     */
    protected $isOpenBookingAllowed;

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
     * Reference to the license under which the Organization's data is published. Required when an Organization is published on its own outside an RPDE feed; in an RPDE feed, the license is given by each feed page, so it should not be included.
     *
     * ```json
     * "license": "https://creativecommons.org/licenses/by/4.0/"
     * ```
     *
     * @var string
     */
    protected $license;

    /**
     * The main address of the organization, or the key locations of the activities it provides.
     *
     * ```json
     * "location": {
     *   "@type": "Place",
     *   "@id": "https://example.com/locations/1234ABCD",
     *   "name": "Example Sailing Club",
     *   "address": {
     *     "@type": "PostalAddress",
     *     "postalCode": "SE10 0BW",
     *     "addressCountry": "GB"
     *   }
     * }
     * ```
     *
     * @var string|\OpenActive\Models\OA\Place[]|\OpenActive\Models\OA\PostalAddress|\OpenActive\Models\OA\Place
     */
    protected $location;

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
     * @var \OpenActive\Models\OA\ImageObject
     */
    protected $logo;

    /**
     * The `@id`s of organizations affiliated to this organization. For example, a national governing body can list its affiliated clubs.
     *
     * ```json
     * "member": [
     *   "https://example.org/id/organisation/1"
     * ]
     * ```
     *
     * @var string|string[]
     */
    protected $member;

    /**
     * The `@id` of an organization that this organization is affiliated to. For example, a club can link to its national governing body.
     *
     * ```json
     * "memberOf": "https://example.org/id/organisation/national-governing-body"
     * ```
     *
     * @var \OpenActive\Models\OA\Organization|string
     */
    protected $memberOf;

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
     * @var \OpenActive\Models\OA\Terms[]
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
     * A related video object.
     * 
     * If you are using this property, please join the discussion at proposal [#88](https://github.com/openactive/modelling-opportunity-data/issues/88).
     *
     *
     * @var \OpenActive\Models\OA\VideoObject[]
     */
    protected $video;

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
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * The date on which the details of this organization were last verified as correct by the publisher. Unlike `schema:dateModified`, this changes when the details are confirmed, even if nothing in them has changed.
     * 
     * If you are using this property, please join the discussion at proposal [#313](https://github.com/openactive/modelling-opportunity-data/issues/313).
     *
     *
     * @var Date|null
     */
    protected $dateVerified;

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
     * @return \OpenActive\Models\OA\Concept[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param \OpenActive\Models\OA\Concept[] $activity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActivity($activity)
    {
        $types = [
            "\OpenActive\Models\OA\Concept[]",
        ];

        $activity = self::checkTypes($activity, $types);

        $this->activity = $activity;
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
     * @return \OpenActive\Models\OA\QuantitativeValue
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAgeRange($ageRange)
    {
        $types = [
            "\OpenActive\Models\OA\QuantitativeValue",
        ];

        $ageRange = self::checkTypes($ageRange, $types);

        $this->ageRange = $ageRange;
    }

    /**
     * @return string[]|string
     */
    public function getAlternateName()
    {
        return $this->alternateName;
    }

    /**
     * @param string[]|string $alternateName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlternateName($alternateName)
    {
        $types = [
            "string[]",
            "string",
        ];

        $alternateName = self::checkTypes($alternateName, $types);

        $this->alternateName = $alternateName;
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
     * @return \OpenActive\Enums\GenderRestrictionType|null
     */
    public function getGenderRestriction()
    {
        return $this->genderRestriction;
    }

    /**
     * @param \OpenActive\Enums\GenderRestrictionType|null $genderRestriction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGenderRestriction($genderRestriction)
    {
        $types = [
            "\OpenActive\Enums\GenderRestrictionType",
            "null",
        ];

        $genderRestriction = self::checkTypes($genderRestriction, $types);

        $this->genderRestriction = $genderRestriction;
    }

    /**
     * @return \OpenActive\Models\OA\CustomerAccount|string
     */
    public function getHasAccount()
    {
        return $this->hasAccount;
    }

    /**
     * @param \OpenActive\Models\OA\CustomerAccount|string $hasAccount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasAccount($hasAccount)
    {
        $types = [
            "\OpenActive\Models\OA\CustomerAccount",
            "string",
        ];

        $hasAccount = self::checkTypes($hasAccount, $types);

        $this->hasAccount = $hasAccount;
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
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLicense($license)
    {
        $types = [
            "string",
        ];

        $license = self::checkTypes($license, $types);

        $this->license = $license;
    }

    /**
     * @return string|\OpenActive\Models\OA\Place[]|\OpenActive\Models\OA\PostalAddress|\OpenActive\Models\OA\Place
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string|\OpenActive\Models\OA\Place[]|\OpenActive\Models\OA\PostalAddress|\OpenActive\Models\OA\Place $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = [
            "string",
            "\OpenActive\Models\OA\Place[]",
            "\OpenActive\Models\OA\PostalAddress",
            "\OpenActive\Models\OA\Place",
        ];

        $location = self::checkTypes($location, $types);

        $this->location = $location;
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
     * @return string|string[]
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param string|string[] $member
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMember($member)
    {
        $types = [
            "string",
            "string[]",
        ];

        $member = self::checkTypes($member, $types);

        $this->member = $member;
    }

    /**
     * @return \OpenActive\Models\OA\Organization|string
     */
    public function getMemberOf()
    {
        return $this->memberOf;
    }

    /**
     * @param \OpenActive\Models\OA\Organization|string $memberOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMemberOf($memberOf)
    {
        $types = [
            "\OpenActive\Models\OA\Organization",
            "string",
        ];

        $memberOf = self::checkTypes($memberOf, $types);

        $this->memberOf = $memberOf;
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
     * @return \OpenActive\Models\OA\VideoObject[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\OA\VideoObject[] $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = [
            "\OpenActive\Models\OA\VideoObject[]",
        ];

        $video = self::checkTypes($video, $types);

        $this->video = $video;
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

    /**
     * @return Date|null
     */
    public function getDateVerified()
    {
        return $this->dateVerified;
    }

    /**
     * @param Date|null $dateVerified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateVerified($dateVerified)
    {
        $types = [
            "Date",
            "null",
        ];

        $dateVerified = self::checkTypes($dateVerified, $types);

        $this->dateVerified = $dateVerified;
    }

}
