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

    public static function fieldList() {
        $fields = [
            "broadcastSubChannel" => "broadcastSubChannel",
            "broadcastSignalModulation" => "broadcastSignalModulation",
            "broadcastFrequencyValue" => "broadcastFrequencyValue",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The subchannel used for the broadcast.
     *
     *
     * @var string
     */
    protected $broadcastSubChannel;

    /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    protected $broadcastSignalModulation;

    /**
     * The frequency in MHz for a particular broadcast.
     *
     *
     * @var Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $broadcastFrequencyValue;

    /**
     * @return string
     */
    public function getBroadcastSubChannel()
    {
        return $this->broadcastSubChannel;
    }

    /**
     * @param string $broadcastSubChannel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastSubChannel($broadcastSubChannel)
    {
        $types = [
            "string",
        ];

        $broadcastSubChannel = self::checkTypes($broadcastSubChannel, $types);

        $this->broadcastSubChannel = $broadcastSubChannel;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null
     */
    public function getBroadcastSignalModulation()
    {
        return $this->broadcastSignalModulation;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\QualitativeValue|string|null $broadcastSignalModulation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastSignalModulation($broadcastSignalModulation)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "string",
            "null",
        ];

        $broadcastSignalModulation = self::checkTypes($broadcastSignalModulation, $types);

        $this->broadcastSignalModulation = $broadcastSignalModulation;
    }

    /**
     * @return Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getBroadcastFrequencyValue()
    {
        return $this->broadcastFrequencyValue;
    }

    /**
     * @param Number|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $broadcastFrequencyValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastFrequencyValue($broadcastFrequencyValue)
    {
        $types = [
            "Number",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $broadcastFrequencyValue = self::checkTypes($broadcastFrequencyValue, $types);

        $this->broadcastFrequencyValue = $broadcastFrequencyValue;
    }

}
