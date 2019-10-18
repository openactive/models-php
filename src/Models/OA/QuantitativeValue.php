<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [QuantitativeValue](https://schema.org/QuantitativeValue), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class QuantitativeValue extends \OpenActive\Models\SchemaOrg\QuantitativeValue
{
    /**
     * The maximum value.
     *
     * ```json
     * "maxValue": 60
     * ```
     *
     * @var int|null
     */
    protected $maxValue;

    /**
     * The minimum value.
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = array(
            "int",
            "null",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = array(
            "int",
            "null",
        );

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

}
