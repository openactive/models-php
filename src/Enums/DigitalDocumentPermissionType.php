<?php

namespace OpenActive\Enums;

/**
 * A type of permission which can be granted for accessing a digital document.
 *
 */
class DigitalDocumentPermissionType
{
    const ReadPermission = \OpenActive\Enums\OA\DigitalDocumentPermissionType\ReadPermission::class;
    const WritePermission = \OpenActive\Enums\OA\DigitalDocumentPermissionType\WritePermission::class;
    const CommentPermission = \OpenActive\Enums\OA\DigitalDocumentPermissionType\CommentPermission::class;
}
