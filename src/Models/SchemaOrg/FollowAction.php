<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FollowAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:FollowAction";
    }

    /**
     * A sub property of object. The person or organization being followed.
     *
     *
     * @var Person|Organization
     */
    protected $followee;

    /**
     * @return Person|Organization
     */
    public function getFollowee()
    {
        return $this->followee;
    }

    /**
     * @param Person|Organization $followee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFollowee($followee)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $followee = self::checkTypes($followee, $types);

        $this->followee = $followee;
    }

}
