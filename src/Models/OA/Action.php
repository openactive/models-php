<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/Action, which means that any of this type's properties within schema.org may also be used.
 *
 */
class Action extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Action";
    }

    public static function fieldList() {
        $fields = [
            "object" => "object",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The object upon which the action is carried out, whose state is kept intact or changed.
     *
     * ```json
     * "object": {
     *   "@type": "SessionSeries",
     *   "@id": "https://id.booking-system.example.com/session-series/42"
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\Order|\OpenActive\Models\OA\Event
     */
    protected $object;

    /**
     * @return \OpenActive\Models\OA\Order|\OpenActive\Models\OA\Event
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \OpenActive\Models\OA\Order|\OpenActive\Models\OA\Event $object
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObject($object)
    {
        $types = [
            "\OpenActive\Models\OA\Order",
            "\OpenActive\Models\OA\Event",
        ];

        $object = self::checkTypes($object, $types);

        $this->object = $object;
    }

}
