<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CookAction extends \OpenActive\Models\SchemaOrg\CreateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CookAction";
    }

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\FoodEvent
     */
    protected $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Recipe
     */
    protected $recipe;

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     *
     *
     * @var Place|\OpenActive\Models\SchemaOrg\FoodEstablishment
     */
    protected $foodEstablishment;

    /**
     * @return \OpenActive\Models\SchemaOrg\FoodEvent
     */
    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\FoodEvent $foodEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFoodEvent($foodEvent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\FoodEvent",
        );

        $foodEvent = self::checkTypes($foodEvent, $types);

        $this->foodEvent = $foodEvent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Recipe $recipe
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipe($recipe)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Recipe",
        );

        $recipe = self::checkTypes($recipe, $types);

        $this->recipe = $recipe;
    }

    /**
     * @return Place|\OpenActive\Models\SchemaOrg\FoodEstablishment
     */
    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    /**
     * @param Place|\OpenActive\Models\SchemaOrg\FoodEstablishment $foodEstablishment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFoodEstablishment($foodEstablishment)
    {
        $types = array(
            "Place",
            "\OpenActive\Models\SchemaOrg\FoodEstablishment",
        );

        $foodEstablishment = self::checkTypes($foodEstablishment, $types);

        $this->foodEstablishment = $foodEstablishment;
    }

}
