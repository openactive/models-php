<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class DigitalDocumentPermission extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The person, organization, contact point, or audience that has been granted this permission.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint|Organization|Person
     */
    protected $grantee;

    /**
     * The type of permission granted the person, organization, or audience.
     *
     *
     * @var Schema.NET.DigitalDocumentPermissionType|null
     */
    protected $permissionType;

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint|Organization|Person
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint|Organization|Person $grantee
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGrantee($grantee)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "Organization",
            "Person",
        );

        $grantee = self::checkTypes($grantee, $types);

        $this->grantee = $grantee;
    }

    /**
     * @return Schema.NET.DigitalDocumentPermissionType|null
     */
    public function getPermissionType()
    {
        return $this->permissionType;
    }

    /**
     * @param Schema.NET.DigitalDocumentPermissionType|null $permissionType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPermissionType($permissionType)
    {
        $types = array(
            "Schema.NET.DigitalDocumentPermissionType",
            "null",
        );

        $permissionType = self::checkTypes($permissionType, $types);

        $this->permissionType = $permissionType;
    }

}
