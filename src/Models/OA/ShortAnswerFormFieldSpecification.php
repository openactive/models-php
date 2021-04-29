<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/PropertyValueSpecification, which means that any of this type's properties within schema.org may also be used.
 *
 */
class ShortAnswerFormFieldSpecification extends \OpenActive\Models\OA\PropertyValueSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "ShortAnswerFormFieldSpecification";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
