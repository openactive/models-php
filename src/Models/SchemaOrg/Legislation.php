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
            "legislationPassedBy" => "legislationPassedBy",
            "legislationConsolidates" => "legislationConsolidates",
            "legislationChanges" => "legislationChanges",
            "legislationDate" => "legislationDate",
            "legislationLegalForce" => "legislationLegalForce",
            "legislationIdentifier" => "legislationIdentifier",
            "legislationTransposes" => "legislationTransposes",
            "jurisdiction" => "jurisdiction",
            "legislationResponsible" => "legislationResponsible",
            "legislationJurisdiction" => "legislationJurisdiction",
            "legislationType" => "legislationType",
            "legislationApplies" => "legislationApplies",
            "legislationDateVersion" => "legislationDateVersion",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The person or organization that originally passed or made the law : typically parliament (for primary legislation) or government (for secondary legislation). This indicates the "legal author" of the law, as opposed to its physical author.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $legislationPassedBy;

    /**
     * Indicates another legislation taken into account in this consolidated legislation (which is usually the product of an editorial process that revises the legislation). This property should be used multiple times to refer to both the original version or the previous consolidated version, and to the legislations making the change.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation|string
     */
    protected $legislationConsolidates;

    /**
     * Another legislation that this legislation changes. This encompasses the notions of amendment, replacement, correction, repeal, or other types of change. This may be a direct change (textual or non-textual amendment) or a consequential or indirect change. The property is to be used to express the existence of a change relationship between two acts rather than the existence of a consolidated version of the text that shows the result of the change. For consolidation relationships, use the <a href="/legislationConsolidates">legislationConsolidates</a> property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation|string
     */
    protected $legislationChanges;

    /**
     * The date of adoption or signature of the legislation. This is the date at which the text is officially aknowledged to be a legislation, even though it might not even be published or in force.
     *
     *
     * @var Date|null
     */
    protected $legislationDate;

    /**
     * Whether the legislation is currently in force, not in force, or partially in force.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\LegalForceStatus|string
     */
    protected $legislationLegalForce;

    /**
     * An identifier for the legislation. This can be either a string-based identifier, like the CELEX at EU level or the NOR in France, or a web-based, URL/URI identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
     *
     *
     * @var string
     */
    protected $legislationIdentifier;

    /**
     * Indicates that this legislation (or part of legislation) fulfills the objectives set by another legislation, by passing appropriate implementation measures. Typically, some legislations of European Union's member states or regions transpose European Directives. This indicates a legally binding link between the 2 legislations.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation|string
     */
    protected $legislationTransposes;

    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $jurisdiction;

    /**
     * An individual or organization that has some kind of responsibility for the legislation. Typically the ministry who is/was in charge of elaborating the legislation, or the adressee for potential questions about the legislation once it is published.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $legislationResponsible;

    /**
     * The jurisdiction from which the legislation originates.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $legislationJurisdiction;

    /**
     * The type of the legislation. Examples of values are "law", "act", "directive", "decree", "regulation", "statutory instrument", "loi organique", "règlement grand-ducal", etc., depending on the country.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $legislationType;

    /**
     * Indicates that this legislation (or part of a legislation) somehow transfers another legislation in a different legislative context. This is an informative link, and it has no legal value. For legally-binding links of transposition, use the <a href="/legislationTransposes">legislationTransposes</a> property. For example an informative consolidated law of a European Union's member state "applies" the consolidated version of the European Directive implemented in it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Legislation|string
     */
    protected $legislationApplies;

    /**
     * The point-in-time at which the provided description of the legislation is valid (e.g. : when looking at the law on the 2016-04-07 (= dateVersion), I get the consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
     *
     *
     * @var Date|null
     */
    protected $legislationDateVersion;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getLegislationPassedBy()
    {
        return $this->legislationPassedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $legislationPassedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationPassedBy($legislationPassedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $legislationPassedBy = self::checkTypes($legislationPassedBy, $types);

        $this->legislationPassedBy = $legislationPassedBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation|string
     */
    public function getLegislationConsolidates()
    {
        return $this->legislationConsolidates;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation|string $legislationConsolidates
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationConsolidates($legislationConsolidates)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Legislation",
            "string",
        ];

        $legislationConsolidates = self::checkTypes($legislationConsolidates, $types);

        $this->legislationConsolidates = $legislationConsolidates;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation|string
     */
    public function getLegislationChanges()
    {
        return $this->legislationChanges;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation|string $legislationChanges
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationChanges($legislationChanges)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Legislation",
            "string",
        ];

        $legislationChanges = self::checkTypes($legislationChanges, $types);

        $this->legislationChanges = $legislationChanges;
    }

    /**
     * @return Date|null
     */
    public function getLegislationDate()
    {
        return $this->legislationDate;
    }

    /**
     * @param Date|null $legislationDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationDate($legislationDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $legislationDate = self::checkTypes($legislationDate, $types);

        $this->legislationDate = $legislationDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\LegalForceStatus|string
     */
    public function getLegislationLegalForce()
    {
        return $this->legislationLegalForce;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\LegalForceStatus|string $legislationLegalForce
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationLegalForce($legislationLegalForce)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\LegalForceStatus",
            "string",
        ];

        $legislationLegalForce = self::checkTypes($legislationLegalForce, $types);

        $this->legislationLegalForce = $legislationLegalForce;
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
        $types = [
            "string",
        ];

        $legislationIdentifier = self::checkTypes($legislationIdentifier, $types);

        $this->legislationIdentifier = $legislationIdentifier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation|string
     */
    public function getLegislationTransposes()
    {
        return $this->legislationTransposes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation|string $legislationTransposes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationTransposes($legislationTransposes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Legislation",
            "string",
        ];

        $legislationTransposes = self::checkTypes($legislationTransposes, $types);

        $this->legislationTransposes = $legislationTransposes;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea|string $jurisdiction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJurisdiction($jurisdiction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $jurisdiction = self::checkTypes($jurisdiction, $types);

        $this->jurisdiction = $jurisdiction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getLegislationResponsible()
    {
        return $this->legislationResponsible;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $legislationResponsible
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationResponsible($legislationResponsible)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $legislationResponsible = self::checkTypes($legislationResponsible, $types);

        $this->legislationResponsible = $legislationResponsible;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $legislationJurisdiction = self::checkTypes($legislationJurisdiction, $types);

        $this->legislationJurisdiction = $legislationJurisdiction;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "string",
        ];

        $legislationType = self::checkTypes($legislationType, $types);

        $this->legislationType = $legislationType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Legislation|string
     */
    public function getLegislationApplies()
    {
        return $this->legislationApplies;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Legislation|string $legislationApplies
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationApplies($legislationApplies)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Legislation",
            "string",
        ];

        $legislationApplies = self::checkTypes($legislationApplies, $types);

        $this->legislationApplies = $legislationApplies;
    }

    /**
     * @return Date|null
     */
    public function getLegislationDateVersion()
    {
        return $this->legislationDateVersion;
    }

    /**
     * @param Date|null $legislationDateVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationDateVersion($legislationDateVersion)
    {
        $types = [
            "Date",
            "null",
        ];

        $legislationDateVersion = self::checkTypes($legislationDateVersion, $types);

        $this->legislationDateVersion = $legislationDateVersion;
    }

}
