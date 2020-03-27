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
            "publishedOn" => "publishedOn",
            "free" => "free",
            "isAccessibleForFree" => "isAccessibleForFree",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A broadcast service associated with the publication event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BroadcastService
     */
    protected $publishedOn;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var null|bool
     */
    protected $free;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var null|bool
     */
    protected $isAccessibleForFree;

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\BroadcastService",
        );

        $publishedOn = self::checkTypes($publishedOn, $types);

        $this->publishedOn = $publishedOn;
    }

    /**
     * @return null|bool
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * @param null|bool $free
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFree($free)
    {
        $types = array(
            "null",
            "bool",
        );

        $free = self::checkTypes($free, $types);

        $this->free = $free;
    }

    /**
     * @return null|bool
     */
    public function getIsAccessibleForFree()
    {
        return $this->isAccessibleForFree;
    }

    /**
     * @param null|bool $isAccessibleForFree
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAccessibleForFree($isAccessibleForFree)
    {
        $types = array(
            "null",
            "bool",
        );

        $isAccessibleForFree = self::checkTypes($isAccessibleForFree, $types);

        $this->isAccessibleForFree = $isAccessibleForFree;
    }

}
