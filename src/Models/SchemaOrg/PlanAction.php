<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PlanAction extends \OpenActive\Models\SchemaOrg\OrganizeAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PlanAction";
    }

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
