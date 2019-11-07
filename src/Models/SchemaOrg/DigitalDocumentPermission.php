<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DigitalDocumentPermission extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DigitalDocumentPermission";
    }

    /**
     * The type of permission granted the person, organization, or audience.
     *
     *
     * @var \OpenActive\Enums\DigitalDocumentPermissionType|null
     */
    protected $permissionType;

    /**
     * The person, organization, contact point, or audience that has been granted this permission.
     *
     *
     * @var Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    protected $grantee;

    /**
     * @return \OpenActive\Enums\DigitalDocumentPermissionType|null
     */
    public function getPermissionType()
    {
        return $this->permissionType;
    }

    /**
     * @param \OpenActive\Enums\DigitalDocumentPermissionType|null $permissionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPermissionType($permissionType)
    {
        $types = array(
            "\OpenActive\Enums\DigitalDocumentPermissionType",
            "null",
        );

        $permissionType = self::checkTypes($permissionType, $types);

        $this->permissionType = $permissionType;
    }

    /**
     * @return Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * @param Person|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|Organization $grantee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGrantee($grantee)
    {
        $types = array(
            "Person",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
            "Organization",
        );

        $grantee = self::checkTypes($grantee, $types);

        $this->grantee = $grantee;
    }

}
