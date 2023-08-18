<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Recipe extends \OpenActive\Models\SchemaOrg\HowTo
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Recipe";
    }

    public static function fieldList() {
        $fields = [
            "recipeInstructions" => "recipeInstructions",
            "recipeCategory" => "recipeCategory",
            "nutrition" => "nutrition",
            "suitableForDiet" => "suitableForDiet",
            "recipeCuisine" => "recipeCuisine",
            "cookTime" => "cookTime",
            "recipeYield" => "recipeYield",
            "recipeIngredient" => "recipeIngredient",
            "cookingMethod" => "cookingMethod",
            "ingredients" => "ingredients",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $recipeInstructions;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     *
     * @var string
     */
    protected $recipeCategory;

    /**
     * Nutrition information about the recipe or menu item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\NutritionInformation|string
     */
    protected $nutrition;

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\RestrictedDiet|null
     */
    protected $suitableForDiet;

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     *
     *
     * @var string
     */
    protected $recipeCuisine;

    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     *
     * @var DateInterval|string|null
     */
    protected $cookTime;

    /**
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $recipeYield;

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     *
     * @var string
     */
    protected $recipeIngredient;

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     *
     * @var string
     */
    protected $cookingMethod;

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     *
     * @var string
     */
    protected $ingredients;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getRecipeInstructions()
    {
        return $this->recipeInstructions;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\CreativeWork $recipeInstructions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipeInstructions($recipeInstructions)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $recipeInstructions = self::checkTypes($recipeInstructions, $types);

        $this->recipeInstructions = $recipeInstructions;
    }

    /**
     * @return string
     */
    public function getRecipeCategory()
    {
        return $this->recipeCategory;
    }

    /**
     * @param string $recipeCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipeCategory($recipeCategory)
    {
        $types = [
            "string",
        ];

        $recipeCategory = self::checkTypes($recipeCategory, $types);

        $this->recipeCategory = $recipeCategory;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\NutritionInformation|string
     */
    public function getNutrition()
    {
        return $this->nutrition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\NutritionInformation|string $nutrition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNutrition($nutrition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\NutritionInformation",
            "string",
        ];

        $nutrition = self::checkTypes($nutrition, $types);

        $this->nutrition = $nutrition;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\RestrictedDiet|null
     */
    public function getSuitableForDiet()
    {
        return $this->suitableForDiet;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\RestrictedDiet|null $suitableForDiet
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuitableForDiet($suitableForDiet)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\RestrictedDiet",
            "null",
        ];

        $suitableForDiet = self::checkTypes($suitableForDiet, $types);

        $this->suitableForDiet = $suitableForDiet;
    }

    /**
     * @return string
     */
    public function getRecipeCuisine()
    {
        return $this->recipeCuisine;
    }

    /**
     * @param string $recipeCuisine
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipeCuisine($recipeCuisine)
    {
        $types = [
            "string",
        ];

        $recipeCuisine = self::checkTypes($recipeCuisine, $types);

        $this->recipeCuisine = $recipeCuisine;
    }

    /**
     * @return DateInterval|string|null
     */
    public function getCookTime()
    {
        return $this->cookTime;
    }

    /**
     * @param DateInterval|string|null $cookTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCookTime($cookTime)
    {
        $types = [
            "DateInterval",
            "string",
            "null",
        ];

        $cookTime = self::checkTypes($cookTime, $types);

        $this->cookTime = $cookTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getRecipeYield()
    {
        return $this->recipeYield;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $recipeYield
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipeYield($recipeYield)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $recipeYield = self::checkTypes($recipeYield, $types);

        $this->recipeYield = $recipeYield;
    }

    /**
     * @return string
     */
    public function getRecipeIngredient()
    {
        return $this->recipeIngredient;
    }

    /**
     * @param string $recipeIngredient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipeIngredient($recipeIngredient)
    {
        $types = [
            "string",
        ];

        $recipeIngredient = self::checkTypes($recipeIngredient, $types);

        $this->recipeIngredient = $recipeIngredient;
    }

    /**
     * @return string
     */
    public function getCookingMethod()
    {
        return $this->cookingMethod;
    }

    /**
     * @param string $cookingMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCookingMethod($cookingMethod)
    {
        $types = [
            "string",
        ];

        $cookingMethod = self::checkTypes($cookingMethod, $types);

        $this->cookingMethod = $cookingMethod;
    }

    /**
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param string $ingredients
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIngredients($ingredients)
    {
        $types = [
            "string",
        ];

        $ingredients = self::checkTypes($ingredients, $types);

        $this->ingredients = $ingredients;
    }

}
