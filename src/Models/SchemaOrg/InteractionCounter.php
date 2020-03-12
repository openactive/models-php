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
            "interactionService" => "interactionService",
            "userInteractionCount" => "userInteractionCount",
            "interactionType" => "interactionType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebSite|\OpenActive\Models\SchemaOrg\SoftwareApplication
     */
    protected $interactionService;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     *
     *
     * @var null|int
     */
    protected $userInteractionCount;

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use <a class="localLink" href="https://schema.org/LikeAction">LikeAction</a>. For down votes use <a class="localLink" href="https://schema.org/DislikeAction">DislikeAction</a>. Otherwise, use the most specific Action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Action
     */
    protected $interactionType;

    /**
     * @return \OpenActive\Models\SchemaOrg\WebSite|\OpenActive\Models\SchemaOrg\SoftwareApplication
     */
    public function getInteractionService()
    {
        return $this->interactionService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebSite|\OpenActive\Models\SchemaOrg\SoftwareApplication $interactionService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionService($interactionService)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\WebSite",
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
        );

        $interactionService = self::checkTypes($interactionService, $types);

        $this->interactionService = $interactionService;
    }

    /**
     * @return null|int
     */
    public function getUserInteractionCount()
    {
        return $this->userInteractionCount;
    }

    /**
     * @param null|int $userInteractionCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUserInteractionCount($userInteractionCount)
    {
        $types = array(
            "null",
            "int",
        );

        $userInteractionCount = self::checkTypes($userInteractionCount, $types);

        $this->userInteractionCount = $userInteractionCount;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Action",
        );

        $interactionType = self::checkTypes($interactionType, $types);

        $this->interactionType = $interactionType;
    }

}
