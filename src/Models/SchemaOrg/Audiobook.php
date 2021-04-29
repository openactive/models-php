<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Audiobook extends \OpenActive\Models\SchemaOrg\Book
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
            "readBy" => "readBy",
            "duration" => "duration",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A person who reads (performs) the audiobook.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $readBy;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|null
     */
    protected $duration;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getReadBy()
    {
        return $this->readBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $readBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReadBy($readBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $readBy = self::checkTypes($readBy, $types);

        $this->readBy = $readBy;
    }

    /**
     * @return DateInterval|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param DateInterval|null $duration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuration($duration)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $duration = self::checkTypes($duration, $types);

        $this->duration = $duration;
    }

}
