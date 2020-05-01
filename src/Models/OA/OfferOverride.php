<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Offer](https://schema.org/Offer), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class OfferOverride extends \OpenActive\Models\OA\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "OfferOverride";
    }

    public static function fieldList() {
        $fields = [
            "advanceBooking" => "advanceBooking",
            "ageRange" => "ageRange",
            "availableChannel" => "availableChannel",
            "latestCancellationBeforeStartDate" => "latestCancellationBeforeStartDate",
            "prepayment" => "prepayment",
            "validFromBeforeStartDate" => "validFromBeforeStartDate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates whether to accept this offer, a participant must book in advance, whether they must pay on attending, or have option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "advanceBooking": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $advanceBooking;

    /**
     * Indicates that an Offer is applicable to a specific age range. Specified as a QuantitativeValue with minValue and maxValue properties.
     *
     * ```json
     * "ageRange": {
     *   "@type": "QuantitativeValue",
     *   "minValue": 15,
     *   "maxValue": 60
     * }
     * ```
     *
     * @var \OpenActive\Models\OA\QuantitativeValue
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $ageRange;

    /**
     * The channels through which a booking can be made.
     *
     *
     * @var \OpenActive\Enums\AvailableChannelType[]|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $availableChannel;

    /**
     * The duration before the startDate during which this Offer may not be cancelled, given in ISO 8601 format.
     *
     *
     * @var DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $latestCancellationBeforeStartDate;

    /**
     * Indicates whether to accept this offer, a participant must pay in advance, pay when attending, or have the option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "prepayment": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $prepayment;

    /**
     * The duration before the startDate for which this Offer is valid, given in ISO 8601 format. This is a relatively-defined equivalent of schema:validFrom, to allow for Offer inheritance.
     *
     *
     * @var DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    protected $validFromBeforeStartDate;

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $advanceBooking
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setAdvanceBooking($advanceBooking)
    {
        $types = array(
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        );

        $advanceBooking = self::checkTypes($advanceBooking, $types);

        $this->advanceBooking = $advanceBooking;
    }

    /**
     * @return \OpenActive\Models\OA\QuantitativeValue
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * @param \OpenActive\Models\OA\QuantitativeValue $ageRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setAgeRange($ageRange)
    {
        $types = array(
            "\OpenActive\Models\OA\QuantitativeValue",
        );

        $ageRange = self::checkTypes($ageRange, $types);

        $this->ageRange = $ageRange;
    }

    /**
     * @return \OpenActive\Enums\AvailableChannelType[]|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getAvailableChannel()
    {
        return $this->availableChannel;
    }

    /**
     * @param \OpenActive\Enums\AvailableChannelType[]|null $availableChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setAvailableChannel($availableChannel)
    {
        $types = array(
            "\OpenActive\Enums\AvailableChannelType[]",
            "null",
        );

        $availableChannel = self::checkTypes($availableChannel, $types);

        $this->availableChannel = $availableChannel;
    }

    /**
     * @return DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getLatestCancellationBeforeStartDate()
    {
        return $this->latestCancellationBeforeStartDate;
    }

    /**
     * @param DateInterval|null $latestCancellationBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setLatestCancellationBeforeStartDate($latestCancellationBeforeStartDate)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $latestCancellationBeforeStartDate = self::checkTypes($latestCancellationBeforeStartDate, $types);

        $this->latestCancellationBeforeStartDate = $latestCancellationBeforeStartDate;
    }

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getPrepayment()
    {
        return $this->prepayment;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $prepayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setPrepayment($prepayment)
    {
        $types = array(
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        );

        $prepayment = self::checkTypes($prepayment, $types);

        $this->prepayment = $prepayment;
    }

    /**
     * @return DateInterval|null
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function getValidFromBeforeStartDate()
    {
        return $this->validFromBeforeStartDate;
    }

    /**
     * @param DateInterval|null $validFromBeforeStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     * @deprecated This property is disinherited in this type, and must not be used.
     */
    public function setValidFromBeforeStartDate($validFromBeforeStartDate)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $validFromBeforeStartDate = self::checkTypes($validFromBeforeStartDate, $types);

        $this->validFromBeforeStartDate = $validFromBeforeStartDate;
    }

}
