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

    public static function fieldList() {
        $fields = [
            "permissionType" => "permissionType",
            "grantee" => "grantee",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The type of permission granted the person, organization, or audience.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType|null
     */
    protected $permissionType;

    /**
     * The person, organization, contact point, or audience that has been granted this permission.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $grantee;

    /**
     * @return \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType|null
     */
    public function getPermissionType()
    {
        return $this->permissionType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType|null $permissionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPermissionType($permissionType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType",
            "null",
        ];

        $permissionType = self::checkTypes($permissionType, $types);

        $this->permissionType = $permissionType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person|string $grantee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGrantee($grantee)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $grantee = self::checkTypes($grantee, $types);

        $this->grantee = $grantee;
    }

}
