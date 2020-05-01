<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DeliveryEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DeliveryEvent";
    }

    public static function fieldList() {
        $fields = [
            "hasDeliveryMethod" => "hasDeliveryMethod",
            "availableThrough" => "availableThrough",
            "availableFrom" => "availableFrom",
            "accessCode" => "accessCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Method used for delivery or shipping.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $hasDeliveryMethod;

    /**
     * After this date, the item will no longer be available for pickup.
     *
     *
     * @var DateTime|null
     */
    protected $availableThrough;

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     *
     * @var DateTime|null
     */
    protected $availableFrom;

    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     *
     * @var string
     */
    protected $accessCode;

    /**
     * @return \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DeliveryMethod|null $hasDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        );

        $hasDeliveryMethod = self::checkTypes($hasDeliveryMethod, $types);

        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }

    /**
     * @return DateTime|null
     */
    public function getAvailableThrough()
    {
        return $this->availableThrough;
    }

    /**
     * @param DateTime|null $availableThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableThrough($availableThrough)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $availableThrough = self::checkTypes($availableThrough, $types);

        $this->availableThrough = $availableThrough;
    }

    /**
     * @return DateTime|null
     */
    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    /**
     * @param DateTime|null $availableFrom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableFrom($availableFrom)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $availableFrom = self::checkTypes($availableFrom, $types);

        $this->availableFrom = $availableFrom;
    }

    /**
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * @param string $accessCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessCode($accessCode)
    {
        $types = array(
            "string",
        );

        $accessCode = self::checkTypes($accessCode, $types);

        $this->accessCode = $accessCode;
    }

}
