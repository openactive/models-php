<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/PriceSpecification, which means that any of this type's properties within schema.org may also be used.
 *
 */
class PriceSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PriceSpecification";
    }

    public static function fieldList() {
        $fields = [
            "openBookingPrepayment" => "openBookingPrepayment",
            "price" => "price",
            "priceCurrency" => "priceCurrency",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates if proceeding with booking requires a Customer to pay in advance, pay when attending, or have the option to do either. Values must be one of  https://openactive.io/Required,  https://openactive.io/Optional or  https://openactive.io/Unavailable.
     *
     * ```json
     * "openBookingPrepayment": "https://openactive.io/Required"
     * ```
     *
     * @var \OpenActive\Enums\RequiredStatusType|null
     */
    protected $openBookingPrepayment;

    /**
     * The total amount.
     *
     *
     * @var Number|null
     */
    protected $price;

    /**
     * The currency of the price. Specified as a 3-letter ISO 4217 value. If a  PriceSpecification has a zero price, then this property is not required. Otherwise the priceCurrency must be specified.
     *
     *
     * @var string
     */
    protected $priceCurrency;

    /**
     * @return \OpenActive\Enums\RequiredStatusType|null
     */
    public function getOpenBookingPrepayment()
    {
        return $this->openBookingPrepayment;
    }

    /**
     * @param \OpenActive\Enums\RequiredStatusType|null $openBookingPrepayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpenBookingPrepayment($openBookingPrepayment)
    {
        $types = [
            "\OpenActive\Enums\RequiredStatusType",
            "null",
        ];

        $openBookingPrepayment = self::checkTypes($openBookingPrepayment, $types);

        $this->openBookingPrepayment = $openBookingPrepayment;
    }

    /**
     * @return Number|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Number|null $price
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrice($price)
    {
        $types = [
            "Number",
            "null",
        ];

        $price = self::checkTypes($price, $types);

        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceCurrency($priceCurrency)
    {
        $types = [
            "string",
        ];

        $priceCurrency = self::checkTypes($priceCurrency, $types);

        $this->priceCurrency = $priceCurrency;
    }

}
