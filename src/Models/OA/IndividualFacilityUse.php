<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IndividualFacilityUse extends \OpenActive\Models\OA\FacilityUse
{
    /**
     * Inverse of the oa:individualFacilityUse property. Relates an oa:IndividualFacilityUse (e.g. an opportunity to play tennis on a specific court) to a oa:FacilityUse (e.g. an opportunity to play tennis at a specific location).
     *
     *
     * @var FacilityUse
     */
    protected $aggregateFacilityUse;

    /**
     * An array of slots of availability of this IndividualFacilityUse.
     *
     * ```json
     * "event": [
     *   {
     *     "type": "Slot",
     *     "id": "http://www.example.org/api/individual-facility-uses/432#/event/2018-03-01T10:00:00Z",
     *     "startDate": "2018-03-01T11:00:00Z",
     *     "endDate": "2018-03-01T11:30:00Z",
     *     "duration": "PT30M",
     *     "remainingUses": 0,
     *     "maximumUses": 1
     *   }
     * ]
     * ```
     *
     * @var Slot[]
     */
    protected $event;

    /**
     * @return FacilityUse
     */
    public function getAggregateFacilityUse()
    {
        return $this->aggregateFacilityUse;
    }

    /**
     * @param FacilityUse $aggregateFacilityUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateFacilityUse($aggregateFacilityUse)
    {
        $types = array(
            "FacilityUse",
        );

        $aggregateFacilityUse = self::checkTypes($aggregateFacilityUse, $types);

        $this->aggregateFacilityUse = $aggregateFacilityUse;
    }

    /**
     * @return Slot[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Slot[] $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = array(
            "Slot[]",
        );

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

}
