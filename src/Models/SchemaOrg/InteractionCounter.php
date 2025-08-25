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
            "interactionType" => "interactionType",
            "endTime" => "endTime",
            "userInteractionCount" => "userInteractionCount",
            "location" => "location",
            "interactionService" => "interactionService",
            "startTime" => "startTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most specific Action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Action|string
     */
    protected $interactionType;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $endTime;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     *
     *
     * @var int|null
     */
    protected $userInteractionCount;

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\VirtualLocation|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $location;

    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebSite|\OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    protected $interactionService;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $startTime;

    /**
     * @return \OpenActive\Models\SchemaOrg\Action|string
     */
    public function getInteractionType()
    {
        return $this->interactionType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Action|string $interactionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionType($interactionType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Action",
            "string",
        ];

        $interactionType = self::checkTypes($interactionType, $types);

        $this->interactionType = $interactionType;
    }

    /**
     * @return DateTime|string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param DateTime|string|null $endTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

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
     * @return string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\VirtualLocation|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\VirtualLocation|\OpenActive\Models\SchemaOrg\PostalAddress $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\VirtualLocation",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
        ];

        $location = self::checkTypes($location, $types);

        $this->location = $location;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebSite|\OpenActive\Models\SchemaOrg\SoftwareApplication|string
     */
    public function getInteractionService()
    {
        return $this->interactionService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebSite|\OpenActive\Models\SchemaOrg\SoftwareApplication|string $interactionService
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionService($interactionService)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebSite",
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
            "string",
        ];

        $interactionService = self::checkTypes($interactionService, $types);

        $this->interactionService = $interactionService;
    }

    /**
     * @return DateTime|string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|string|null $startTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = [
            "DateTime",
            "Time",
            "null",
        ];

        $startTime = self::checkTypes($startTime, $types);

        $this->startTime = $startTime;
    }

}
