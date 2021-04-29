<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InteractionCounter extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InteractionCounter";
    }

    public static function fieldList() {
        $fields = [
            "userInteractionCount" => "userInteractionCount",
            "interactionService" => "interactionService",
            "interactionType" => "interactionType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     *
     *
     * @var int|null
     */
    protected $userInteractionCount;

    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SoftwareApplication|\OpenActive\Models\SchemaOrg\WebSite
     */
    protected $interactionService;

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most specific Action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Action
     */
    protected $interactionType;

    /**
     * @return int|null
     */
    public function getUserInteractionCount()
    {
        return $this->userInteractionCount;
    }

    /**
     * @param int|null $userInteractionCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUserInteractionCount($userInteractionCount)
    {
        $types = [
            "int",
            "null",
        ];

        $userInteractionCount = self::checkTypes($userInteractionCount, $types);

        $this->userInteractionCount = $userInteractionCount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SoftwareApplication|\OpenActive\Models\SchemaOrg\WebSite
     */
    public function getInteractionService()
    {
        return $this->interactionService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SoftwareApplication|\OpenActive\Models\SchemaOrg\WebSite $interactionService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionService($interactionService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
            "\OpenActive\Models\SchemaOrg\WebSite",
        ];

        $interactionService = self::checkTypes($interactionService, $types);

        $this->interactionService = $interactionService;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Action
     */
    public function getInteractionType()
    {
        return $this->interactionType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Action $interactionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionType($interactionType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Action",
        ];

        $interactionType = self::checkTypes($interactionType, $types);

        $this->interactionType = $interactionType;
    }

}
