<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from https://schema.org/QuantitativeValue, which means that any of this type's properties within schema.org may also be used.
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
     * The maximum value, inclusive.
     *
     * ```json
     * "maxValue": 60
     * ```
     *
     * @var int|null
     */
    protected $maxValue;

    /**
     * The minimum value, inclusive.
     *
     * ```json
     * "minValue": 16
     * ```
     *
     * @var int|null
     */
    protected $minValue;

    /**
     * @return int|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param int|null $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = [
            "int",
            "null",
        ];

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
    }

    /**
     * @return int|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param int|null $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = [
            "int",
            "null",
        ];

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

}
