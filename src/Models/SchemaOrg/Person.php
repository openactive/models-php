<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Person extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProgramMembership|Organization
     */
    protected $memberOf;

    /**
     * Physical address of the item.
     *
     *
     * @var PostalAddress|string
     */
    protected $address;

    /**
     * The person's spouse.
     *
     *
     * @var Person
     */
    protected $spouse;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var Organization|Person
     */
    protected $funder;

    /**
     * A colleague of the person.
     *
     *
     * @var Person
     */
    protected $colleagues;

    /**
     * Date of death.
     *
     *
     * @var DateTime|null
     */
    protected $deathDate;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    protected $height;

    /**
     * A contact location for a person's place of work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|Place
     */
    protected $workLocation;

    /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     *
     *
     * @var PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $netWorth;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * The Person's occupation. For past professions, use Role for expressing dates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Occupation
     */
    protected $hasOccupation;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OfferCatalog
     */
    protected $hasOfferCatalog;

    /**
     * The place where the person died.
     *
     *
     * @var Place
     */
    protected $deathPlace;

    /**
     * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     *
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * The place where the person was born.
     *
     *
     * @var Place
     */
    protected $birthPlace;

    /**
     * An organization that the person is an alumni of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOrganization|Organization
     */
    protected $alumniOf;

    /**
     * A contact location for a person's residence.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|Place
     */
    protected $homeLocation;

    /**
     * The Dun &amp; Bradstreet DUNS number for identifying an organization or business person.
     *
     *
     * @var string
     */
    protected $duns;

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
     * Date of birth.
     *
     *
     * @var DateTime|null
     */
    protected $birthDate;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     *
     * @var Offer
     */
    protected $makesOffer;

    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
     *
     *
     * @var string
     */
    protected $givenName;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $contactPoints;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
     *
     *
     * @var string
     */
    protected $familyName;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand
     */
    protected $seeks;

    /**
     * A sibling of the person.
     *
     *
     * @var Person
     */
    protected $sibling;

    /**
     * Event that this person is a performer or participant in.
     *
     *
     * @var Event
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
     * An additional name for a Person, can be used for a middle name.
     *
     *
     * @var string
     */
    protected $additionalName;

    /**
     * A sibling of the person.
     *
     *
     * @var Person
     */
    protected $siblings;

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
     * The weight of the product or person.
     *
     *
     * @var QuantitativeValue
     */
    protected $weight;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $contactPoint;

    /**
     * A colleague of the person.
     *
     *
     * @var string|Person
     */
    protected $colleague;

    /**
     * A child of the person.
     *
     *
     * @var Person
     */
    protected $children;

    /**
     * A parents of the person.
     *
     *
     * @var Person
     */
    protected $parents;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     *
     * @var string
     */
    protected $naics;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     *
     * @var Place
     */
    protected $hasPOS;

    /**
     * A parent of this person.
     *
     *
     * @var Person
     */
    protected $parent;

    /**
     * Products owned by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OwnershipInfo|\OpenActive\Models\SchemaOrg\Product
     */
    protected $owns;

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     *
     *
     * @var Organization
     */
    protected $affiliation;

    /**
     * The publishingPrinciples property indicates (typically via <a class="localLink" href="https://schema.org/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="https://schema.org/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="https://schema.org/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="https://schema.org/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a>.<br/><br/>
     * 
     * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="https://schema.org/funder">funder</a>) can be expressed using schema.org terminology.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $publishingPrinciples;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var Person|Organization
     */
    protected $sponsor;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     *
     * @var string
     */
    protected $isicV4;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var Organization|Brand
     */
    protected $brand;

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
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
     * Nationality of the person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country
     */
    protected $nationality;

    /**
     * The most generic familial relation.
     *
     *
     * @var Person
     */
    protected $relatedTo;

    /**
     * The most generic uni-directional social relation.
     *
     *
     * @var Person
     */
    protected $follows;

    /**
     * The most generic bi-directional social/work relation.
     *
     *
     * @var Person
     */
    protected $knows;

    /**
     * Organizations that the person works for.
     *
     *
     * @var Organization
     */
    protected $worksFor;

    /**
     * @return \OpenActive\Models\SchemaOrg\ProgramMembership|Organization
     */
    public function getMemberOf()
    {
        return $this->memberOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProgramMembership|Organization $memberOf
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMemberOf($memberOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ProgramMembership",
            "Organization",
        );

        $memberOf = self::checkTypes($memberOf, $types);

        $this->memberOf = $memberOf;
    }

    /**
     * @return PostalAddress|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param PostalAddress|string $address
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = array(
            "PostalAddress",
            "string",
        );

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return Person
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * @param Person $spouse
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSpouse($spouse)
    {
        $types = array(
            "Person",
        );

        $spouse = self::checkTypes($spouse, $types);

        $this->spouse = $spouse;
    }

    /**
     * @return Organization|Person
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param Organization|Person $funder
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return Person
     */
    public function getColleagues()
    {
        return $this->colleagues;
    }

    /**
     * @param Person $colleagues
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setColleagues($colleagues)
    {
        $types = array(
            "Person",
        );

        $colleagues = self::checkTypes($colleagues, $types);

        $this->colleagues = $colleagues;
    }

    /**
     * @return DateTime|null
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * @param DateTime|null $deathDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDeathDate($deathDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $deathDate = self::checkTypes($deathDate, $types);

        $this->deathDate = $deathDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue $height
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "QuantitativeValue",
        );

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|Place
     */
    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|Place $workLocation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setWorkLocation($workLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "Place",
        );

        $workLocation = self::checkTypes($workLocation, $types);

        $this->workLocation = $workLocation;
    }

    /**
     * @return PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getNetWorth()
    {
        return $this->netWorth;
    }

    /**
     * @param PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount $netWorth
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNetWorth($netWorth)
    {
        $types = array(
            "PriceSpecification",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $netWorth = self::checkTypes($netWorth, $types);

        $this->netWorth = $netWorth;
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
     * @return \OpenActive\Models\SchemaOrg\Occupation
     */
    public function getHasOccupation()
    {
        return $this->hasOccupation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Occupation $hasOccupation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHasOccupation($hasOccupation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Occupation",
        );

        $hasOccupation = self::checkTypes($hasOccupation, $types);

        $this->hasOccupation = $hasOccupation;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHasOfferCatalog($hasOfferCatalog)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\OfferCatalog",
        );

        $hasOfferCatalog = self::checkTypes($hasOfferCatalog, $types);

        $this->hasOfferCatalog = $hasOfferCatalog;
    }

    /**
     * @return Place
     */
    public function getDeathPlace()
    {
        return $this->deathPlace;
    }

    /**
     * @param Place $deathPlace
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDeathPlace($deathPlace)
    {
        $types = array(
            "Place",
        );

        $deathPlace = self::checkTypes($deathPlace, $types);

        $this->deathPlace = $deathPlace;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $types = array(
            "string",
        );

        $globalLocationNumber = self::checkTypes($globalLocationNumber, $types);

        $this->globalLocationNumber = $globalLocationNumber;
    }

    /**
     * @return Place
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param Place $birthPlace
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBirthPlace($birthPlace)
    {
        $types = array(
            "Place",
        );

        $birthPlace = self::checkTypes($birthPlace, $types);

        $this->birthPlace = $birthPlace;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOrganization|Organization
     */
    public function getAlumniOf()
    {
        return $this->alumniOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOrganization|Organization $alumniOf
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAlumniOf($alumniOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\EducationalOrganization",
            "Organization",
        );

        $alumniOf = self::checkTypes($alumniOf, $types);

        $this->alumniOf = $alumniOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|Place
     */
    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|Place $homeLocation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHomeLocation($homeLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "Place",
        );

        $homeLocation = self::checkTypes($homeLocation, $types);

        $this->homeLocation = $homeLocation;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDuns($duns)
    {
        $types = array(
            "string",
        );

        $duns = self::checkTypes($duns, $types);

        $this->duns = $duns;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTaxID($taxID)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAward($award)
    {
        $types = array(
            "string",
        );

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return DateTime|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime|null $birthDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBirthDate($birthDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $birthDate = self::checkTypes($birthDate, $types);

        $this->birthDate = $birthDate;
    }

    /**
     * @return Offer
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    /**
     * @param Offer $makesOffer
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMakesOffer($makesOffer)
    {
        $types = array(
            "Offer",
        );

        $makesOffer = self::checkTypes($makesOffer, $types);

        $this->makesOffer = $makesOffer;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint $contactPoints
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setContactPoints($contactPoints)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        );

        $contactPoints = self::checkTypes($contactPoints, $types);

        $this->contactPoints = $contactPoints;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAwards($awards)
    {
        $types = array(
            "string",
        );

        $awards = self::checkTypes($awards, $types);

        $this->awards = $awards;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\Demand
     */
    public function getSeeks()
    {
        return $this->seeks;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand $seeks
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSeeks($seeks)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Demand",
        );

        $seeks = self::checkTypes($seeks, $types);

        $this->seeks = $seeks;
    }

    /**
     * @return Person
     */
    public function getSibling()
    {
        return $this->sibling;
    }

    /**
     * @param Person $sibling
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSibling($sibling)
    {
        $types = array(
            "Person",
        );

        $sibling = self::checkTypes($sibling, $types);

        $this->sibling = $sibling;
    }

    /**
     * @return Event
     */
    public function getPerformerIn()
    {
        return $this->performerIn;
    }

    /**
     * @param Event $performerIn
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPerformerIn($performerIn)
    {
        $types = array(
            "Event",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHonorificPrefix($honorificPrefix)
    {
        $types = array(
            "string",
        );

        $honorificPrefix = self::checkTypes($honorificPrefix, $types);

        $this->honorificPrefix = $honorificPrefix;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAdditionalName($additionalName)
    {
        $types = array(
            "string",
        );

        $additionalName = self::checkTypes($additionalName, $types);

        $this->additionalName = $additionalName;
    }

    /**
     * @return Person
     */
    public function getSiblings()
    {
        return $this->siblings;
    }

    /**
     * @param Person $siblings
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSiblings($siblings)
    {
        $types = array(
            "Person",
        );

        $siblings = self::checkTypes($siblings, $types);

        $this->siblings = $siblings;
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
     * @return QuantitativeValue
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param QuantitativeValue $weight
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setWeight($weight)
    {
        $types = array(
            "QuantitativeValue",
        );

        $weight = self::checkTypes($weight, $types);

        $this->weight = $weight;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setContactPoint($contactPoint)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        );

        $contactPoint = self::checkTypes($contactPoint, $types);

        $this->contactPoint = $contactPoint;
    }

    /**
     * @return string|Person
     */
    public function getColleague()
    {
        return $this->colleague;
    }

    /**
     * @param string|Person $colleague
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setColleague($colleague)
    {
        $types = array(
            "string",
            "Person",
        );

        $colleague = self::checkTypes($colleague, $types);

        $this->colleague = $colleague;
    }

    /**
     * @return Person
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param Person $children
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setChildren($children)
    {
        $types = array(
            "Person",
        );

        $children = self::checkTypes($children, $types);

        $this->children = $children;
    }

    /**
     * @return Person
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param Person $parents
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setParents($parents)
    {
        $types = array(
            "Person",
        );

        $parents = self::checkTypes($parents, $types);

        $this->parents = $parents;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNaics($naics)
    {
        $types = array(
            "string",
        );

        $naics = self::checkTypes($naics, $types);

        $this->naics = $naics;
    }

    /**
     * @return Place
     */
    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    /**
     * @param Place $hasPOS
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHasPOS($hasPOS)
    {
        $types = array(
            "Place",
        );

        $hasPOS = self::checkTypes($hasPOS, $types);

        $this->hasPOS = $hasPOS;
    }

    /**
     * @return Person
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Person $parent
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setParent($parent)
    {
        $types = array(
            "Person",
        );

        $parent = self::checkTypes($parent, $types);

        $this->parent = $parent;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOwns($owns)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\OwnershipInfo",
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $owns = self::checkTypes($owns, $types);

        $this->owns = $owns;
    }

    /**
     * @return Organization
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * @param Organization $affiliation
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAffiliation($affiliation)
    {
        $types = array(
            "Organization",
        );

        $affiliation = self::checkTypes($affiliation, $types);

        $this->affiliation = $affiliation;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPublishingPrinciples($publishingPrinciples)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $publishingPrinciples = self::checkTypes($publishingPrinciples, $types);

        $this->publishingPrinciples = $publishingPrinciples;
    }

    /**
     * @return Person|Organization
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param Person|Organization $sponsor
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIsicV4($isicV4)
    {
        $types = array(
            "string",
        );

        $isicV4 = self::checkTypes($isicV4, $types);

        $this->isicV4 = $isicV4;
    }

    /**
     * @return Organization|Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Organization|Brand $brand
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = array(
            "Organization",
            "Brand",
        );

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHonorificSuffix($honorificSuffix)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\Country
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country $nationality
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNationality($nationality)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Country",
        );

        $nationality = self::checkTypes($nationality, $types);

        $this->nationality = $nationality;
    }

    /**
     * @return Person
     */
    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    /**
     * @param Person $relatedTo
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setRelatedTo($relatedTo)
    {
        $types = array(
            "Person",
        );

        $relatedTo = self::checkTypes($relatedTo, $types);

        $this->relatedTo = $relatedTo;
    }

    /**
     * @return Person
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * @param Person $follows
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFollows($follows)
    {
        $types = array(
            "Person",
        );

        $follows = self::checkTypes($follows, $types);

        $this->follows = $follows;
    }

    /**
     * @return Person
     */
    public function getKnows()
    {
        return $this->knows;
    }

    /**
     * @param Person $knows
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setKnows($knows)
    {
        $types = array(
            "Person",
        );

        $knows = self::checkTypes($knows, $types);

        $this->knows = $knows;
    }

    /**
     * @return Organization
     */
    public function getWorksFor()
    {
        return $this->worksFor;
    }

    /**
     * @param Organization $worksFor
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setWorksFor($worksFor)
    {
        $types = array(
            "Organization",
        );

        $worksFor = self::checkTypes($worksFor, $types);

        $this->worksFor = $worksFor;
    }

}
