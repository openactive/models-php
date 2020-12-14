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
            "hostingOrganization" => "hostingOrganization",
            "member" => "member",
            "membershipNumber" => "membershipNumber",
            "programName" => "programName",
            "membershipPointsEarned" => "membershipPointsEarned",
            "members" => "members",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $hostingOrganization;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $member;

    /**
     * A unique identifier for the membership.
     *
     *
     * @var string
     */
    protected $membershipNumber;

    /**
     * The program providing the membership.
     *
     *
     * @var string
     */
    protected $programName;

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (e.g. stars, miles, etc.)
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|Number|null
     */
    protected $membershipPointsEarned;

    /**
     * A member of this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $members;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getHostingOrganization()
    {
        return $this->hostingOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $hostingOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHostingOrganization($hostingOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $hostingOrganization = self::checkTypes($hostingOrganization, $types);

        $this->hostingOrganization = $hostingOrganization;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $member
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMember($member)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $member = self::checkTypes($member, $types);

        $this->member = $member;
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
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|Number|null
     */
    public function getMembershipPointsEarned()
    {
        return $this->membershipPointsEarned;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|Number|null $membershipPointsEarned
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembershipPointsEarned($membershipPointsEarned)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "Number",
            "null",
        ];

        $membershipPointsEarned = self::checkTypes($membershipPointsEarned, $types);

        $this->membershipPointsEarned = $membershipPointsEarned;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $members
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembers($members)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $members = self::checkTypes($members, $types);

        $this->members = $members;
    }

}
