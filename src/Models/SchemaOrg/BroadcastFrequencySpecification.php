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
            "broadcastSignalModulation" => "broadcastSignalModulation",
            "broadcastFrequencyValue" => "broadcastFrequencyValue",
            "broadcastSubChannel" => "broadcastSubChannel",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    protected $broadcastSignalModulation;

    /**
     * The frequency in MHz for a particular broadcast.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    protected $broadcastFrequencyValue;

    /**
     * The subchannel used for the broadcast.
     *
     *
     * @var string
     */
    protected $broadcastSubChannel;

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null
     */
    public function getBroadcastSignalModulation()
    {
        return $this->broadcastSignalModulation;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\QualitativeValue|null $broadcastSignalModulation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastSignalModulation($broadcastSignalModulation)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "null",
        ];

        $broadcastSignalModulation = self::checkTypes($broadcastSignalModulation, $types);

        $this->broadcastSignalModulation = $broadcastSignalModulation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null
     */
    public function getBroadcastFrequencyValue()
    {
        return $this->broadcastFrequencyValue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|Number|null $broadcastFrequencyValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroadcastFrequencyValue($broadcastFrequencyValue)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "Number",
            "null",
        ];

        $broadcastFrequencyValue = self::checkTypes($broadcastFrequencyValue, $types);

        $this->broadcastFrequencyValue = $broadcastFrequencyValue;
    }

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

}
