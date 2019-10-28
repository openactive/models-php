<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Action extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * The result produced in the action. e.g. John wrote <em>a book</em>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $result;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br/><br/>
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|null
     */
    protected $startTime;

    /**
     * Indicates the current disposition of the Action.
     *
     *
     * @var Schema.NET.ActionStatusType|null
     */
    protected $actionStatus;

    /**
     * Indicates a target EntryPoint for an Action.
     *
     *
     * @var EntryPoint
     */
    protected $target;

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. <em>John</em> wrote a book.
     *
     *
     * @var Organization|Person
     */
    protected $agent;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br/><br/>
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|null
     */
    protected $endTime;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with <em>a pen</em>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $instrument;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a book with <em>Steve</em>.
     *
     *
     * @var Organization|Person
     */
    protected $participant;

    /**
     * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read <em>a book</em>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $object;

    /**
     * For failed actions, more information on the cause of the failure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $error;

    /**
     * The location of for example where the event is happening, an organization is located, or where an action takes place.
     *
     *
     * @var Place|string|PostalAddress
     */
    protected $location;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $result
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setResult($result)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $result = self::checkTypes($result, $types);

        $this->result = $result;
    }

    /**
     * @return DateTime|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|null $startTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $startTime = self::checkTypes($startTime, $types);

        $this->startTime = $startTime;
    }

    /**
     * @return Schema.NET.ActionStatusType|null
     */
    public function getActionStatus()
    {
        return $this->actionStatus;
    }

    /**
     * @param Schema.NET.ActionStatusType|null $actionStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionStatus($actionStatus)
    {
        $types = array(
            "Schema.NET.ActionStatusType",
            "null",
        );

        $actionStatus = self::checkTypes($actionStatus, $types);

        $this->actionStatus = $actionStatus;
    }

    /**
     * @return EntryPoint
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param EntryPoint $target
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTarget($target)
    {
        $types = array(
            "EntryPoint",
        );

        $target = self::checkTypes($target, $types);

        $this->target = $target;
    }

    /**
     * @return Organization|Person
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param Organization|Person $agent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAgent($agent)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $agent = self::checkTypes($agent, $types);

        $this->agent = $agent;
    }

    /**
     * @return DateTime|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param DateTime|null $endTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $instrument
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInstrument($instrument)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $instrument = self::checkTypes($instrument, $types);

        $this->instrument = $instrument;
    }

    /**
     * @return Organization|Person
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param Organization|Person $participant
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParticipant($participant)
    {
        $types = array(
            "Organization",
            "Person",
        );

        $participant = self::checkTypes($participant, $types);

        $this->participant = $participant;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $object
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObject($object)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $object = self::checkTypes($object, $types);

        $this->object = $object;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $error
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setError($error)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $error = self::checkTypes($error, $types);

        $this->error = $error;
    }

    /**
     * @return Place|string|PostalAddress
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Place|string|PostalAddress $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = array(
            "Place",
            "string",
            "PostalAddress",
        );

        $location = self::checkTypes($location, $types);

        $this->location = $location;
    }

}
