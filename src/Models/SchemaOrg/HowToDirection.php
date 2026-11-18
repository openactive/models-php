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
            "afterMedia" => "afterMedia",
            "beforeMedia" => "beforeMedia",
            "duringMedia" => "duringMedia",
            "performTime" => "performTime",
            "prepTime" => "prepTime",
            "supply" => "supply",
            "tool" => "tool",
            "totalTime" => "totalTime",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A media object representing the circumstances after performing this direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $afterMedia;

    /**
     * A media object representing the circumstances before performing this direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $beforeMedia;

    /**
     * A media object representing the circumstances while performing this direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $duringMedia;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $performTime;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $prepTime;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowToSupply|string
     */
    protected $supply;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowToTool|string
     */
    protected $tool;

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $totalTime;

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getAfterMedia()
    {
        return $this->afterMedia;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $afterMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAfterMedia($afterMedia)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $afterMedia = self::checkTypes($afterMedia, $types);

        $this->afterMedia = $afterMedia;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getBeforeMedia()
    {
        return $this->beforeMedia;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $beforeMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBeforeMedia($beforeMedia)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $beforeMedia = self::checkTypes($beforeMedia, $types);

        $this->beforeMedia = $beforeMedia;
    }

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
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $duringMedia = self::checkTypes($duringMedia, $types);

        $this->duringMedia = $duringMedia;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getPerformTime()
    {
        return $this->performTime;
    }

    /**
     * @param DateInterval|string|null $performTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformTime($performTime)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $performTime = self::checkTypes($performTime, $types);

        $this->performTime = $performTime;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * @param DateInterval|string|null $prepTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrepTime($prepTime)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $prepTime = self::checkTypes($prepTime, $types);

        $this->prepTime = $prepTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HowToSupply|string
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HowToSupply|string $supply
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSupply($supply)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HowToSupply",
            "string",
        ];

        $supply = self::checkTypes($supply, $types);

        $this->supply = $supply;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HowToTool|string
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HowToTool|string $tool
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTool($tool)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HowToTool",
            "string",
        ];

        $tool = self::checkTypes($tool, $types);

        $this->tool = $tool;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param DateInterval|string|null $totalTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalTime($totalTime)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $totalTime = self::checkTypes($totalTime, $types);

        $this->totalTime = $totalTime;
    }

}
