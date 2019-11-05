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
    static public function getType()
    {
        return "schema:ProgramMembership";
    }

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
     * @var Organization|Person
     */
    protected $members;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     *
     *
     * @var Organization|Person
     */
    protected $member;

    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     *
     *
     * @var Organization
     */
    protected $hostingOrganization;

    /**
     * The program providing the membership.
     *
     *
     * @var string
     */
    protected $programName;

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
        $types = array(
            "string",
        );

        $membershipNumber = self::checkTypes($membershipNumber, $types);

        $this->membershipNumber = $membershipNumber;
    }

    /**
     * @return Organization|Person
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param Organization|Person $members
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembers($members)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $members = self::checkTypes($members, $types);

        $this->members = $members;
    }

    /**
     * @return Organization|Person
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param Organization|Person $member
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMember($member)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $member = self::checkTypes($member, $types);

        $this->member = $member;
    }

    /**
     * @return Organization
     */
    public function getHostingOrganization()
    {
        return $this->hostingOrganization;
    }

    /**
     * @param Organization $hostingOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHostingOrganization($hostingOrganization)
    {
        $types = array(
            "Organization",
        );

        $hostingOrganization = self::checkTypes($hostingOrganization, $types);

        $this->hostingOrganization = $hostingOrganization;
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
        $types = array(
            "string",
        );

        $programName = self::checkTypes($programName, $types);

        $this->programName = $programName;
    }

}
