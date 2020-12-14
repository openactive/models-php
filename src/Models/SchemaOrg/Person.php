<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Person extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Person";
    }

    public static function fieldList() {
        $fields = [
            "colleague" => "colleague",
            "birthPlace" => "birthPlace",
            "homeLocation" => "homeLocation",
            "interactionStatistic" => "interactionStatistic",
            "email" => "email",
            "faxNumber" => "faxNumber",
            "jobTitle" => "jobTitle",
            "hasOfferCatalog" => "hasOfferCatalog",
            "alumniOf" => "alumniOf",
            "children" => "children",
            "duns" => "duns",
            "gender" => "gender",
            "parent" => "parent",
            "funder" => "funder",
            "address" => "address",
            "workLocation" => "workLocation",
            "givenName" => "givenName",
            "parents" => "parents",
            "honorificSuffix" => "honorificSuffix",
            "vatID" => "vatID",
            "siblings" => "siblings",
            "contactPoints" => "contactPoints",
            "affiliation" => "affiliation",
            "worksFor" => "worksFor",
            "knows" => "knows",
            "contactPoint" => "contactPoint",
            "follows" => "follows",
            "additionalName" => "additionalName",
            "knowsAbout" => "knowsAbout",
            "naics" => "naics",
            "callSign" => "callSign",
            "hasCredential" => "hasCredential",
            "telephone" => "telephone",
            "relatedTo" => "relatedTo",
            "colleagues" => "colleagues",
            "awards" => "awards",
            "seeks" => "seeks",
            "weight" => "weight",
            "hasOccupation" => "hasOccupation",
            "hasPOS" => "hasPOS",
            "deathPlace" => "deathPlace",
            "memberOf" => "memberOf",
            "makesOffer" => "makesOffer",
            "netWorth" => "netWorth",
            "globalLocationNumber" => "globalLocationNumber",
            "height" => "height",
            "spouse" => "spouse",
            "sibling" => "sibling",
            "performerIn" => "performerIn",
            "honorificPrefix" => "honorificPrefix",
            "brand" => "brand",
            "birthDate" => "birthDate",
            "nationality" => "nationality",
            "isicV4" => "isicV4",
            "familyName" => "familyName",
            "publishingPrinciples" => "publishingPrinciples",
            "knowsLanguage" => "knowsLanguage",
            "deathDate" => "deathDate",
            "owns" => "owns",
            "taxID" => "taxID",
            "award" => "award",
            "sponsor" => "sponsor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A colleague of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $colleague;

    /**
     * The place where the person was born.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $birthPlace;

    /**
     * A contact location for a person's residence.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Place
     */
    protected $homeLocation;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\InteractionCounter
     */
    protected $interactionStatistic;

    /**
     * Email address.
     *
     *
     * @var string
     */
    protected $email;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * The job title of the person (for example, Financial Manager).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $jobTitle;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OfferCatalog
     */
    protected $hasOfferCatalog;

    /**
     * An organization that the person is an alumni of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOrganization|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $alumniOf;

    /**
     * A child of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $children;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     *
     * @var string
     */
    protected $duns;

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\GenderType|string|null
     */
    protected $gender;

    /**
     * A parent of this person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $parent;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $funder;

    /**
     * Physical address of the item.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $address;

    /**
     * A contact location for a person's place of work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Place
     */
    protected $workLocation;

    /**
     * Given name. In the U.S., the first name of a Person.
     *
     *
     * @var string
     */
    protected $givenName;

    /**
     * A parents of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $parents;

    /**
     * An honorific suffix following a Person's name such as M.D. /PhD/MSCSW.
     *
     *
     * @var string
     */
    protected $honorificSuffix;

    /**
     * The Value-added Tax ID of the organization or person.
     *
     *
     * @var string
     */
    protected $vatID;

    /**
     * A sibling of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $siblings;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $contactPoints;

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $affiliation;

    /**
     * Organizations that the person works for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $worksFor;

    /**
     * The most generic bi-directional social/work relation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $knows;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $contactPoint;

    /**
     * The most generic uni-directional social relation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $follows;

    /**
     * An additional name for a Person, can be used for a middle name.
     *
     *
     * @var string
     */
    protected $additionalName;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $knowsAbout;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     *
     * @var string
     */
    protected $naics;

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     *
     * @var string
     */
    protected $callSign;

    /**
     * A credential awarded to the Person or Organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $hasCredential;

    /**
     * The telephone number.
     *
     *
     * @var string
     */
    protected $telephone;

    /**
     * The most generic familial relation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $relatedTo;

    /**
     * A colleague of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $colleagues;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand
     */
    protected $seeks;

    /**
     * The weight of the product or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $weight;

    /**
     * The Person's occupation. For past professions, use Role for expressing dates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Occupation
     */
    protected $hasOccupation;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $hasPOS;

    /**
     * The place where the person died.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $deathPlace;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ProgramMembership
     */
    protected $memberOf;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer
     */
    protected $makesOffer;

    /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification
     */
    protected $netWorth;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     *
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $height;

    /**
     * The person's spouse.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $spouse;

    /**
     * A sibling of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $sibling;

    /**
     * Event that this person is a performer or participant in.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $performerIn;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     *
     * @var string
     */
    protected $honorificPrefix;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $brand;

    /**
     * Date of birth.
     *
     *
     * @var Date|null
     */
    protected $birthDate;

    /**
     * Nationality of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country
     */
    protected $nationality;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     *
     * @var string
     */
    protected $isicV4;

    /**
     * Family name. In the U.S., the last name of a Person.
     *
     *
     * @var string
     */
    protected $familyName;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].
     * 
     * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology.
     * 
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $publishingPrinciples;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $knowsLanguage;

    /**
     * Date of death.
     *
     *
     * @var Date|null
     */
    protected $deathDate;

    /**
     * Products owned by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OwnershipInfo|\OpenActive\Models\SchemaOrg\Product
     */
    protected $owns;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     *
     * @var string
     */
    protected $taxID;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $sponsor;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getColleague()
    {
        return $this->colleague;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $colleague
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setColleague($colleague)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $colleague = self::checkTypes($colleague, $types);

        $this->colleague = $colleague;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $birthPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBirthPlace($birthPlace)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $birthPlace = self::checkTypes($birthPlace, $types);

        $this->birthPlace = $birthPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Place
     */
    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Place $homeLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHomeLocation($homeLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $homeLocation = self::checkTypes($homeLocation, $types);

        $this->homeLocation = $homeLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\InteractionCounter
     */
    public function getInteractionStatistic()
    {
        return $this->interactionStatistic;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\InteractionCounter $interactionStatistic
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionStatistic($interactionStatistic)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\InteractionCounter",
        ];

        $interactionStatistic = self::checkTypes($interactionStatistic, $types);

        $this->interactionStatistic = $interactionStatistic;
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
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $jobTitle
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobTitle($jobTitle)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $jobTitle = self::checkTypes($jobTitle, $types);

        $this->jobTitle = $jobTitle;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OfferCatalog
     */
    public function getHasOfferCatalog()
    {
        return $this->hasOfferCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OfferCatalog $hasOfferCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasOfferCatalog($hasOfferCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OfferCatalog",
        ];

        $hasOfferCatalog = self::checkTypes($hasOfferCatalog, $types);

        $this->hasOfferCatalog = $hasOfferCatalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOrganization|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getAlumniOf()
    {
        return $this->alumniOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOrganization|\OpenActive\Models\SchemaOrg\Organization $alumniOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlumniOf($alumniOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOrganization",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $alumniOf = self::checkTypes($alumniOf, $types);

        $this->alumniOf = $alumniOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $children
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildren($children)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $children = self::checkTypes($children, $types);

        $this->children = $children;
    }

    /**
     * @return string
     */
    public function getDuns()
    {
        return $this->duns;
    }

    /**
     * @param string $duns
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuns($duns)
    {
        $types = [
            "string",
        ];

        $duns = self::checkTypes($duns, $types);

        $this->duns = $duns;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\GenderType|string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\GenderType|string|null $gender
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGender($gender)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\GenderType",
            "string",
            "null",
        ];

        $gender = self::checkTypes($gender, $types);

        $this->gender = $gender;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $parent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParent($parent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $parent = self::checkTypes($parent, $types);

        $this->parent = $parent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PostalAddress $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        ];

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Place
     */
    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Place $workLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkLocation($workLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $workLocation = self::checkTypes($workLocation, $types);

        $this->workLocation = $workLocation;
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
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $parents
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParents($parents)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $parents = self::checkTypes($parents, $types);

        $this->parents = $parents;
    }

    /**
     * @return string
     */
    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    /**
     * @param string $honorificSuffix
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHonorificSuffix($honorificSuffix)
    {
        $types = [
            "string",
        ];

        $honorificSuffix = self::checkTypes($honorificSuffix, $types);

        $this->honorificSuffix = $honorificSuffix;
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
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getSiblings()
    {
        return $this->siblings;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $siblings
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSiblings($siblings)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $siblings = self::checkTypes($siblings, $types);

        $this->siblings = $siblings;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint $contactPoints
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoints($contactPoints)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        ];

        $contactPoints = self::checkTypes($contactPoints, $types);

        $this->contactPoints = $contactPoints;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $affiliation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAffiliation($affiliation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $affiliation = self::checkTypes($affiliation, $types);

        $this->affiliation = $affiliation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getWorksFor()
    {
        return $this->worksFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $worksFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorksFor($worksFor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $worksFor = self::checkTypes($worksFor, $types);

        $this->worksFor = $worksFor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getKnows()
    {
        return $this->knows;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $knows
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnows($knows)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $knows = self::checkTypes($knows, $types);

        $this->knows = $knows;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint $contactPoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoint($contactPoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        ];

        $contactPoint = self::checkTypes($contactPoint, $types);

        $this->contactPoint = $contactPoint;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $follows
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFollows($follows)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $follows = self::checkTypes($follows, $types);

        $this->follows = $follows;
    }

    /**
     * @return string
     */
    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    /**
     * @param string $additionalName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalName($additionalName)
    {
        $types = [
            "string",
        ];

        $additionalName = self::checkTypes($additionalName, $types);

        $this->additionalName = $additionalName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getKnowsAbout()
    {
        return $this->knowsAbout;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $knowsAbout
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnowsAbout($knowsAbout)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $knowsAbout = self::checkTypes($knowsAbout, $types);

        $this->knowsAbout = $knowsAbout;
    }

    /**
     * @return string
     */
    public function getNaics()
    {
        return $this->naics;
    }

    /**
     * @param string $naics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNaics($naics)
    {
        $types = [
            "string",
        ];

        $naics = self::checkTypes($naics, $types);

        $this->naics = $naics;
    }

    /**
     * @return string
     */
    public function getCallSign()
    {
        return $this->callSign;
    }

    /**
     * @param string $callSign
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCallSign($callSign)
    {
        $types = [
            "string",
        ];

        $callSign = self::checkTypes($callSign, $types);

        $this->callSign = $callSign;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getHasCredential()
    {
        return $this->hasCredential;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $hasCredential
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCredential($hasCredential)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        ];

        $hasCredential = self::checkTypes($hasCredential, $types);

        $this->hasCredential = $hasCredential;
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
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $relatedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedTo($relatedTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $relatedTo = self::checkTypes($relatedTo, $types);

        $this->relatedTo = $relatedTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getColleagues()
    {
        return $this->colleagues;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $colleagues
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setColleagues($colleagues)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $colleagues = self::checkTypes($colleagues, $types);

        $this->colleagues = $colleagues;
    }

    /**
     * @return string
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * @param string $awards
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwards($awards)
    {
        $types = [
            "string",
        ];

        $awards = self::checkTypes($awards, $types);

        $this->awards = $awards;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand
     */
    public function getSeeks()
    {
        return $this->seeks;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand $seeks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeeks($seeks)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
        ];

        $seeks = self::checkTypes($seeks, $types);

        $this->seeks = $seeks;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $weight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWeight($weight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $weight = self::checkTypes($weight, $types);

        $this->weight = $weight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Occupation
     */
    public function getHasOccupation()
    {
        return $this->hasOccupation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Occupation $hasOccupation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasOccupation($hasOccupation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Occupation",
        ];

        $hasOccupation = self::checkTypes($hasOccupation, $types);

        $this->hasOccupation = $hasOccupation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $hasPOS
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasPOS($hasPOS)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $hasPOS = self::checkTypes($hasPOS, $types);

        $this->hasPOS = $hasPOS;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getDeathPlace()
    {
        return $this->deathPlace;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $deathPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeathPlace($deathPlace)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $deathPlace = self::checkTypes($deathPlace, $types);

        $this->deathPlace = $deathPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ProgramMembership
     */
    public function getMemberOf()
    {
        return $this->memberOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ProgramMembership $memberOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMemberOf($memberOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ProgramMembership",
        ];

        $memberOf = self::checkTypes($memberOf, $types);

        $this->memberOf = $memberOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer $makesOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMakesOffer($makesOffer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
        ];

        $makesOffer = self::checkTypes($makesOffer, $types);

        $this->makesOffer = $makesOffer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification
     */
    public function getNetWorth()
    {
        return $this->netWorth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification $netWorth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNetWorth($netWorth)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
        ];

        $netWorth = self::checkTypes($netWorth, $types);

        $this->netWorth = $netWorth;
    }

    /**
     * @return string
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * @param string $globalLocationNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $types = [
            "string",
        ];

        $globalLocationNumber = self::checkTypes($globalLocationNumber, $types);

        $this->globalLocationNumber = $globalLocationNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $spouse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpouse($spouse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $spouse = self::checkTypes($spouse, $types);

        $this->spouse = $spouse;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getSibling()
    {
        return $this->sibling;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $sibling
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSibling($sibling)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $sibling = self::checkTypes($sibling, $types);

        $this->sibling = $sibling;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getPerformerIn()
    {
        return $this->performerIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $performerIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformerIn($performerIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
        ];

        $performerIn = self::checkTypes($performerIn, $types);

        $this->performerIn = $performerIn;
    }

    /**
     * @return string
     */
    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    /**
     * @param string $honorificPrefix
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHonorificPrefix($honorificPrefix)
    {
        $types = [
            "string",
        ];

        $honorificPrefix = self::checkTypes($honorificPrefix, $types);

        $this->honorificPrefix = $honorificPrefix;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization $brand
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Brand",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
    }

    /**
     * @return Date|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param Date|null $birthDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBirthDate($birthDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $birthDate = self::checkTypes($birthDate, $types);

        $this->birthDate = $birthDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country $nationality
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNationality($nationality)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
        ];

        $nationality = self::checkTypes($nationality, $types);

        $this->nationality = $nationality;
    }

    /**
     * @return string
     */
    public function getIsicV4()
    {
        return $this->isicV4;
    }

    /**
     * @param string $isicV4
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsicV4($isicV4)
    {
        $types = [
            "string",
        ];

        $isicV4 = self::checkTypes($isicV4, $types);

        $this->isicV4 = $isicV4;
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
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $publishingPrinciples
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishingPrinciples($publishingPrinciples)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $publishingPrinciples = self::checkTypes($publishingPrinciples, $types);

        $this->publishingPrinciples = $publishingPrinciples;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getKnowsLanguage()
    {
        return $this->knowsLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $knowsLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnowsLanguage($knowsLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $knowsLanguage = self::checkTypes($knowsLanguage, $types);

        $this->knowsLanguage = $knowsLanguage;
    }

    /**
     * @return Date|null
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * @param Date|null $deathDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeathDate($deathDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $deathDate = self::checkTypes($deathDate, $types);

        $this->deathDate = $deathDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OwnershipInfo|\OpenActive\Models\SchemaOrg\Product
     */
    public function getOwns()
    {
        return $this->owns;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OwnershipInfo|\OpenActive\Models\SchemaOrg\Product $owns
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOwns($owns)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OwnershipInfo",
            "\OpenActive\Models\SchemaOrg\Product",
        ];

        $owns = self::checkTypes($owns, $types);

        $this->owns = $owns;
    }

    /**
     * @return string
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * @param string $taxID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTaxID($taxID)
    {
        $types = [
            "string",
        ];

        $taxID = self::checkTypes($taxID, $types);

        $this->taxID = $taxID;
    }

    /**
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param string $award
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAward($award)
    {
        $types = [
            "string",
        ];

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

}
