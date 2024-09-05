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
            "supply" => "supply",
            "estimatedCost" => "estimatedCost",
            "yield" => "yield",
            "tool" => "tool",
            "totalTime" => "totalTime",
            "prepTime" => "prepTime",
            "performTime" => "performTime",
            "step" => "step",
            "steps" => "steps",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowToSupply|string
     */
    protected $supply;

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $estimatedCost;

    /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $yield;

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
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $prepTime;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $performTime;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\HowToStep|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToSection
     */
    protected $step;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $steps;

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
     * @return string|\OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getEstimatedCost()
    {
        return $this->estimatedCost;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MonetaryAmount $estimatedCost
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedCost($estimatedCost)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        ];

        $estimatedCost = self::checkTypes($estimatedCost, $types);

        $this->estimatedCost = $estimatedCost;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\QuantitativeValue $yield
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYield($yield)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $yield = self::checkTypes($yield, $types);

        $this->yield = $yield;
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
     * @return string|\OpenActive\Models\SchemaOrg\HowToStep|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToSection
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\HowToStep|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToSection $step
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStep($step)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\HowToStep",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\HowToSection",
        ];

        $step = self::checkTypes($step, $types);

        $this->step = $step;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork|string $steps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteps($steps)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $steps = self::checkTypes($steps, $types);

        $this->steps = $steps;
    }

}
