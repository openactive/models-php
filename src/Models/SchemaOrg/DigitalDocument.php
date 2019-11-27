<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DigitalDocument extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DigitalDocument";
    }

    public static function fieldList() {
        $fields = [
            "hasDigitalDocumentPermission" => "hasDigitalDocumentPermission",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public document, specify a grantee with an Audience with audienceType equal to "public".
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DigitalDocumentPermission
     */
    protected $hasDigitalDocumentPermission;

    /**
     * @return \OpenActive\Models\SchemaOrg\DigitalDocumentPermission
     */
    public function getHasDigitalDocumentPermission()
    {
        return $this->hasDigitalDocumentPermission;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DigitalDocumentPermission $hasDigitalDocumentPermission
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDigitalDocumentPermission($hasDigitalDocumentPermission)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DigitalDocumentPermission",
        );

        $hasDigitalDocumentPermission = self::checkTypes($hasDigitalDocumentPermission, $types);

        $this->hasDigitalDocumentPermission = $hasDigitalDocumentPermission;
    }

}
