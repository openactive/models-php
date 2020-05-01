<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NewsMediaOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:NewsMediaOrganization";
    }

    public static function fieldList() {
        $fields = [
            "masthead" => "masthead",
            "correctionsPolicy" => "correctionsPolicy",
            "noBylinesPolicy" => "noBylinesPolicy",
            "actionableFeedbackPolicy" => "actionableFeedbackPolicy",
            "diversityPolicy" => "diversityPolicy",
            "unnamedSourcesPolicy" => "unnamedSourcesPolicy",
            "verificationFactCheckingPolicy" => "verificationFactCheckingPolicy",
            "ethicsPolicy" => "ethicsPolicy",
            "ownershipFundingInfo" => "ownershipFundingInfo",
            "diversityStaffingReport" => "diversityStaffingReport",
            "missionCoveragePrioritiesPolicy" => "missionCoveragePrioritiesPolicy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * For a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, a link to the masthead page or a page listing top editorial management.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $masthead;

    /**
     * For an <a class="localLink" href="https://schema.org/Organization">Organization</a> (e.g. <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $correctionsPolicy;

    /**
     * For a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> or other news-related <a class="localLink" href="https://schema.org/Organization">Organization</a>, a statement explaining when authors of articles are not named in bylines.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $noBylinesPolicy;

    /**
     * For a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> or other news-related <a class="localLink" href="https://schema.org/Organization">Organization</a>, a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $actionableFeedbackPolicy;

    /**
     * Statement on diversity policy by an <a class="localLink" href="https://schema.org/Organization">Organization</a> e.g. a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>. For a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $diversityPolicy;

    /**
     * For an <a class="localLink" href="https://schema.org/Organization">Organization</a> (typically a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a statement about policy on use of unnamed sources and the decision process required.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $unnamedSourcesPolicy;

    /**
     * Disclosure about verification and fact-checking processes for a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> or other fact-checking <a class="localLink" href="https://schema.org/Organization">Organization</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $verificationFactCheckingPolicy;

    /**
     * Statement about ethics policy, e.g. of a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> regarding journalistic and publishing practices, or of a <a class="localLink" href="https://schema.org/Restaurant">Restaurant</a>, a page describing food source policies. In the case of a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $ethicsPolicy;

    /**
     * For an <a class="localLink" href="https://schema.org/Organization">Organization</a> (often but not necessarily a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the <a class="localLink" href="https://schema.org/funder">funder</a> is also available and can be used to make basic funder information machine-readable.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\AboutPage
     */
    protected $ownershipFundingInfo;

    /**
     * For an <a class="localLink" href="https://schema.org/Organization">Organization</a> (often but not necessarily a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Article|string
     */
    protected $diversityStaffingReport;

    /**
     * For a <a class="localLink" href="https://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, a statement on coverage priorities, including any public agenda or stance on issues.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $missionCoveragePrioritiesPolicy;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getMasthead()
    {
        return $this->masthead;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $masthead
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMasthead($masthead)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $masthead = self::checkTypes($masthead, $types);

        $this->masthead = $masthead;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getCorrectionsPolicy()
    {
        return $this->correctionsPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $correctionsPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCorrectionsPolicy($correctionsPolicy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $correctionsPolicy = self::checkTypes($correctionsPolicy, $types);

        $this->correctionsPolicy = $correctionsPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getNoBylinesPolicy()
    {
        return $this->noBylinesPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $noBylinesPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNoBylinesPolicy($noBylinesPolicy)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $noBylinesPolicy = self::checkTypes($noBylinesPolicy, $types);

        $this->noBylinesPolicy = $noBylinesPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getActionableFeedbackPolicy()
    {
        return $this->actionableFeedbackPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $actionableFeedbackPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionableFeedbackPolicy($actionableFeedbackPolicy)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $actionableFeedbackPolicy = self::checkTypes($actionableFeedbackPolicy, $types);

        $this->actionableFeedbackPolicy = $actionableFeedbackPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getDiversityPolicy()
    {
        return $this->diversityPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $diversityPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiversityPolicy($diversityPolicy)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $diversityPolicy = self::checkTypes($diversityPolicy, $types);

        $this->diversityPolicy = $diversityPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getUnnamedSourcesPolicy()
    {
        return $this->unnamedSourcesPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $unnamedSourcesPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $unnamedSourcesPolicy = self::checkTypes($unnamedSourcesPolicy, $types);

        $this->unnamedSourcesPolicy = $unnamedSourcesPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getVerificationFactCheckingPolicy()
    {
        return $this->verificationFactCheckingPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $verificationFactCheckingPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVerificationFactCheckingPolicy($verificationFactCheckingPolicy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $verificationFactCheckingPolicy = self::checkTypes($verificationFactCheckingPolicy, $types);

        $this->verificationFactCheckingPolicy = $verificationFactCheckingPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getEthicsPolicy()
    {
        return $this->ethicsPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $ethicsPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEthicsPolicy($ethicsPolicy)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $ethicsPolicy = self::checkTypes($ethicsPolicy, $types);

        $this->ethicsPolicy = $ethicsPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\AboutPage
     */
    public function getOwnershipFundingInfo()
    {
        return $this->ownershipFundingInfo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\AboutPage $ownershipFundingInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOwnershipFundingInfo($ownershipFundingInfo)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\AboutPage",
        );

        $ownershipFundingInfo = self::checkTypes($ownershipFundingInfo, $types);

        $this->ownershipFundingInfo = $ownershipFundingInfo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Article|string
     */
    public function getDiversityStaffingReport()
    {
        return $this->diversityStaffingReport;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Article|string $diversityStaffingReport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiversityStaffingReport($diversityStaffingReport)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Article",
            "string",
        );

        $diversityStaffingReport = self::checkTypes($diversityStaffingReport, $types);

        $this->diversityStaffingReport = $diversityStaffingReport;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getMissionCoveragePrioritiesPolicy()
    {
        return $this->missionCoveragePrioritiesPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $missionCoveragePrioritiesPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMissionCoveragePrioritiesPolicy($missionCoveragePrioritiesPolicy)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $missionCoveragePrioritiesPolicy = self::checkTypes($missionCoveragePrioritiesPolicy, $types);

        $this->missionCoveragePrioritiesPolicy = $missionCoveragePrioritiesPolicy;
    }

}
