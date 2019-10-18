<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class PlanAction extends \OpenActive\Models\SchemaOrg\OrganizeAction
{
    /**
     * The time the object is scheduled to.
     *
     *
     * @var DateTime|null
     */
    protected $scheduledTime;

    /**
     * @return DateTime|null
     */
    public function getScheduledTime()
    {
        return $this->scheduledTime;
    }

    /**
     * @param DateTime|null $scheduledTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setScheduledTime($scheduledTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $scheduledTime = self::checkTypes($scheduledTime, $types);

        $this->scheduledTime = $scheduledTime;
    }

}
