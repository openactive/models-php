<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowToDirection extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowToDirection";
    }

    public static function fieldList() {
        $fields = [
            "duringMedia" => "duringMedia",
            "beforeMedia" => "beforeMedia",
            "prepTime" => "prepTime",
            "performTime" => "performTime",
            "totalTime" => "totalTime",
            "supply" => "supply",
            "afterMedia" => "afterMedia",
            "tool" => "tool",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A media object representing the circumstances while performing this direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $duringMedia;

    /**
     * A media object representing the circumstances before performing this direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $beforeMedia;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var null|DateInterval
     */
    protected $prepTime;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var null|DateInterval
     */
    protected $performTime;

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var null|DateInterval
     */
    protected $totalTime;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\HowToSupply
     */
    protected $supply;

    /**
     * A media object representing the circumstances after performing this direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $afterMedia;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\HowToTool
     */
    protected $tool;

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getDuringMedia()
    {
        return $this->duringMedia;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $duringMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuringMedia($duringMedia)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        );

        $duringMedia = self::checkTypes($duringMedia, $types);

        $this->duringMedia = $duringMedia;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getBeforeMedia()
    {
        return $this->beforeMedia;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $beforeMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBeforeMedia($beforeMedia)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $beforeMedia = self::checkTypes($beforeMedia, $types);

        $this->beforeMedia = $beforeMedia;
    }

    /**
     * @return null|DateInterval
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * @param null|DateInterval $prepTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrepTime($prepTime)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $prepTime = self::checkTypes($prepTime, $types);

        $this->prepTime = $prepTime;
    }

    /**
     * @return null|DateInterval
     */
    public function getPerformTime()
    {
        return $this->performTime;
    }

    /**
     * @param null|DateInterval $performTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformTime($performTime)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $performTime = self::checkTypes($performTime, $types);

        $this->performTime = $performTime;
    }

    /**
     * @return null|DateInterval
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param null|DateInterval $totalTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalTime($totalTime)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $totalTime = self::checkTypes($totalTime, $types);

        $this->totalTime = $totalTime;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\HowToSupply
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\HowToSupply $supply
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSupply($supply)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\HowToSupply",
        );

        $supply = self::checkTypes($supply, $types);

        $this->supply = $supply;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getAfterMedia()
    {
        return $this->afterMedia;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $afterMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAfterMedia($afterMedia)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $afterMedia = self::checkTypes($afterMedia, $types);

        $this->afterMedia = $afterMedia;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\HowToTool
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\HowToTool $tool
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTool($tool)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\HowToTool",
        );

        $tool = self::checkTypes($tool, $types);

        $this->tool = $tool;
    }

}
