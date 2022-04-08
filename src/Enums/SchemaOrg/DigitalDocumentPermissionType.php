<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * A type of permission which can be granted for accessing a digital document.
 *
 */
class DigitalDocumentPermissionType
{
    const CommentPermission = \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType\CommentPermission::class;
    const ReadPermission = \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType\ReadPermission::class;
    const WritePermission = \OpenActive\Enums\SchemaOrg\DigitalDocumentPermissionType\WritePermission::class;
}
