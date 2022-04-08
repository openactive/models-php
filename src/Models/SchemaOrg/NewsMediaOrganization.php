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
            "ownershipFundingInfo" => "ownershipFundingInfo",
            "correctionsPolicy" => "correctionsPolicy",
            "diversityStaffingReport" => "diversityStaffingReport",
            "diversityPolicy" => "diversityPolicy",
            "ethicsPolicy" => "ethicsPolicy",
            "missionCoveragePrioritiesPolicy" => "missionCoveragePrioritiesPolicy",
            "actionableFeedbackPolicy" => "actionableFeedbackPolicy",
            "masthead" => "masthead",
            "unnamedSourcesPolicy" => "unnamedSourcesPolicy",
            "verificationFactCheckingPolicy" => "verificationFactCheckingPolicy",
            "noBylinesPolicy" => "noBylinesPolicy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AboutPage|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $ownershipFundingInfo;

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $correctionsPolicy;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Article
     */
    protected $diversityStaffingReport;

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $diversityPolicy;

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $ethicsPolicy;

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $missionCoveragePrioritiesPolicy;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $actionableFeedbackPolicy;

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $masthead;

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $unnamedSourcesPolicy;

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $verificationFactCheckingPolicy;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $noBylinesPolicy;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AboutPage|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getOwnershipFundingInfo()
    {
        return $this->ownershipFundingInfo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AboutPage|\OpenActive\Models\SchemaOrg\CreativeWork $ownershipFundingInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOwnershipFundingInfo($ownershipFundingInfo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\AboutPage",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $ownershipFundingInfo = self::checkTypes($ownershipFundingInfo, $types);

        $this->ownershipFundingInfo = $ownershipFundingInfo;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getCorrectionsPolicy()
    {
        return $this->correctionsPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $correctionsPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCorrectionsPolicy($correctionsPolicy)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $correctionsPolicy = self::checkTypes($correctionsPolicy, $types);

        $this->correctionsPolicy = $correctionsPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Article
     */
    public function getDiversityStaffingReport()
    {
        return $this->diversityStaffingReport;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Article $diversityStaffingReport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiversityStaffingReport($diversityStaffingReport)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Article",
        ];

        $diversityStaffingReport = self::checkTypes($diversityStaffingReport, $types);

        $this->diversityStaffingReport = $diversityStaffingReport;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getDiversityPolicy()
    {
        return $this->diversityPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $diversityPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiversityPolicy($diversityPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $diversityPolicy = self::checkTypes($diversityPolicy, $types);

        $this->diversityPolicy = $diversityPolicy;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $ethicsPolicy = self::checkTypes($ethicsPolicy, $types);

        $this->ethicsPolicy = $ethicsPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getMissionCoveragePrioritiesPolicy()
    {
        return $this->missionCoveragePrioritiesPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $missionCoveragePrioritiesPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMissionCoveragePrioritiesPolicy($missionCoveragePrioritiesPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $missionCoveragePrioritiesPolicy = self::checkTypes($missionCoveragePrioritiesPolicy, $types);

        $this->missionCoveragePrioritiesPolicy = $missionCoveragePrioritiesPolicy;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $actionableFeedbackPolicy = self::checkTypes($actionableFeedbackPolicy, $types);

        $this->actionableFeedbackPolicy = $actionableFeedbackPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getMasthead()
    {
        return $this->masthead;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $masthead
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMasthead($masthead)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $masthead = self::checkTypes($masthead, $types);

        $this->masthead = $masthead;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getUnnamedSourcesPolicy()
    {
        return $this->unnamedSourcesPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $unnamedSourcesPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $unnamedSourcesPolicy = self::checkTypes($unnamedSourcesPolicy, $types);

        $this->unnamedSourcesPolicy = $unnamedSourcesPolicy;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getVerificationFactCheckingPolicy()
    {
        return $this->verificationFactCheckingPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $verificationFactCheckingPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVerificationFactCheckingPolicy($verificationFactCheckingPolicy)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $verificationFactCheckingPolicy = self::checkTypes($verificationFactCheckingPolicy, $types);

        $this->verificationFactCheckingPolicy = $verificationFactCheckingPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getNoBylinesPolicy()
    {
        return $this->noBylinesPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $noBylinesPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNoBylinesPolicy($noBylinesPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $noBylinesPolicy = self::checkTypes($noBylinesPolicy, $types);

        $this->noBylinesPolicy = $noBylinesPolicy;
    }

}
