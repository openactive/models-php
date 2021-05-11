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
            "grantee" => "grantee",
            "permissionType" => "permissionType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The person, organization, contact point, or audience that has been granted this permission.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint
     */
    protected $grantee;

    /**
     * The type of permission granted the person, organization, or audience.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType|null
     */
    protected $permissionType;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\ContactPoint $grantee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGrantee($grantee)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
        ];

        $grantee = self::checkTypes($grantee, $types);

        $this->grantee = $grantee;
    }

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

}
