<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FoodEstablishmentReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FoodEstablishmentReservation";
    }

    public static function fieldList() {
        $fields = [
            "startTime" => "startTime",
            "endTime" => "endTime",
            "partySize" => "partySize",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br/><br/>
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var null|string|DateTime
     */
    protected $startTime;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br/><br/>
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var null|string|DateTime
     */
    protected $endTime;

    /**
     * Number of people the reservation should accommodate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|null|int
     */
    protected $partySize;

    /**
     * @return null|string|DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param null|string|DateTime $startTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartTime($startTime)
    {
        $types = array(
            "null",
            "Time",
            "DateTime",
        );

        $startTime = self::checkTypes($startTime, $types);

        $this->startTime = $startTime;
    }

    /**
     * @return null|string|DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param null|string|DateTime $endTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndTime($endTime)
    {
        $types = array(
            "null",
            "Time",
            "DateTime",
        );

        $endTime = self::checkTypes($endTime, $types);

        $this->endTime = $endTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|null|int
     */
    public function getPartySize()
    {
        return $this->partySize;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|null|int $partySize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartySize($partySize)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
            "int",
        );

        $partySize = self::checkTypes($partySize, $types);

        $this->partySize = $partySize;
    }

}
