<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InstantaneousEvent extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InstantaneousEvent";
    }

    public static function fieldList() {
        $fields = [
            "data" => "data",
            "source" => "source",
            "timestamp" => "timestamp",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Data associated with the event, like for instance a log message.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $data;

    /**
     * The source or cause of the event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $source;

    /**
     * The instant the event occured.
     *
     *
     * @var DateTime|null
     */
    protected $timestamp;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $data
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setData($data)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $data = self::checkTypes($data, $types);

        $this->data = $data;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $source
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSource($source)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $source = self::checkTypes($source, $types);

        $this->source = $source;
    }

    /**
     * @return DateTime|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param DateTime|null $timestamp
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimestamp($timestamp)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $timestamp = self::checkTypes($timestamp, $types);

        $this->timestamp = $timestamp;
    }

}
