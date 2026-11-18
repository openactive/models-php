<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Audiobook extends \OpenActive\Models\SchemaOrg\AudioObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Audiobook";
    }

    public static function fieldList() {
        $fields = [
            "duration" => "duration",
            "readBy" => "readBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    protected $duration;

    /**
     * A person who reads (performs) the audiobook.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $readBy;

    /**
     * @return DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getReadBy()
    {
        return $this->readBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $readBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReadBy($readBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $readBy = self::checkTypes($readBy, $types);

        $this->readBy = $readBy;
    }

}
