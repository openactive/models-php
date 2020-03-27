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
            "steps" => "steps",
            "prepTime" => "prepTime",
            "step" => "step",
            "performTime" => "performTime",
            "estimatedCost" => "estimatedCost",
            "totalTime" => "totalTime",
            "supply" => "supply",
            "tool" => "tool",
            "yield" => "yield",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $steps;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var null|DateInterval
     */
    protected $prepTime;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToStep|string
     */
    protected $step;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var null|DateInterval
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
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\HowToTool
     */
    protected $tool;

    /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $yield;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\ItemList
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string|\OpenActive\Models\SchemaOrg\ItemList $steps
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSteps($steps)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
            "\OpenActive\Models\SchemaOrg\ItemList",
        );

        $steps = self::checkTypes($steps, $types);

        $this->steps = $steps;
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
     * @return \OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToStep|string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\HowToStep|string $step
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStep($step)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\HowToSection",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\HowToStep",
            "string",
        );

        $step = self::checkTypes($step, $types);

        $this->step = $step;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $yield = self::checkTypes($yield, $types);

        $this->yield = $yield;
    }

}
