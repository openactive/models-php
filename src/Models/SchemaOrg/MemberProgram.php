<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MemberProgram extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MemberProgram";
    }

    public static function fieldList() {
        $fields = [
            "hasTiers" => "hasTiers",
            "hostingOrganization" => "hostingOrganization",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The tiers of a member program.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MemberProgramTier|string
     */
    protected $hasTiers;

    /**
     * The Organization (airline, travelers' club, retailer, etc.) the membership is made with or which offers the  MemberProgram.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $hostingOrganization;

    /**
     * @return \OpenActive\Models\SchemaOrg\MemberProgramTier|string
     */
    public function getHasTiers()
    {
        return $this->hasTiers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MemberProgramTier|string $hasTiers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasTiers($hasTiers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MemberProgramTier",
            "string",
        ];

        $hasTiers = self::checkTypes($hasTiers, $types);

        $this->hasTiers = $hasTiers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getHostingOrganization()
    {
        return $this->hostingOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $hostingOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHostingOrganization($hostingOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $hostingOrganization = self::checkTypes($hostingOrganization, $types);

        $this->hostingOrganization = $hostingOrganization;
    }

}
