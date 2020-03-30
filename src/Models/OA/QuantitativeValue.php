<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [QuantitativeValue](https://schema.org/QuantitativeValue), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class QuantitativeValue extends \OpenActive\Models\SchemaOrg\QuantitativeValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "QuantitativeValue";
    }

    public static function fieldList() {
        $fields = [
            "maxValue" => "maxValue",
            "minValue" => "minValue",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The maximum value.
     *
     * ```json
     * "maxValue": 60
     * ```
     *
     * @var null|int
     */
    protected $maxValue;

    /**
     * The minimum value.
     *
     * ```json
     * "minValue": 16
     * ```
     *
     * @var null|int
     */
    protected $minValue;

    /**
     * @return null|int
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param null|int $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = array(
            "null",
            "int",
        );

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
    }

    /**
     * @return null|int
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param null|int $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = array(
            "null",
            "int",
        );

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

}
