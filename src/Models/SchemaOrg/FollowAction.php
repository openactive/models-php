<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class FollowAction extends \OpenActive\Models\SchemaOrg\InteractAction
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
