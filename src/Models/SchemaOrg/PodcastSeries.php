<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PodcastSeries extends \OpenActive\Models\SchemaOrg\CreativeWorkSeries
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PodcastSeries";
    }

    public static function fieldList() {
        $fields = [
            "actor" => "actor",
            "webFeed" => "webFeed",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $actor;

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataFeed|string
     */
    protected $webFeed;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataFeed|string
     */
    public function getWebFeed()
    {
        return $this->webFeed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataFeed|string $webFeed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWebFeed($webFeed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataFeed",
            "string",
        ];

        $webFeed = self::checkTypes($webFeed, $types);

        $this->webFeed = $webFeed;
    }

}
