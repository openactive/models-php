<?php

namespace OpenActive\Models\OA;

/**
 * 
 * ## **Error Use Case**
 * There are not enough available spaces in the Opportunity contained in the `orderedItem` property of the `OrderItem` to fulfil the number of repeated `OrderItem`s.  If the `OrderItem` is repeated (for multiple attendees) this error MUST only be included in the API response against the `OrderItem`s which are in excess of the capacity - for example in an Opportunity with a `remainingAttendeeCapacity` of 2 and with 5 `OrderItem`s related to it, this error would only be emitted against 3 of the `OrderItem`s.
 * 
 *
 */
class OpportunityHasInsufficientCapacityError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OpportunityHasInsufficientCapacityError";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "statusCode" => "statusCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A short, human-readable summary of the problem type. It should not change from occurrence to occurrence of the problem, except for purposes of localization.
     *
     * ```json
     * "name": "There are not enough available spaces in the Opportunity contained in the 'orderedItem' property of the 'OrderItem' to fulfil the number of repeated 'OrderItem's."
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * Must always be present and set to ```json
     * "statusCode": 409
     * ```
     *
     *
     * @var int|null
     */
    protected $statusCode;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = [
            "string",
        ];

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int|null $statusCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatusCode($statusCode)
    {
        $types = [
            "int",
            "null",
        ];

        $statusCode = self::checkTypes($statusCode, $types);

        $this->statusCode = $statusCode;
    }

}
