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

    public static function fieldList() {
        $fields = [
            "calories" => "calories",
            "cholesterolContent" => "cholesterolContent",
            "fatContent" => "fatContent",
            "transFatContent" => "transFatContent",
            "servingSize" => "servingSize",
            "unsaturatedFatContent" => "unsaturatedFatContent",
            "saturatedFatContent" => "saturatedFatContent",
            "carbohydrateContent" => "carbohydrateContent",
            "proteinContent" => "proteinContent",
            "sodiumContent" => "sodiumContent",
            "fiberContent" => "fiberContent",
            "sugarContent" => "sugarContent",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of calories.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Energy|string
     */
    protected $calories;

    /**
     * The number of milligrams of cholesterol.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $cholesterolContent;

    /**
     * The number of grams of fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $fatContent;

    /**
     * The number of grams of trans fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $transFatContent;

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     *
     * @var string
     */
    protected $servingSize;

    /**
     * The number of grams of unsaturated fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $unsaturatedFatContent;

    /**
     * The number of grams of saturated fat.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $saturatedFatContent;

    /**
     * The number of grams of carbohydrates.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $carbohydrateContent;

    /**
     * The number of grams of protein.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $proteinContent;

    /**
     * The number of milligrams of sodium.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $sodiumContent;

    /**
     * The number of grams of fiber.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $fiberContent;

    /**
     * The number of grams of sugar.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|string
     */
    protected $sugarContent;

    /**
     * @return \OpenActive\Models\SchemaOrg\Energy|string
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Energy|string $calories
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCalories($calories)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Energy",
            "string",
        ];

        $calories = self::checkTypes($calories, $types);

        $this->calories = $calories;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getCholesterolContent()
    {
        return $this->cholesterolContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $cholesterolContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCholesterolContent($cholesterolContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $cholesterolContent = self::checkTypes($cholesterolContent, $types);

        $this->cholesterolContent = $cholesterolContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getFatContent()
    {
        return $this->fatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $fatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFatContent($fatContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $fatContent = self::checkTypes($fatContent, $types);

        $this->fatContent = $fatContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getTransFatContent()
    {
        return $this->transFatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $transFatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTransFatContent($transFatContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $transFatContent = self::checkTypes($transFatContent, $types);

        $this->transFatContent = $transFatContent;
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
        $types = [
            "string",
        ];

        $servingSize = self::checkTypes($servingSize, $types);

        $this->servingSize = $servingSize;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getUnsaturatedFatContent()
    {
        return $this->unsaturatedFatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $unsaturatedFatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnsaturatedFatContent($unsaturatedFatContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $unsaturatedFatContent = self::checkTypes($unsaturatedFatContent, $types);

        $this->unsaturatedFatContent = $unsaturatedFatContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getSaturatedFatContent()
    {
        return $this->saturatedFatContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $saturatedFatContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSaturatedFatContent($saturatedFatContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $saturatedFatContent = self::checkTypes($saturatedFatContent, $types);

        $this->saturatedFatContent = $saturatedFatContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getCarbohydrateContent()
    {
        return $this->carbohydrateContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $carbohydrateContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCarbohydrateContent($carbohydrateContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $carbohydrateContent = self::checkTypes($carbohydrateContent, $types);

        $this->carbohydrateContent = $carbohydrateContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getProteinContent()
    {
        return $this->proteinContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $proteinContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProteinContent($proteinContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $proteinContent = self::checkTypes($proteinContent, $types);

        $this->proteinContent = $proteinContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getSodiumContent()
    {
        return $this->sodiumContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $sodiumContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSodiumContent($sodiumContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $sodiumContent = self::checkTypes($sodiumContent, $types);

        $this->sodiumContent = $sodiumContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getFiberContent()
    {
        return $this->fiberContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $fiberContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFiberContent($fiberContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $fiberContent = self::checkTypes($fiberContent, $types);

        $this->fiberContent = $fiberContent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|string
     */
    public function getSugarContent()
    {
        return $this->sugarContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|string $sugarContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSugarContent($sugarContent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "string",
        ];

        $sugarContent = self::checkTypes($sugarContent, $types);

        $this->sugarContent = $sugarContent;
    }

}
