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

    public static function fieldList() {
        $fields = [
            "scheduledTime" => "scheduledTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The time the object is scheduled to.
     *
     *
     * @var null|DateTime
     */
    protected $scheduledTime;

    /**
     * @return null|DateTime
     */
    public function getScheduledTime()
    {
        return $this->scheduledTime;
    }

    /**
     * @param null|DateTime $scheduledTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScheduledTime($scheduledTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $scheduledTime = self::checkTypes($scheduledTime, $types);

        $this->scheduledTime = $scheduledTime;
    }

}
