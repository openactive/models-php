<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SpecialAnnouncement extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SpecialAnnouncement";
    }

    public static function fieldList() {
        $fields = [
            "announcementLocation" => "announcementLocation",
            "category" => "category",
            "datePosted" => "datePosted",
            "diseasePreventionInfo" => "diseasePreventionInfo",
            "diseaseSpreadStatistics" => "diseaseSpreadStatistics",
            "gettingTestedInfo" => "gettingTestedInfo",
            "governmentBenefitsInfo" => "governmentBenefitsInfo",
            "newsUpdatesAndGuidelines" => "newsUpdatesAndGuidelines",
            "publicTransportClosuresInfo" => "publicTransportClosuresInfo",
            "quarantineGuidelines" => "quarantineGuidelines",
            "schoolClosuresInfo" => "schoolClosuresInfo",
            "travelBans" => "travelBans",
            "webFeed" => "webFeed",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CivicStructure|\OpenActive\Models\SchemaOrg\LocalBusiness|string
     */
    protected $announcementLocation;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * Information about disease prevention.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $diseasePreventionInfo;

    /**
     * Statistical information about the spread of a disease, either as [[WebContent]], or
     *   described directly as a [[Dataset]], or the specific [[Observation]]s in the dataset. When a [[WebContent]] URL is
     *   provided, the page indicated might also contain more such markup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\Observation|string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $diseaseSpreadStatistics;

    /**
     * Information about getting tested (for a [[MedicalCondition]]), e.g. in the context of a pandemic.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $gettingTestedInfo;

    /**
     * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GovernmentService|string
     */
    protected $governmentBenefitsInfo;

    /**
     * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page containing [[SpecialAnnouncement]] markup on a site.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $newsUpdatesAndGuidelines;

    /**
     * Information about public transport closures.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $publicTransportClosuresInfo;

    /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $quarantineGuidelines;

    /**
     * Information about school closures.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $schoolClosuresInfo;

    /**
     * Information about travel bans, e.g. in the context of a pandemic.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $travelBans;

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataFeed|string
     */
    protected $webFeed;

    /**
     * @return \OpenActive\Models\SchemaOrg\CivicStructure|\OpenActive\Models\SchemaOrg\LocalBusiness|string
     */
    public function getAnnouncementLocation()
    {
        return $this->announcementLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CivicStructure|\OpenActive\Models\SchemaOrg\LocalBusiness|string $announcementLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnnouncementLocation($announcementLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CivicStructure",
            "\OpenActive\Models\SchemaOrg\LocalBusiness",
            "string",
        ];

        $announcementLocation = self::checkTypes($announcementLocation, $types);

        $this->announcementLocation = $announcementLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * @param Date|DateTime|null $datePosted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePosted($datePosted)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePosted = self::checkTypes($datePosted, $types);

        $this->datePosted = $datePosted;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getDiseasePreventionInfo()
    {
        return $this->diseasePreventionInfo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebContent $diseasePreventionInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiseasePreventionInfo($diseasePreventionInfo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $diseasePreventionInfo = self::checkTypes($diseasePreventionInfo, $types);

        $this->diseasePreventionInfo = $diseasePreventionInfo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\Observation|string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getDiseaseSpreadStatistics()
    {
        return $this->diseaseSpreadStatistics;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\Observation|string|\OpenActive\Models\SchemaOrg\WebContent $diseaseSpreadStatistics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiseaseSpreadStatistics($diseaseSpreadStatistics)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Dataset",
            "\OpenActive\Models\SchemaOrg\Observation",
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $diseaseSpreadStatistics = self::checkTypes($diseaseSpreadStatistics, $types);

        $this->diseaseSpreadStatistics = $diseaseSpreadStatistics;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getGettingTestedInfo()
    {
        return $this->gettingTestedInfo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebContent $gettingTestedInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGettingTestedInfo($gettingTestedInfo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $gettingTestedInfo = self::checkTypes($gettingTestedInfo, $types);

        $this->gettingTestedInfo = $gettingTestedInfo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GovernmentService|string
     */
    public function getGovernmentBenefitsInfo()
    {
        return $this->governmentBenefitsInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GovernmentService|string $governmentBenefitsInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGovernmentBenefitsInfo($governmentBenefitsInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GovernmentService",
            "string",
        ];

        $governmentBenefitsInfo = self::checkTypes($governmentBenefitsInfo, $types);

        $this->governmentBenefitsInfo = $governmentBenefitsInfo;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getNewsUpdatesAndGuidelines()
    {
        return $this->newsUpdatesAndGuidelines;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebContent $newsUpdatesAndGuidelines
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNewsUpdatesAndGuidelines($newsUpdatesAndGuidelines)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $newsUpdatesAndGuidelines = self::checkTypes($newsUpdatesAndGuidelines, $types);

        $this->newsUpdatesAndGuidelines = $newsUpdatesAndGuidelines;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getPublicTransportClosuresInfo()
    {
        return $this->publicTransportClosuresInfo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebContent $publicTransportClosuresInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublicTransportClosuresInfo($publicTransportClosuresInfo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $publicTransportClosuresInfo = self::checkTypes($publicTransportClosuresInfo, $types);

        $this->publicTransportClosuresInfo = $publicTransportClosuresInfo;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getQuarantineGuidelines()
    {
        return $this->quarantineGuidelines;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebContent $quarantineGuidelines
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQuarantineGuidelines($quarantineGuidelines)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $quarantineGuidelines = self::checkTypes($quarantineGuidelines, $types);

        $this->quarantineGuidelines = $quarantineGuidelines;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getSchoolClosuresInfo()
    {
        return $this->schoolClosuresInfo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebContent $schoolClosuresInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSchoolClosuresInfo($schoolClosuresInfo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $schoolClosuresInfo = self::checkTypes($schoolClosuresInfo, $types);

        $this->schoolClosuresInfo = $schoolClosuresInfo;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getTravelBans()
    {
        return $this->travelBans;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\WebContent $travelBans
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTravelBans($travelBans)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $travelBans = self::checkTypes($travelBans, $types);

        $this->travelBans = $travelBans;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataFeed|string
     */
    public function getWebFeed()
    {
        return $this->webFeed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataFeed|string $webFeed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWebFeed($webFeed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataFeed",
            "string",
        ];

        $webFeed = self::checkTypes($webFeed, $types);

        $this->webFeed = $webFeed;
    }

}
