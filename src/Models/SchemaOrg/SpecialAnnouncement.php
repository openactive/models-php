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
            "diseaseSpreadStatistics" => "diseaseSpreadStatistics",
            "newsUpdatesAndGuidelines" => "newsUpdatesAndGuidelines",
            "datePosted" => "datePosted",
            "quarantineGuidelines" => "quarantineGuidelines",
            "category" => "category",
            "schoolClosuresInfo" => "schoolClosuresInfo",
            "governmentBenefitsInfo" => "governmentBenefitsInfo",
            "announcementLocation" => "announcementLocation",
            "publicTransportClosuresInfo" => "publicTransportClosuresInfo",
            "travelBans" => "travelBans",
            "webFeed" => "webFeed",
            "gettingTestedInfo" => "gettingTestedInfo",
            "diseasePreventionInfo" => "diseasePreventionInfo",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Statistical information about the spread of a disease, either as [[WebContent]], or
     *   described directly as a [[Dataset]], or the specific [[Observation]]s in the dataset. When a [[WebContent]] URL is
     *   provided, the page indicated might also contain more such markup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\Observation|\OpenActive\Models\SchemaOrg\Dataset|string
     */
    protected $diseaseSpreadStatistics;

    /**
     * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page containing [[SpecialAnnouncement]] markup on a site.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $newsUpdatesAndGuidelines;

    /**
     * Publication date of an online listing.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePosted;

    /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $quarantineGuidelines;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * Information about school closures.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $schoolClosuresInfo;

    /**
     * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GovernmentService
     */
    protected $governmentBenefitsInfo;

    /**
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LocalBusiness|\OpenActive\Models\SchemaOrg\CivicStructure
     */
    protected $announcementLocation;

    /**
     * Information about public transport closures.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $publicTransportClosuresInfo;

    /**
     * Information about travel bans, e.g. in the context of a pandemic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $travelBans;

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DataFeed
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
     * Information about disease prevention.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $diseasePreventionInfo;

    /**
     * @return \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\Observation|\OpenActive\Models\SchemaOrg\Dataset|string
     */
    public function getDiseaseSpreadStatistics()
    {
        return $this->diseaseSpreadStatistics;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\Observation|\OpenActive\Models\SchemaOrg\Dataset|string $diseaseSpreadStatistics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiseaseSpreadStatistics($diseaseSpreadStatistics)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "\OpenActive\Models\SchemaOrg\Observation",
            "\OpenActive\Models\SchemaOrg\Dataset",
            "string",
        ];

        $diseaseSpreadStatistics = self::checkTypes($diseaseSpreadStatistics, $types);

        $this->diseaseSpreadStatistics = $diseaseSpreadStatistics;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getNewsUpdatesAndGuidelines()
    {
        return $this->newsUpdatesAndGuidelines;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string $newsUpdatesAndGuidelines
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNewsUpdatesAndGuidelines($newsUpdatesAndGuidelines)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        ];

        $newsUpdatesAndGuidelines = self::checkTypes($newsUpdatesAndGuidelines, $types);

        $this->newsUpdatesAndGuidelines = $newsUpdatesAndGuidelines;
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
     * @return \OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getSchoolClosuresInfo()
    {
        return $this->schoolClosuresInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string $schoolClosuresInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSchoolClosuresInfo($schoolClosuresInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        ];

        $schoolClosuresInfo = self::checkTypes($schoolClosuresInfo, $types);

        $this->schoolClosuresInfo = $schoolClosuresInfo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GovernmentService
     */
    public function getGovernmentBenefitsInfo()
    {
        return $this->governmentBenefitsInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GovernmentService $governmentBenefitsInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGovernmentBenefitsInfo($governmentBenefitsInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GovernmentService",
        ];

        $governmentBenefitsInfo = self::checkTypes($governmentBenefitsInfo, $types);

        $this->governmentBenefitsInfo = $governmentBenefitsInfo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\LocalBusiness|\OpenActive\Models\SchemaOrg\CivicStructure
     */
    public function getAnnouncementLocation()
    {
        return $this->announcementLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LocalBusiness|\OpenActive\Models\SchemaOrg\CivicStructure $announcementLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnnouncementLocation($announcementLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\LocalBusiness",
            "\OpenActive\Models\SchemaOrg\CivicStructure",
        ];

        $announcementLocation = self::checkTypes($announcementLocation, $types);

        $this->announcementLocation = $announcementLocation;
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
     * @return string|\OpenActive\Models\SchemaOrg\DataFeed
     */
    public function getWebFeed()
    {
        return $this->webFeed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DataFeed $webFeed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWebFeed($webFeed)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DataFeed",
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
     * @return \OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getDiseasePreventionInfo()
    {
        return $this->diseasePreventionInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string $diseasePreventionInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiseasePreventionInfo($diseasePreventionInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        ];

        $diseasePreventionInfo = self::checkTypes($diseasePreventionInfo, $types);

        $this->diseasePreventionInfo = $diseasePreventionInfo;
    }

}
