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
            "liveBlogUpdate" => "liveBlogUpdate",
            "coverageEndTime" => "coverageEndTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
     *
     *
     * @var DateTime|null
     */
    protected $coverageStartTime;

    /**
     * An update to the LiveBlog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BlogPosting|string
     */
    protected $liveBlogUpdate;

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     *
     *
     * @var DateTime|null
     */
    protected $coverageEndTime;

    /**
     * @return DateTime|null
     */
    public function getCoverageStartTime()
    {
        return $this->coverageStartTime;
    }

    /**
     * @param DateTime|null $coverageStartTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoverageStartTime($coverageStartTime)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $coverageStartTime = self::checkTypes($coverageStartTime, $types);

        $this->coverageStartTime = $coverageStartTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BlogPosting|string
     */
    public function getLiveBlogUpdate()
    {
        return $this->liveBlogUpdate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BlogPosting|string $liveBlogUpdate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLiveBlogUpdate($liveBlogUpdate)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BlogPosting",
            "string",
        ];

        $liveBlogUpdate = self::checkTypes($liveBlogUpdate, $types);

        $this->liveBlogUpdate = $liveBlogUpdate;
    }

    /**
     * @return DateTime|null
     */
    public function getCoverageEndTime()
    {
        return $this->coverageEndTime;
    }

    /**
     * @param DateTime|null $coverageEndTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCoverageEndTime($coverageEndTime)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $coverageEndTime = self::checkTypes($coverageEndTime, $types);

        $this->coverageEndTime = $coverageEndTime;
    }

}
