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
            "webFeed" => "webFeed",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The URL for the feed associated with the podcast series. This is usually RSS or Atom.
     *
     *
     * @var string
     */
    protected $webFeed;

    /**
     * @return string
     */
    public function getWebFeed()
    {
        return $this->webFeed;
    }

    /**
     * @param string $webFeed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWebFeed($webFeed)
    {
        $types = array(
            "string",
        );

        $webFeed = self::checkTypes($webFeed, $types);

        $this->webFeed = $webFeed;
    }

}
