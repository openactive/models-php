<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FoodEstablishmentReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
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
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br/><br/>
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     *
     * @var DateTime|null
     */
    protected $endTime;

    /**
     * Number of people the reservation should accommodate.
     *
     *
     * @var int|QuantitativeValue|null
     */
    protected $partySize;

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
     * @return int|QuantitativeValue|null
     */
    public function getPartySize()
    {
        return $this->partySize;
    }

    /**
     * @param int|QuantitativeValue|null $partySize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartySize($partySize)
    {
        $types = array(
            "int",
            "QuantitativeValue",
            "null",
        );

        $partySize = self::checkTypes($partySize, $types);

        $this->partySize = $partySize;
    }

}
