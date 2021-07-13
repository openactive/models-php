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
    public static function getType()
    {
        return "schema:FollowAction";
    }

    public static function fieldList() {
        $fields = [
            "followee" => "followee",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of object. The person or organization being followed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $followee;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFollowee()
    {
        return $this->followee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $followee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFollowee($followee)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $followee = self::checkTypes($followee, $types);

        $this->followee = $followee;
    }

}
