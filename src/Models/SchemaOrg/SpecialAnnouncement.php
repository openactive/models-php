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
            "webFeed" => "webFeed",
            "datePosted" => "datePosted",
            "diseasePreventionInfo" => "diseasePreventionInfo",
            "publicTransportClosuresInfo" => "publicTransportClosuresInfo",
            "category" => "category",
            "schoolClosuresInfo" => "schoolClosuresInfo",
            "quarantineGuidelines" => "quarantineGuidelines",
            "governmentBenefitsInfo" => "governmentBenefitsInfo",
            "travelBans" => "travelBans",
            "diseaseSpreadStatistics" => "diseaseSpreadStatistics",
            "gettingTestedInfo" => "gettingTestedInfo",
            "announcementLocation" => "announcementLocation",
            "newsUpdatesAndGuidelines" => "newsUpdatesAndGuidelines",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DataFeed
     */
    protected $webFeed;

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
     * Information about public transport closures.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $publicTransportClosuresInfo;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\CategoryCode|string|null
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
     * Information about travel bans, e.g. in the context of a pandemic.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $travelBans;

    /**
     * Statistical information about the spread of a disease, either as [[WebContent]], or
     *   described directly as a [[Dataset]], or the specific [[Observation]]s in the dataset. When a [[WebContent]] URL is
     *   provided, the page indicated might also contain more such markup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\Observation|string
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
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CivicStructure|\OpenActive\Models\SchemaOrg\LocalBusiness|string
     */
    protected $announcementLocation;

    /**
     * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page containing [[SpecialAnnouncement]] markup on a site.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $newsUpdatesAndGuidelines;

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
     * @return \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\CategoryCode|string|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\CategoryCode|string|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "string",
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
     * @return \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\Observation|string
     */
    public function getDiseaseSpreadStatistics()
    {
        return $this->diseaseSpreadStatistics;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\Observation|string $diseaseSpreadStatistics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiseaseSpreadStatistics($diseaseSpreadStatistics)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "\OpenActive\Models\SchemaOrg\Dataset",
            "\OpenActive\Models\SchemaOrg\Observation",
            "string",
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

}
