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
            "schoolClosuresInfo" => "schoolClosuresInfo",
            "gettingTestedInfo" => "gettingTestedInfo",
            "diseaseSpreadStatistics" => "diseaseSpreadStatistics",
            "announcementLocation" => "announcementLocation",
            "travelBans" => "travelBans",
            "quarantineGuidelines" => "quarantineGuidelines",
            "webFeed" => "webFeed",
            "publicTransportClosuresInfo" => "publicTransportClosuresInfo",
            "governmentBenefitsInfo" => "governmentBenefitsInfo",
            "diseasePreventionInfo" => "diseasePreventionInfo",
            "newsUpdatesAndGuidelines" => "newsUpdatesAndGuidelines",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Information about school closures.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $schoolClosuresInfo;

    /**
     * Information about getting tested (for a <a class="localLink" href="https://schema.org/MedicalCondition">MedicalCondition</a>), e.g. in the context of a pandemic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $gettingTestedInfo;

    /**
     * Statistical information about the spread of a disease, either as <a class="localLink" href="https://schema.org/WebContent">WebContent</a>, or
     *   described directly as a <a class="localLink" href="https://schema.org/Dataset">Dataset</a>, or the specific <a class="localLink" href="https://schema.org/Observation">Observation</a>s in the dataset. When a <a class="localLink" href="https://schema.org/WebContent">WebContent</a> URL is
     *   provided, the page indicated might also contain more such markup.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\Observation|string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $diseaseSpreadStatistics;

    /**
     * Indicates a specific <a class="localLink" href="https://schema.org/CivicStructure">CivicStructure</a> or <a class="localLink" href="https://schema.org/LocalBusiness">LocalBusiness</a> associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening hours. For a larger geographic region like a quarantine of an entire region, use <a class="localLink" href="https://schema.org/spatialCoverage">spatialCoverage</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CivicStructure|\OpenActive\Models\SchemaOrg\LocalBusiness
     */
    protected $announcementLocation;

    /**
     * Information about travel bans, e.g. in the context of a pandemic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $travelBans;

    /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $quarantineGuidelines;

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataFeed|string
     */
    protected $webFeed;

    /**
     * Information about public transport closures.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $publicTransportClosuresInfo;

    /**
     * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GovernmentService
     */
    protected $governmentBenefitsInfo;

    /**
     * Information about disease prevention.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $diseasePreventionInfo;

    /**
     * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page containing <a class="localLink" href="https://schema.org/SpecialAnnouncement">SpecialAnnouncement</a> markup on a site.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $newsUpdatesAndGuidelines;

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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        );

        $schoolClosuresInfo = self::checkTypes($schoolClosuresInfo, $types);

        $this->schoolClosuresInfo = $schoolClosuresInfo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getGettingTestedInfo()
    {
        return $this->gettingTestedInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string $gettingTestedInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGettingTestedInfo($gettingTestedInfo)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        );

        $gettingTestedInfo = self::checkTypes($gettingTestedInfo, $types);

        $this->gettingTestedInfo = $gettingTestedInfo;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Dataset",
            "\OpenActive\Models\SchemaOrg\Observation",
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        );

        $diseaseSpreadStatistics = self::checkTypes($diseaseSpreadStatistics, $types);

        $this->diseaseSpreadStatistics = $diseaseSpreadStatistics;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CivicStructure|\OpenActive\Models\SchemaOrg\LocalBusiness
     */
    public function getAnnouncementLocation()
    {
        return $this->announcementLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CivicStructure|\OpenActive\Models\SchemaOrg\LocalBusiness $announcementLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnnouncementLocation($announcementLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CivicStructure",
            "\OpenActive\Models\SchemaOrg\LocalBusiness",
        );

        $announcementLocation = self::checkTypes($announcementLocation, $types);

        $this->announcementLocation = $announcementLocation;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        );

        $travelBans = self::checkTypes($travelBans, $types);

        $this->travelBans = $travelBans;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        );

        $quarantineGuidelines = self::checkTypes($quarantineGuidelines, $types);

        $this->quarantineGuidelines = $quarantineGuidelines;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\DataFeed",
            "string",
        );

        $webFeed = self::checkTypes($webFeed, $types);

        $this->webFeed = $webFeed;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        );

        $publicTransportClosuresInfo = self::checkTypes($publicTransportClosuresInfo, $types);

        $this->publicTransportClosuresInfo = $publicTransportClosuresInfo;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\GovernmentService",
        );

        $governmentBenefitsInfo = self::checkTypes($governmentBenefitsInfo, $types);

        $this->governmentBenefitsInfo = $governmentBenefitsInfo;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        );

        $diseasePreventionInfo = self::checkTypes($diseasePreventionInfo, $types);

        $this->diseasePreventionInfo = $diseasePreventionInfo;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        );

        $newsUpdatesAndGuidelines = self::checkTypes($newsUpdatesAndGuidelines, $types);

        $this->newsUpdatesAndGuidelines = $newsUpdatesAndGuidelines;
    }

}
