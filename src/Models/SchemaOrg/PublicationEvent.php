<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PublicationEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PublicationEvent";
    }

    public static function fieldList() {
        $fields = [
            "publishedBy" => "publishedBy",
            "free" => "free",
            "publishedOn" => "publishedOn",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An agent associated with the publication event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $publishedBy;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var bool|null
     */
    protected $free;

    /**
     * A broadcast service associated with the publication event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastService|string
     */
    protected $publishedOn;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getPublishedBy()
    {
        return $this->publishedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $publishedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishedBy($publishedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $publishedBy = self::checkTypes($publishedBy, $types);

        $this->publishedBy = $publishedBy;
    }

    /**
     * @return bool|null
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * @param bool|null $free
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFree($free)
    {
        $types = [
            "bool",
            "null",
        ];

        $free = self::checkTypes($free, $types);

        $this->free = $free;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BroadcastService|string
     */
    public function getPublishedOn()
    {
        return $this->publishedOn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastService|string $publishedOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishedOn($publishedOn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BroadcastService",
            "string",
        ];

        $publishedOn = self::checkTypes($publishedOn, $types);

        $this->publishedOn = $publishedOn;
    }

}
