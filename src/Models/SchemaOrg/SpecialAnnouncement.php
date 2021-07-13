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
            "quarantineGuidelines" => "quarantineGuidelines",
            "governmentBenefitsInfo" => "governmentBenefitsInfo",
            "diseaseSpreadStatistics" => "diseaseSpreadStatistics",
            "travelBans" => "travelBans",
            "category" => "category",
            "schoolClosuresInfo" => "schoolClosuresInfo",
            "datePosted" => "datePosted",
            "webFeed" => "webFeed",
            "gettingTestedInfo" => "gettingTestedInfo",
            "newsUpdatesAndGuidelines" => "newsUpdatesAndGuidelines",
            "publicTransportClosuresInfo" => "publicTransportClosuresInfo",
            "diseasePreventionInfo" => "diseasePreventionInfo",
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
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $quarantineGuidelines;

    /**
     * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GovernmentService|string
     */
    protected $governmentBenefitsInfo;

    /**
     * Statistical information about the spread of a disease, either as [[WebContent]], or
     *   described directly as a [[Dataset]], or the specific [[Observation]]s in the dataset. When a [[WebContent]] URL is
     *   provided, the page indicated might also contain more such markup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Observation|\OpenActive\Models\SchemaOrg\WebContent|string|\OpenActive\Models\SchemaOrg\Dataset
     */
    protected $diseaseSpreadStatistics;

    /**
     * Information about travel bans, e.g. in the context of a pandemic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $travelBans;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * Information about school closures.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $schoolClosuresInfo;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataFeed|string
     */
    protected $webFeed;

    /**
     * Information about getting tested (for a [[MedicalCondition]]), e.g. in the context of a pandemic.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $gettingTestedInfo;

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
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $publicTransportClosuresInfo;

    /**
     * Information about disease prevention.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $diseasePreventionInfo;

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
     * @return \OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getQuarantineGuidelines()
    {
        return $this->quarantineGuidelines;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string $quarantineGuidelines
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQuarantineGuidelines($quarantineGuidelines)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        ];

        $quarantineGuidelines = self::checkTypes($quarantineGuidelines, $types);

        $this->quarantineGuidelines = $quarantineGuidelines;
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
     * @return \OpenActive\Models\SchemaOrg\Observation|\OpenActive\Models\SchemaOrg\WebContent|string|\OpenActive\Models\SchemaOrg\Dataset
     */
    public function getDiseaseSpreadStatistics()
    {
        return $this->diseaseSpreadStatistics;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Observation|\OpenActive\Models\SchemaOrg\WebContent|string|\OpenActive\Models\SchemaOrg\Dataset $diseaseSpreadStatistics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiseaseSpreadStatistics($diseaseSpreadStatistics)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Observation",
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
            "\OpenActive\Models\SchemaOrg\Dataset",
        ];

        $diseaseSpreadStatistics = self::checkTypes($diseaseSpreadStatistics, $types);

        $this->diseaseSpreadStatistics = $diseaseSpreadStatistics;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getTravelBans()
    {
        return $this->travelBans;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string $travelBans
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTravelBans($travelBans)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        ];

        $travelBans = self::checkTypes($travelBans, $types);

        $this->travelBans = $travelBans;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
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
     * @return \OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getPublicTransportClosuresInfo()
    {
        return $this->publicTransportClosuresInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string $publicTransportClosuresInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublicTransportClosuresInfo($publicTransportClosuresInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        ];

        $publicTransportClosuresInfo = self::checkTypes($publicTransportClosuresInfo, $types);

        $this->publicTransportClosuresInfo = $publicTransportClosuresInfo;
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

}
