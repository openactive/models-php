<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InformAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InformAction";
    }

    public static function fieldList() {
        $fields = [
            "event" => "event",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|string
     */
    protected $event;

    /**
     * @return \OpenActive\Models\SchemaOrg\Event|string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event|string $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
            "string",
        ];

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

}
