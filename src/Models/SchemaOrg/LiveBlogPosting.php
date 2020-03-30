<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LiveBlogPosting extends \OpenActive\Models\SchemaOrg\BlogPosting
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LiveBlogPosting";
    }

    public static function fieldList() {
        $fields = [
            "coverageStartTime" => "coverageStartTime",
            "coverageEndTime" => "coverageEndTime",
            "liveBlogUpdate" => "liveBlogUpdate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
     *
     *
     * @var null|DateTime
     */
    protected $coverageStartTime;

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     *
     *
     * @var null|DateTime
     */
    protected $coverageEndTime;

    /**
     * An update to the LiveBlog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BlogPosting
     */
    protected $liveBlogUpdate;

    /**
     * @return null|DateTime
     */
    public function getCoverageStartTime()
    {
        return $this->coverageStartTime;
    }

    /**
     * @param null|DateTime $coverageStartTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoverageStartTime($coverageStartTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $coverageStartTime = self::checkTypes($coverageStartTime, $types);

        $this->coverageStartTime = $coverageStartTime;
    }

    /**
     * @return null|DateTime
     */
    public function getCoverageEndTime()
    {
        return $this->coverageEndTime;
    }

    /**
     * @param null|DateTime $coverageEndTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoverageEndTime($coverageEndTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $coverageEndTime = self::checkTypes($coverageEndTime, $types);

        $this->coverageEndTime = $coverageEndTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BlogPosting
     */
    public function getLiveBlogUpdate()
    {
        return $this->liveBlogUpdate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BlogPosting $liveBlogUpdate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLiveBlogUpdate($liveBlogUpdate)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BlogPosting",
        );

        $liveBlogUpdate = self::checkTypes($liveBlogUpdate, $types);

        $this->liveBlogUpdate = $liveBlogUpdate;
    }

}
