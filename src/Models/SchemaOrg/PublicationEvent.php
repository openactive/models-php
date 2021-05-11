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
            "free" => "free",
            "publishedOn" => "publishedOn",
            "publishedBy" => "publishedBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * @var \OpenActive\Models\SchemaOrg\BroadcastService
     */
    protected $publishedOn;

    /**
     * An agent associated with the publication event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $publishedBy;

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
     * @return \OpenActive\Models\SchemaOrg\BroadcastService
     */
    public function getPublishedOn()
    {
        return $this->publishedOn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BroadcastService $publishedOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishedOn($publishedOn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BroadcastService",
        ];

        $publishedOn = self::checkTypes($publishedOn, $types);

        $this->publishedOn = $publishedOn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getPublishedBy()
    {
        return $this->publishedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $publishedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishedBy($publishedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $publishedBy = self::checkTypes($publishedBy, $types);

        $this->publishedBy = $publishedBy;
    }

}
