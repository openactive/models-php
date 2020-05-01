<?php

namespace OpenActive\Models\OA;

/**
 * 
 * ## **Error Use Case**
 * The available capacity required to book a specific Opportunity is reserved by a lease held by another Customer.  If the `OrderItem` is repeated (for multiple attendees) this error MUST only be included in the API response against the `OrderItem`s which are in excess of the capacity but which are reserved by the lease of another Customer - for example in an Opportunity with a `remainingAttendeeCapacity` of 3, with 1 additional space held by another lease, then for an `OrderQuote` with 9 `OrderItem`s related to it, this error would only be emitted against 1 of the `OrderItem`s, with `OpportunityHasInsufficientCapacityError` emitted against the other 5 of the `OrderItem`s. This helps a Customer to know whether they should try again.
 * 
 *
 */
class OpportunityCapacityIsReservedByLeaseError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OpportunityCapacityIsReservedByLeaseError";
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
     * "name": "The available capacity required to book a specific Opportunity is reserved by a lease held by another Customer."
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
        $types = array(
            "string",
        );

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
        $types = array(
            "int",
            "null",
        );

        $statusCode = self::checkTypes($statusCode, $types);

        $this->statusCode = $statusCode;
    }

}
