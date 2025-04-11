<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Enumerates some common technology platforms, for use with properties such as [[actionPlatform]]. It is not supposed to be comprehensive - when a suitable code is not enumerated here, textual or URL values can be used instead. These codes are at a fairly high level and do not deal with versioning and other nuance. Additional codes can be suggested [in github](https://github.com/schemaorg/schemaorg/issues/3057). 
 *
 */
class DigitalPlatformEnumeration
{
    const MobileWebPlatform = \OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration\MobileWebPlatform::class;
    const AndroidPlatform = \OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration\AndroidPlatform::class;
    const IOSPlatform = \OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration\IOSPlatform::class;
    const DesktopWebPlatform = \OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration\DesktopWebPlatform::class;
    const GenericWebPlatform = \OpenActive\Enums\SchemaOrg\DigitalPlatformEnumeration\GenericWebPlatform::class;
}
