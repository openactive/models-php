<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LeaveAction extends \OpenActive\Models\SchemaOrg\InteractAction
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
     * @throws \Exception If the provided argument is not of a supported type.
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
