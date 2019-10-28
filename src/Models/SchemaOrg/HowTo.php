<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowTo extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $prepTime;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowToStep|string|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $step;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\HowToTool
     */
    protected $tool;

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\ItemList|string
     */
    protected $steps;

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
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount|string
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
     * @var \OpenActive\Models\SchemaOrg\HowToSupply|string
     */
    protected $supply;

    /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     *
     *
     * @var string|QuantitativeValue
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
     * @return \OpenActive\Models\SchemaOrg\HowToStep|string|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HowToStep|string|\OpenActive\Models\SchemaOrg\HowToSection|\OpenActive\Models\SchemaOrg\CreativeWork $step
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStep($step)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\HowToStep",
            "string",
            "\OpenActive\Models\SchemaOrg\HowToSection",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $step = self::checkTypes($step, $types);

        $this->step = $step;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\ItemList",
            "string",
        );

        $steps = self::checkTypes($steps, $types);

        $this->steps = $steps;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "string",
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\HowToSupply",
            "string",
        );

        $supply = self::checkTypes($supply, $types);

        $this->supply = $supply;
    }

    /**
     * @return string|QuantitativeValue
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * @param string|QuantitativeValue $yield
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setYield($yield)
    {
        $types = array(
            "string",
            "QuantitativeValue",
        );

        $yield = self::checkTypes($yield, $types);

        $this->yield = $yield;
    }

}
