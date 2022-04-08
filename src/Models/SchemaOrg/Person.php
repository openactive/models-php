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
            "spouse" => "spouse",
            "additionalName" => "additionalName",
            "hasCredential" => "hasCredential",
            "telephone" => "telephone",
            "honorificPrefix" => "honorificPrefix",
            "parents" => "parents",
            "familyName" => "familyName",
            "givenName" => "givenName",
            "knowsAbout" => "knowsAbout",
            "performerIn" => "performerIn",
            "netWorth" => "netWorth",
            "award" => "award",
            "workLocation" => "workLocation",
            "honorificSuffix" => "honorificSuffix",
            "deathPlace" => "deathPlace",
            "homeLocation" => "homeLocation",
            "funding" => "funding",
            "vatID" => "vatID",
            "height" => "height",
            "globalLocationNumber" => "globalLocationNumber",
            "contactPoints" => "contactPoints",
            "hasOccupation" => "hasOccupation",
            "gender" => "gender",
            "parent" => "parent",
            "awards" => "awards",
            "sibling" => "sibling",
            "jobTitle" => "jobTitle",
            "birthDate" => "birthDate",
            "funder" => "funder",
            "makesOffer" => "makesOffer",
            "children" => "children",
            "worksFor" => "worksFor",
            "knows" => "knows",
            "interactionStatistic" => "interactionStatistic",
            "address" => "address",
            "memberOf" => "memberOf",
            "publishingPrinciples" => "publishingPrinciples",
            "colleagues" => "colleagues",
            "deathDate" => "deathDate",
            "email" => "email",
            "affiliation" => "affiliation",
            "siblings" => "siblings",
            "birthPlace" => "birthPlace",
            "brand" => "brand",
            "sponsor" => "sponsor",
            "naics" => "naics",
            "contactPoint" => "contactPoint",
            "callSign" => "callSign",
            "isicV4" => "isicV4",
            "hasPOS" => "hasPOS",
            "alumniOf" => "alumniOf",
            "duns" => "duns",
            "weight" => "weight",
            "knowsLanguage" => "knowsLanguage",
            "relatedTo" => "relatedTo",
            "colleague" => "colleague",
            "seeks" => "seeks",
            "taxID" => "taxID",
            "owns" => "owns",
            "hasOfferCatalog" => "hasOfferCatalog",
            "follows" => "follows",
            "nationality" => "nationality",
            "faxNumber" => "faxNumber",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The person's spouse.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $spouse;

    /**
     * An additional name for a Person, can be used for a middle name.
     *
     *
     * @var string
     */
    protected $additionalName;

    /**
     * A credential awarded to the Person or Organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
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
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     *
     * @var string
     */
    protected $honorificPrefix;

    /**
     * A parents of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $parents;

    /**
     * Family name. In the U.S., the last name of a Person.
     *
     *
     * @var string
     */
    protected $familyName;

    /**
     * Given name. In the U.S., the first name of a Person.
     *
     *
     * @var string
     */
    protected $givenName;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $knowsAbout;

    /**
     * Event that this person is a performer or participant in.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|string
     */
    protected $performerIn;

    /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    protected $netWorth;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * A contact location for a person's place of work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $workLocation;

    /**
     * An honorific suffix following a Person's name such as M.D. /PhD/MSCSW.
     *
     *
     * @var string
     */
    protected $honorificSuffix;

    /**
     * The place where the person died.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $deathPlace;

    /**
     * A contact location for a person's residence.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $homeLocation;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Grant|string
     */
    protected $funding;

    /**
     * The Value-added Tax ID of the organization or person.
     *
     *
     * @var string
     */
    protected $vatID;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $height;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     *
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $contactPoints;

    /**
     * The Person's occupation. For past professions, use Role for expressing dates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Occupation|string
     */
    protected $hasOccupation;

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
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $parent;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * A sibling of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $sibling;

    /**
     * The job title of the person (for example, Financial Manager).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $jobTitle;

    /**
     * Date of birth.
     *
     *
     * @var Date|null
     */
    protected $birthDate;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $funder;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $makesOffer;

    /**
     * A child of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $children;

    /**
     * Organizations that the person works for.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $worksFor;

    /**
     * The most generic bi-directional social/work relation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $knows;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\InteractionCounter|string
     */
    protected $interactionStatistic;

    /**
     * Physical address of the item.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $address;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProgramMembership|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $memberOf;

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
     * A colleague of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $colleagues;

    /**
     * Date of death.
     *
     *
     * @var Date|null
     */
    protected $deathDate;

    /**
     * Email address.
     *
     *
     * @var string
     */
    protected $email;

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $affiliation;

    /**
     * A sibling of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $siblings;

    /**
     * The place where the person was born.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $birthPlace;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Brand|string
     */
    protected $brand;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $sponsor;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     *
     * @var string
     */
    protected $naics;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $contactPoint;

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     *
     * @var string
     */
    protected $callSign;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     *
     * @var string
     */
    protected $isicV4;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $hasPOS;

    /**
     * An organization that the person is an alumni of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOrganization|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $alumniOf;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     *
     * @var string
     */
    protected $duns;

    /**
     * The weight of the product or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $weight;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $knowsLanguage;

    /**
     * The most generic familial relation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $relatedTo;

    /**
     * A colleague of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $colleague;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|string
     */
    protected $seeks;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     *
     * @var string
     */
    protected $taxID;

    /**
     * Products owned by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\OwnershipInfo|string
     */
    protected $owns;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OfferCatalog|string
     */
    protected $hasOfferCatalog;

    /**
     * The most generic uni-directional social relation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $follows;

    /**
     * Nationality of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $nationality;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $spouse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpouse($spouse)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $spouse = self::checkTypes($spouse, $types);

        $this->spouse = $spouse;
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
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    public function getHasCredential()
    {
        return $this->hasCredential;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $hasCredential
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCredential($hasCredential)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
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
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $parents
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParents($parents)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $parents = self::checkTypes($parents, $types);

        $this->parents = $parents;
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
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getKnowsAbout()
    {
        return $this->knowsAbout;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $knowsAbout
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnowsAbout($knowsAbout)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $knowsAbout = self::checkTypes($knowsAbout, $types);

        $this->knowsAbout = $knowsAbout;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event|string
     */
    public function getPerformerIn()
    {
        return $this->performerIn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event|string $performerIn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformerIn($performerIn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
            "string",
        ];

        $performerIn = self::checkTypes($performerIn, $types);

        $this->performerIn = $performerIn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string
     */
    public function getNetWorth()
    {
        return $this->netWorth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|\OpenActive\Models\SchemaOrg\PriceSpecification|string $netWorth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNetWorth($netWorth)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "string",
        ];

        $netWorth = self::checkTypes($netWorth, $types);

        $this->netWorth = $netWorth;
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
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ContactPoint|string $workLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkLocation($workLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $workLocation = self::checkTypes($workLocation, $types);

        $this->workLocation = $workLocation;
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
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getDeathPlace()
    {
        return $this->deathPlace;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $deathPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeathPlace($deathPlace)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $deathPlace = self::checkTypes($deathPlace, $types);

        $this->deathPlace = $deathPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\ContactPoint|string $homeLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHomeLocation($homeLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $homeLocation = self::checkTypes($homeLocation, $types);

        $this->homeLocation = $homeLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Grant|string
     */
    public function getFunding()
    {
        return $this->funding;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Grant|string $funding
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunding($funding)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Grant",
            "string",
        ];

        $funding = self::checkTypes($funding, $types);

        $this->funding = $funding;
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
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $height = self::checkTypes($height, $types);

        $this->height = $height;
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
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|string $contactPoints
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoints($contactPoints)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $contactPoints = self::checkTypes($contactPoints, $types);

        $this->contactPoints = $contactPoints;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Occupation|string
     */
    public function getHasOccupation()
    {
        return $this->hasOccupation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Occupation|string $hasOccupation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasOccupation($hasOccupation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Occupation",
            "string",
        ];

        $hasOccupation = self::checkTypes($hasOccupation, $types);

        $this->hasOccupation = $hasOccupation;
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
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $parent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParent($parent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $parent = self::checkTypes($parent, $types);

        $this->parent = $parent;
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
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSibling()
    {
        return $this->sibling;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $sibling
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSibling($sibling)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $sibling = self::checkTypes($sibling, $types);

        $this->sibling = $sibling;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $jobTitle
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobTitle($jobTitle)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $jobTitle = self::checkTypes($jobTitle, $types);

        $this->jobTitle = $jobTitle;
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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|string $makesOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMakesOffer($makesOffer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $makesOffer = self::checkTypes($makesOffer, $types);

        $this->makesOffer = $makesOffer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $children
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildren($children)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $children = self::checkTypes($children, $types);

        $this->children = $children;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getWorksFor()
    {
        return $this->worksFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $worksFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorksFor($worksFor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $worksFor = self::checkTypes($worksFor, $types);

        $this->worksFor = $worksFor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getKnows()
    {
        return $this->knows;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $knows
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnows($knows)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $knows = self::checkTypes($knows, $types);

        $this->knows = $knows;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\InteractionCounter|string
     */
    public function getInteractionStatistic()
    {
        return $this->interactionStatistic;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\InteractionCounter|string $interactionStatistic
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionStatistic($interactionStatistic)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\InteractionCounter",
            "string",
        ];

        $interactionStatistic = self::checkTypes($interactionStatistic, $types);

        $this->interactionStatistic = $interactionStatistic;
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
     * @return \OpenActive\Models\SchemaOrg\ProgramMembership|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getMemberOf()
    {
        return $this->memberOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProgramMembership|\OpenActive\Models\SchemaOrg\Organization|string $memberOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMemberOf($memberOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProgramMembership",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $memberOf = self::checkTypes($memberOf, $types);

        $this->memberOf = $memberOf;
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
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getColleagues()
    {
        return $this->colleagues;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $colleagues
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setColleagues($colleagues)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $colleagues = self::checkTypes($colleagues, $types);

        $this->colleagues = $colleagues;
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
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $affiliation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAffiliation($affiliation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $affiliation = self::checkTypes($affiliation, $types);

        $this->affiliation = $affiliation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSiblings()
    {
        return $this->siblings;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $siblings
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSiblings($siblings)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $siblings = self::checkTypes($siblings, $types);

        $this->siblings = $siblings;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $birthPlace
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBirthPlace($birthPlace)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $birthPlace = self::checkTypes($birthPlace, $types);

        $this->birthPlace = $birthPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Brand|string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Brand|string $brand
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Brand",
            "string",
        ];

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
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
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|string $contactPoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoint($contactPoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $contactPoint = self::checkTypes($contactPoint, $types);

        $this->contactPoint = $contactPoint;
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
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $hasPOS
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasPOS($hasPOS)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $hasPOS = self::checkTypes($hasPOS, $types);

        $this->hasPOS = $hasPOS;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOrganization|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getAlumniOf()
    {
        return $this->alumniOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOrganization|\OpenActive\Models\SchemaOrg\Organization|string $alumniOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlumniOf($alumniOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOrganization",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $alumniOf = self::checkTypes($alumniOf, $types);

        $this->alumniOf = $alumniOf;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $weight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWeight($weight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $weight = self::checkTypes($weight, $types);

        $this->weight = $weight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getKnowsLanguage()
    {
        return $this->knowsLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $knowsLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnowsLanguage($knowsLanguage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        ];

        $knowsLanguage = self::checkTypes($knowsLanguage, $types);

        $this->knowsLanguage = $knowsLanguage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $relatedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedTo($relatedTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $relatedTo = self::checkTypes($relatedTo, $types);

        $this->relatedTo = $relatedTo;
    }

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
     * @return \OpenActive\Models\SchemaOrg\Demand|string
     */
    public function getSeeks()
    {
        return $this->seeks;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|string $seeks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeeks($seeks)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "string",
        ];

        $seeks = self::checkTypes($seeks, $types);

        $this->seeks = $seeks;
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
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\OwnershipInfo|string
     */
    public function getOwns()
    {
        return $this->owns;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\OwnershipInfo|string $owns
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOwns($owns)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\OwnershipInfo",
            "string",
        ];

        $owns = self::checkTypes($owns, $types);

        $this->owns = $owns;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OfferCatalog|string
     */
    public function getHasOfferCatalog()
    {
        return $this->hasOfferCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OfferCatalog|string $hasOfferCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasOfferCatalog($hasOfferCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OfferCatalog",
            "string",
        ];

        $hasOfferCatalog = self::checkTypes($hasOfferCatalog, $types);

        $this->hasOfferCatalog = $hasOfferCatalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $follows
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFollows($follows)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $follows = self::checkTypes($follows, $types);

        $this->follows = $follows;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $nationality
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNationality($nationality)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $nationality = self::checkTypes($nationality, $types);

        $this->nationality = $nationality;
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

}
