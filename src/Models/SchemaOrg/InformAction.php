<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InformAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     *
     * @var Event
     */
    protected $event;

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = array(
            "Event",
        );

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

}
