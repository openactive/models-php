<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NutritionInformation extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:NutritionInformation";
    }

    /**
     * The number of grams of saturated fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $saturatedFatContent;

    /**
     * The number of grams of fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $fatContent;

    /**
     * The number of grams of unsaturated fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $unsaturatedFatContent;

    /**
     * The number of grams of sugar.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $sugarContent;

    /**
     * The number of milligrams of cholesterol.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $cholesterolContent;

    /**
     * The number of grams of carbohydrates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $carbohydrateContent;

    /**
     * The number of grams of protein.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $proteinContent;

    /**
     * The number of milligrams of sodium.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $sodiumContent;

    /**
     * The number of grams of trans fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $transFatContent;

    /**
     * The number of grams of fiber.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass
     */
    protected $fiberContent;

    /**
     * The number of calories.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Energy
     */
    protected $calories;

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     *
     * @var string
     */
    protected $servingSize;

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getSaturatedFatContent()
    {
        return $this->saturatedFatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $saturatedFatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSaturatedFatContent($saturatedFatContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $saturatedFatContent = self::checkTypes($saturatedFatContent, $types);

        $this->saturatedFatContent = $saturatedFatContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getFatContent()
    {
        return $this->fatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $fatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFatContent($fatContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $fatContent = self::checkTypes($fatContent, $types);

        $this->fatContent = $fatContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getUnsaturatedFatContent()
    {
        return $this->unsaturatedFatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $unsaturatedFatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnsaturatedFatContent($unsaturatedFatContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $unsaturatedFatContent = self::checkTypes($unsaturatedFatContent, $types);

        $this->unsaturatedFatContent = $unsaturatedFatContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getSugarContent()
    {
        return $this->sugarContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $sugarContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSugarContent($sugarContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $sugarContent = self::checkTypes($sugarContent, $types);

        $this->sugarContent = $sugarContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getCholesterolContent()
    {
        return $this->cholesterolContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $cholesterolContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCholesterolContent($cholesterolContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $cholesterolContent = self::checkTypes($cholesterolContent, $types);

        $this->cholesterolContent = $cholesterolContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getCarbohydrateContent()
    {
        return $this->carbohydrateContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $carbohydrateContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCarbohydrateContent($carbohydrateContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $carbohydrateContent = self::checkTypes($carbohydrateContent, $types);

        $this->carbohydrateContent = $carbohydrateContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getProteinContent()
    {
        return $this->proteinContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $proteinContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProteinContent($proteinContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $proteinContent = self::checkTypes($proteinContent, $types);

        $this->proteinContent = $proteinContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getSodiumContent()
    {
        return $this->sodiumContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $sodiumContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSodiumContent($sodiumContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $sodiumContent = self::checkTypes($sodiumContent, $types);

        $this->sodiumContent = $sodiumContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getTransFatContent()
    {
        return $this->transFatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $transFatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTransFatContent($transFatContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $transFatContent = self::checkTypes($transFatContent, $types);

        $this->transFatContent = $transFatContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass
     */
    public function getFiberContent()
    {
        return $this->fiberContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass $fiberContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFiberContent($fiberContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Mass",
        );

        $fiberContent = self::checkTypes($fiberContent, $types);

        $this->fiberContent = $fiberContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Energy
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Energy $calories
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCalories($calories)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Energy",
        );

        $calories = self::checkTypes($calories, $types);

        $this->calories = $calories;
    }

    /**
     * @return string
     */
    public function getServingSize()
    {
        return $this->servingSize;
    }

    /**
     * @param string $servingSize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServingSize($servingSize)
    {
        $types = array(
            "string",
        );

        $servingSize = self::checkTypes($servingSize, $types);

        $this->servingSize = $servingSize;
    }

}
