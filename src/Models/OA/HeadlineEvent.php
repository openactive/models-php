<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Event, which means that any of this type's properties within schema.org may also be used.
 *
 */
class HeadlineEvent extends \OpenActive\Models\OA\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "HeadlineEvent";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
