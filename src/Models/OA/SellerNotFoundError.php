<?php

namespace OpenActive\Models\OA;

/**
 * 
 * ## **Error Use Case**
 * The `@id` of the `seller` included in the request was not found within the Booking System.
 * 
 *
 */
class SellerNotFoundError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "SellerNotFoundError";
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
     * "name": "The '@id' of the 'seller' included in the request was not found within the Booking System."
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * Must always be present and set to ```json
     * "statusCode": 500
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
