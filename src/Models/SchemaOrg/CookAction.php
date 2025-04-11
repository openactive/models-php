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

    public static function fieldList() {
        $fields = [
            "foodEstablishment" => "foodEstablishment",
            "foodEvent" => "foodEvent",
            "recipe" => "recipe",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\FoodEstablishment|string
     */
    protected $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\FoodEvent|string
     */
    protected $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Recipe|string
     */
    protected $recipe;

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\FoodEstablishment|string
     */
    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\FoodEstablishment|string $foodEstablishment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFoodEstablishment($foodEstablishment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\FoodEstablishment",
            "string",
        ];

        $foodEstablishment = self::checkTypes($foodEstablishment, $types);

        $this->foodEstablishment = $foodEstablishment;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\FoodEvent|string
     */
    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\FoodEvent|string $foodEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFoodEvent($foodEvent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\FoodEvent",
            "string",
        ];

        $foodEvent = self::checkTypes($foodEvent, $types);

        $this->foodEvent = $foodEvent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Recipe|string
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Recipe|string $recipe
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipe($recipe)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Recipe",
            "string",
        ];

        $recipe = self::checkTypes($recipe, $types);

        $this->recipe = $recipe;
    }

}
