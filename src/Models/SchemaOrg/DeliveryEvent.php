<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Event](https://schema.org/Event), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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

    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     *
     * @var string
     */
    protected $accessCode;

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     *
     * @var DateTime|null
     */
    protected $availableFrom;

    /**
     * After this date, the item will no longer be available for pickup.
     *
     *
     * @var DateTime|null
     */
    protected $availableThrough;

    /**
     * Method used for delivery or shipping.
     *
     *
     * @var \OpenActive\Enums\DeliveryMethod|null
     */
    protected $hasDeliveryMethod;

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
     * @return \OpenActive\Enums\DeliveryMethod|null
     */
    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\DeliveryMethod|null $hasDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $types = array(
            "\OpenActive\Enums\DeliveryMethod",
            "null",
        );

        $hasDeliveryMethod = self::checkTypes($hasDeliveryMethod, $types);

        $this->hasDeliveryMethod = $hasDeliveryMethod;
    }

}
