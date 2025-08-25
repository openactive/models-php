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
            "membershipPointsEarned" => "membershipPointsEarned",
            "programName" => "programName",
            "membershipNumber" => "membershipNumber",
            "program" => "program",
            "member" => "member",
            "hostingOrganization" => "hostingOrganization",
            "members" => "members",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $membershipPointsEarned;

    /**
     * The program providing the membership. It is preferable to use [:program](https://schema.org/program) instead.
     *
     *
     * @var string
     */
    protected $programName;

    /**
     * A unique identifier for the membership.
     *
     *
     * @var string
     */
    protected $membershipNumber;

    /**
     * The [MemberProgram](https://schema.org/MemberProgram) associated with a [ProgramMembership](https://schema.org/ProgramMembership).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MemberProgram|string
     */
    protected $program;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $member;

    /**
     * The Organization (airline, travelers' club, retailer, etc.) the membership is made with or which offers the  MemberProgram.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $hostingOrganization;

    /**
     * A member of this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $members;

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getMembershipPointsEarned()
    {
        return $this->membershipPointsEarned;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $membershipPointsEarned
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembershipPointsEarned($membershipPointsEarned)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $membershipPointsEarned = self::checkTypes($membershipPointsEarned, $types);

        $this->membershipPointsEarned = $membershipPointsEarned;
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
     * @return \OpenActive\Models\SchemaOrg\MemberProgram|string
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MemberProgram|string $program
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProgram($program)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MemberProgram",
            "string",
        ];

        $program = self::checkTypes($program, $types);

        $this->program = $program;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $member
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMember($member)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $member = self::checkTypes($member, $types);

        $this->member = $member;
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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $members
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembers($members)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $members = self::checkTypes($members, $types);

        $this->members = $members;
    }

}
