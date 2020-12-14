<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class IndividualFacilityUse extends \OpenActive\Models\OA\FacilityUse
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "IndividualFacilityUse";
    }

    public static function fieldList() {
        $fields = [
            "aggregateFacilityUse" => "aggregateFacilityUse",
            "event" => "event",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Inverse of the oa:individualFacilityUse property. Relates an oa:IndividualFacilityUse (e.g. an opportunity to play tennis on a specific court) to a oa:FacilityUse (e.g. an opportunity to play tennis at a specific location).
     *
     *
     * @var \OpenActive\Models\OA\FacilityUse
     */
    protected $aggregateFacilityUse;

    /**
     * An array of slots of availability of this IndividualFacilityUse.
     *
     * ```json
     * "event": [
     *   {
     *     "@type": "Slot",
     *     "@id": "http://www.example.org/api/individual-facility-uses/432#/event/2018-03-01T10:00:00Z",
     *     "startDate": "2018-03-01T11:00:00Z",
     *     "endDate": "2018-03-01T11:30:00Z",
     *     "duration": "PT30M",
     *     "remainingUses": 0,
     *     "maximumUses": 1
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Slot[]
     */
    protected $event;

    /**
     * @return \OpenActive\Models\OA\FacilityUse
     */
    public function getAggregateFacilityUse()
    {
        return $this->aggregateFacilityUse;
    }

    /**
     * @param \OpenActive\Models\OA\FacilityUse $aggregateFacilityUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateFacilityUse($aggregateFacilityUse)
    {
        $types = [
            "\OpenActive\Models\OA\FacilityUse",
        ];

        $aggregateFacilityUse = self::checkTypes($aggregateFacilityUse, $types);

        $this->aggregateFacilityUse = $aggregateFacilityUse;
    }

    /**
     * @return \OpenActive\Models\OA\Slot[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \OpenActive\Models\OA\Slot[] $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = [
            "\OpenActive\Models\OA\Slot[]",
        ];

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

}
