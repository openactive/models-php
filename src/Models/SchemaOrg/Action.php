<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Action extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Action";
    }

    public static function fieldList() {
        $fields = [
            "actionProcess" => "actionProcess",
            "result" => "result",
            "endTime" => "endTime",
            "agent" => "agent",
            "error" => "error",
            "location" => "location",
            "actionStatus" => "actionStatus",
            "startTime" => "startTime",
            "target" => "target",
            "participant" => "participant",
            "instrument" => "instrument",
            "provider" => "provider",
            "object" => "object",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Description of the process by which the action was performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowTo|string
     */
    protected $actionProcess;

    /**
     * The result produced in the action. E.g. John wrote *a book*.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $result;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $endTime;

    /**
     * The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $agent;

    /**
     * For failed actions, more information on the cause of the failure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $error;

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\VirtualLocation|\OpenActive\Models\SchemaOrg\PostalAddress
     */
    protected $location;

    /**
     * Indicates the current disposition of the Action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ActionStatusType|string
     */
    protected $actionStatus;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|string|null
     */
    protected $startTime;

    /**
     * Indicates a target EntryPoint, or url, for an Action.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EntryPoint
     */
    protected $target;

    /**
     * Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $participant;

    /**
     * The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $instrument;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $provider;

    /**
     * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). E.g. John read *a book*.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $object;

    /**
     * @return \OpenActive\Models\SchemaOrg\HowTo|string
     */
    public function getActionProcess()
    {
        return $this->actionProcess;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HowTo|string $actionProcess
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionProcess($actionProcess)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HowTo",
            "string",
        ];

        $actionProcess = self::checkTypes($actionProcess, $types);

        $this->actionProcess = $actionProcess;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $result
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setResult($result)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $result = self::checkTypes($result, $types);

        $this->result = $result;
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
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $agent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAgent($agent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $agent = self::checkTypes($agent, $types);

        $this->agent = $agent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $error
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setError($error)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $error = self::checkTypes($error, $types);

        $this->error = $error;
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
     * @return \OpenActive\Models\SchemaOrg\ActionStatusType|string
     */
    public function getActionStatus()
    {
        return $this->actionStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ActionStatusType|string $actionStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionStatus($actionStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ActionStatusType",
            "string",
        ];

        $actionStatus = self::checkTypes($actionStatus, $types);

        $this->actionStatus = $actionStatus;
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

    /**
     * @return string|\OpenActive\Models\SchemaOrg\EntryPoint
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EntryPoint $target
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTarget($target)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\EntryPoint",
        ];

        $target = self::checkTypes($target, $types);

        $this->target = $target;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $participant
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParticipant($participant)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $participant = self::checkTypes($participant, $types);

        $this->participant = $participant;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $instrument
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInstrument($instrument)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $instrument = self::checkTypes($instrument, $types);

        $this->instrument = $instrument;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $object
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObject($object)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $object = self::checkTypes($object, $types);

        $this->object = $object;
    }

}
