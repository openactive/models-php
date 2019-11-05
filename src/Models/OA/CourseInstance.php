<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [CourseInstance](https://schema.org/CourseInstance), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class CourseInstance extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "CourseInstance";
    }

}
