<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class CookAction extends \OpenActive\Models\SchemaOrg\CreateAction
{
    /**
     * A sub property of location. The specific food establishment where the action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\FoodEstablishment|Place
     */
    protected $foodEstablishment;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Recipe
     */
    protected $recipe;

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\FoodEvent
     */
    protected $foodEvent;

    /**
     * @return \OpenActive\Models\SchemaOrg\FoodEstablishment|Place
     */
    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\FoodEstablishment|Place $foodEstablishment
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFoodEstablishment($foodEstablishment)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\FoodEstablishment",
            "Place",
        );

        $foodEstablishment = self::checkTypes($foodEstablishment, $types);

        $this->foodEstablishment = $foodEstablishment;
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\FoodEvent
     */
    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\FoodEvent $foodEvent
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setFoodEvent($foodEvent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\FoodEvent",
        );

        $foodEvent = self::checkTypes($foodEvent, $types);

        $this->foodEvent = $foodEvent;
    }

}
