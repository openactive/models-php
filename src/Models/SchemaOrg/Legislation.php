<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Legislation extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Legislation";
    }

    public static function fieldList() {
        $fields = [
            "legislationResponsible" => "legislationResponsible",
            "legislationChanges" => "legislationChanges",
            "legislationIdentifier" => "legislationIdentifier",
            "legislationPassedBy" => "legislationPassedBy",
            "legislationTransposes" => "legislationTransposes",
            "legislationConsolidates" => "legislationConsolidates",
            "legislationJurisdiction" => "legislationJurisdiction",
            "legislationDate" => "legislationDate",
            "legislationApplies" => "legislationApplies",
            "legislationLegalForce" => "legislationLegalForce",
            "legislationType" => "legislationType",
            "legislationDateVersion" => "legislationDateVersion",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An individual or organization that has some kind of responsibility for the legislation. Typically the ministry who is/was in charge of elaborating the legislation, or the adressee for potential questions about the legislation once it is published.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $legislationResponsible;

    /**
     * Another legislation that this legislation changes. This encompasses the notions of amendment, replacement, correction, repeal, or other types of change. This may be a direct change (textual or non-textual amendment) or a consequential or indirect change. The property is to be used to express the existence of a change relationship between two acts rather than the existence of a consolidated version of the text that shows the result of the change. For consolidation relationships, use the <a href="/legislationConsolidates">legislationConsolidates</a> property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation
     */
    protected $legislationChanges;

    /**
     * An identifier for the legislation. This can be either a string-based identifier, like the CELEX at EU level or the NOR in France, or a web-based, URL/URI identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
     *
     *
     * @var string
     */
    protected $legislationIdentifier;

    /**
     * The person or organization that originally passed or made the law : typically parliament (for primary legislation) or government (for secondary legislation). This indicates the "legal author" of the law, as opposed to its physical author.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $legislationPassedBy;

    /**
     * Indicates that this legislation (or part of legislation) fulfills the objectives set by another legislation, by passing appropriate implementation measures. Typically, some legislations of European Union's member states or regions transpose European Directives. This indicates a legally binding link between the 2 legislations.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation
     */
    protected $legislationTransposes;

    /**
     * Indicates another legislation taken into account in this consolidated legislation (which is usually the product of an editorial process that revises the legislation). This property should be used multiple times to refer to both the original version or the previous consolidated version, and to the legislations making the change.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation
     */
    protected $legislationConsolidates;

    /**
     * The jurisdiction from which the legislation originates.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $legislationJurisdiction;

    /**
     * The date of adoption or signature of the legislation. This is the date at which the text is officially aknowledged to be a legislation, even though it might not even be published or in force.
     *
     *
     * @var null|Date
     */
    protected $legislationDate;

    /**
     * Indicates that this legislation (or part of a legislation) somehow transfers another legislation in a different legislative context. This is an informative link, and it has no legal value. For legally-binding links of transposition, use the <a href="/legislationTransposes">legislationTransposes</a> property. For example an informative consolidated law of a European Union's member state "applies" the consolidated version of the European Directive implemented in it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation
     */
    protected $legislationApplies;

    /**
     * Whether the legislation is currently in force, not in force, or partially in force.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\LegalForceStatus|null
     */
    protected $legislationLegalForce;

    /**
     * The type of the legislation. Examples of values are "law", "act", "directive", "decree", "regulation", "statutory instrument", "loi organique", "règlement grand-ducal", etc., depending on the country.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $legislationType;

    /**
     * The point-in-time at which the provided description of the legislation is valid (e.g. : when looking at the law on the 2016-04-07 (= dateVersion), I get the consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
     *
     *
     * @var null|Date
     */
    protected $legislationDateVersion;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getLegislationResponsible()
    {
        return $this->legislationResponsible;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $legislationResponsible
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationResponsible($legislationResponsible)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $legislationResponsible = self::checkTypes($legislationResponsible, $types);

        $this->legislationResponsible = $legislationResponsible;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation
     */
    public function getLegislationChanges()
    {
        return $this->legislationChanges;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation $legislationChanges
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationChanges($legislationChanges)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Legislation",
        );

        $legislationChanges = self::checkTypes($legislationChanges, $types);

        $this->legislationChanges = $legislationChanges;
    }

    /**
     * @return string
     */
    public function getLegislationIdentifier()
    {
        return $this->legislationIdentifier;
    }

    /**
     * @param string $legislationIdentifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationIdentifier($legislationIdentifier)
    {
        $types = array(
            "string",
        );

        $legislationIdentifier = self::checkTypes($legislationIdentifier, $types);

        $this->legislationIdentifier = $legislationIdentifier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getLegislationPassedBy()
    {
        return $this->legislationPassedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $legislationPassedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationPassedBy($legislationPassedBy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $legislationPassedBy = self::checkTypes($legislationPassedBy, $types);

        $this->legislationPassedBy = $legislationPassedBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation
     */
    public function getLegislationTransposes()
    {
        return $this->legislationTransposes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation $legislationTransposes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationTransposes($legislationTransposes)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Legislation",
        );

        $legislationTransposes = self::checkTypes($legislationTransposes, $types);

        $this->legislationTransposes = $legislationTransposes;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation
     */
    public function getLegislationConsolidates()
    {
        return $this->legislationConsolidates;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation $legislationConsolidates
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationConsolidates($legislationConsolidates)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Legislation",
        );

        $legislationConsolidates = self::checkTypes($legislationConsolidates, $types);

        $this->legislationConsolidates = $legislationConsolidates;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getLegislationJurisdiction()
    {
        return $this->legislationJurisdiction;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\AdministrativeArea $legislationJurisdiction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationJurisdiction($legislationJurisdiction)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $legislationJurisdiction = self::checkTypes($legislationJurisdiction, $types);

        $this->legislationJurisdiction = $legislationJurisdiction;
    }

    /**
     * @return null|Date
     */
    public function getLegislationDate()
    {
        return $this->legislationDate;
    }

    /**
     * @param null|Date $legislationDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationDate($legislationDate)
    {
        $types = array(
            "null",
            "Date",
        );

        $legislationDate = self::checkTypes($legislationDate, $types);

        $this->legislationDate = $legislationDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation
     */
    public function getLegislationApplies()
    {
        return $this->legislationApplies;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation $legislationApplies
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationApplies($legislationApplies)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Legislation",
        );

        $legislationApplies = self::checkTypes($legislationApplies, $types);

        $this->legislationApplies = $legislationApplies;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\LegalForceStatus|null
     */
    public function getLegislationLegalForce()
    {
        return $this->legislationLegalForce;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\LegalForceStatus|null $legislationLegalForce
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationLegalForce($legislationLegalForce)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\LegalForceStatus",
            "null",
        );

        $legislationLegalForce = self::checkTypes($legislationLegalForce, $types);

        $this->legislationLegalForce = $legislationLegalForce;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    public function getLegislationType()
    {
        return $this->legislationType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|string $legislationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationType($legislationType)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "string",
        );

        $legislationType = self::checkTypes($legislationType, $types);

        $this->legislationType = $legislationType;
    }

    /**
     * @return null|Date
     */
    public function getLegislationDateVersion()
    {
        return $this->legislationDateVersion;
    }

    /**
     * @param null|Date $legislationDateVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationDateVersion($legislationDateVersion)
    {
        $types = array(
            "null",
            "Date",
        );

        $legislationDateVersion = self::checkTypes($legislationDateVersion, $types);

        $this->legislationDateVersion = $legislationDateVersion;
    }

}
