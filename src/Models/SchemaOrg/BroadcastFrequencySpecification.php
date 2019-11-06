<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BroadcastFrequencySpecification extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BroadcastFrequencySpecification";
    }

    /**
     * The frequency in MHz for a particular broadcast.
     *
     *
     * @var QuantitativeValue|decimal|null
     */
    protected $broadcastFrequencyValue;

    /**
     * @return QuantitativeValue|decimal|null
     */
    public function getBroadcastFrequencyValue()
    {
        return $this->broadcastFrequencyValue;
    }

    /**
     * @param QuantitativeValue|decimal|null $broadcastFrequencyValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastFrequencyValue($broadcastFrequencyValue)
    {
        $types = array(
            "QuantitativeValue",
            "decimal",
            "null",
        );

        $broadcastFrequencyValue = self::checkTypes($broadcastFrequencyValue, $types);

        $this->broadcastFrequencyValue = $broadcastFrequencyValue;
    }

}
