<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowTo extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowTo";
    }

    public static function fieldList() {
        $fields = [
            "estimatedCost" => "estimatedCost",
            "performTime" => "performTime",
            "prepTime" => "prepTime",
            "step" => "step",
            "steps" => "steps",
            "supply" => "supply",
            "tool" => "tool",
            "totalTime" => "totalTime",
            "yield" => "yield",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    protected $estimatedCost;

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
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\HowToStep|string
     */
    protected $step;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList|string
     */
    protected $steps;

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
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $yield;

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount|string
     */
    public function getEstimatedCost()
    {
        return $this->estimatedCost;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount|string $estimatedCost
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedCost($estimatedCost)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
        ];

        $estimatedCost = self::checkTypes($estimatedCost, $types);

        $this->estimatedCost = $estimatedCost;
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\HowToStep|string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\HowToStep|string $step
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStep($step)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\HowToSection",
            "\OpenActive\Models\SchemaOrg\HowToStep",
            "string",
        ];

        $step = self::checkTypes($step, $types);

        $this->step = $step;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList|string
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList|string $steps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteps($steps)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\ItemList",
            "string",
        ];

        $steps = self::checkTypes($steps, $types);

        $this->steps = $steps;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $yield
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYield($yield)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $yield = self::checkTypes($yield, $types);

        $this->yield = $yield;
    }

}
