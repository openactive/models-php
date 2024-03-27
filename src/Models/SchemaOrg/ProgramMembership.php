<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProgramMembership extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ProgramMembership";
    }

    public static function fieldList() {
        $fields = [
            "programName" => "programName",
            "membershipPointsEarned" => "membershipPointsEarned",
            "hostingOrganization" => "hostingOrganization",
            "membershipNumber" => "membershipNumber",
            "members" => "members",
            "member" => "member",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The program providing the membership.
     *
     *
     * @var string
     */
    protected $programName;

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $membershipPointsEarned;

    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $hostingOrganization;

    /**
     * A unique identifier for the membership.
     *
     *
     * @var string
     */
    protected $membershipNumber;

    /**
     * A member of this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $members;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $member;

    /**
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * @param string $programName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgramName($programName)
    {
        $types = [
            "string",
        ];

        $programName = self::checkTypes($programName, $types);

        $this->programName = $programName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getMembershipPointsEarned()
    {
        return $this->membershipPointsEarned;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $membershipPointsEarned
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembershipPointsEarned($membershipPointsEarned)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $membershipPointsEarned = self::checkTypes($membershipPointsEarned, $types);

        $this->membershipPointsEarned = $membershipPointsEarned;
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

    /**
     * @return string
     */
    public function getMembershipNumber()
    {
        return $this->membershipNumber;
    }

    /**
     * @param string $membershipNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembershipNumber($membershipNumber)
    {
        $types = [
            "string",
        ];

        $membershipNumber = self::checkTypes($membershipNumber, $types);

        $this->membershipNumber = $membershipNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $members
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembers($members)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $members = self::checkTypes($members, $types);

        $this->members = $members;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $member
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMember($member)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $member = self::checkTypes($member, $types);

        $this->member = $member;
    }

}
