<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProgramMembership extends \OpenActive\Models\SchemaOrg\Intangible
{
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
     * @var Person|Organization
     */
    protected $members;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     *
     *
     * @var Person|Organization
     */
    protected $member;

    /**
     * The program providing the membership.
     *
     *
     * @var string
     */
    protected $programName;

    /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     *
     *
     * @var Organization
     */
    protected $hostingOrganization;

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
     * @return Person|Organization
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param Person|Organization $members
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembers($members)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $members = self::checkTypes($members, $types);

        $this->members = $members;
    }

    /**
     * @return Person|Organization
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param Person|Organization $member
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMember($member)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $member = self::checkTypes($member, $types);

        $this->member = $member;
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

}
