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
            "prepTime" => "prepTime",
            "steps" => "steps",
            "step" => "step",
            "tool" => "tool",
            "performTime" => "performTime",
            "estimatedCost" => "estimatedCost",
            "totalTime" => "totalTime",
            "supply" => "supply",
            "yield" => "yield",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $prepTime;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $steps;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\HowToStep
     */
    protected $step;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowToTool|string
     */
    protected $tool;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $performTime;

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $estimatedCost;

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var DateInterval|null
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
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $yield;

    /**
     * @return DateInterval|null
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * @param DateInterval|null $prepTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrepTime($prepTime)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $prepTime = self::checkTypes($prepTime, $types);

        $this->prepTime = $prepTime;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList $steps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteps($steps)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\ItemList",
        );

        $steps = self::checkTypes($steps, $types);

        $this->steps = $steps;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\HowToStep
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\HowToStep $step
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStep($step)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
            "\OpenActive\Models\SchemaOrg\HowToSection",
            "\OpenActive\Models\SchemaOrg\HowToStep",
        );

        $step = self::checkTypes($step, $types);

        $this->step = $step;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\HowToTool",
            "string",
        );

        $tool = self::checkTypes($tool, $types);

        $this->tool = $tool;
    }

    /**
     * @return DateInterval|null
     */
    public function getPerformTime()
    {
        return $this->performTime;
    }

    /**
     * @param DateInterval|null $performTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformTime($performTime)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $performTime = self::checkTypes($performTime, $types);

        $this->performTime = $performTime;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $estimatedCost = self::checkTypes($estimatedCost, $types);

        $this->estimatedCost = $estimatedCost;
    }

    /**
     * @return DateInterval|null
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param DateInterval|null $totalTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalTime($totalTime)
    {
        $types = array(
            "DateInterval",
            "null",
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        );

        $yield = self::checkTypes($yield, $types);

        $this->yield = $yield;
    }

}
