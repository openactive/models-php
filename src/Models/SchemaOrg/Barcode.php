<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [ImageObject](https://schema.org/ImageObject), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Barcode extends \OpenActive\Models\SchemaOrg\ImageObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Barcode";
    }

}
