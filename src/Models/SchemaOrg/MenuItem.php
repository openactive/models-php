<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MenuItem extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MenuItem";
    }

    public static function fieldList() {
        $fields = [
            "suitableForDiet" => "suitableForDiet",
            "offers" => "offers",
            "nutrition" => "nutrition",
            "menuAddOn" => "menuAddOn",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\RestrictedDiet|null
     */
    protected $suitableForDiet;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * Nutrition information about the recipe or menu item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\NutritionInformation
     */
    protected $nutrition;

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MenuSection|\OpenActive\Models\SchemaOrg\MenuItem
     */
    protected $menuAddOn;

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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\RestrictedDiet",
            "null",
        );

        $suitableForDiet = self::checkTypes($suitableForDiet, $types);

        $this->suitableForDiet = $suitableForDiet;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\NutritionInformation
     */
    public function getNutrition()
    {
        return $this->nutrition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\NutritionInformation $nutrition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNutrition($nutrition)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\NutritionInformation",
        );

        $nutrition = self::checkTypes($nutrition, $types);

        $this->nutrition = $nutrition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MenuSection|\OpenActive\Models\SchemaOrg\MenuItem
     */
    public function getMenuAddOn()
    {
        return $this->menuAddOn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MenuSection|\OpenActive\Models\SchemaOrg\MenuItem $menuAddOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMenuAddOn($menuAddOn)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MenuSection",
            "\OpenActive\Models\SchemaOrg\MenuItem",
        );

        $menuAddOn = self::checkTypes($menuAddOn, $types);

        $this->menuAddOn = $menuAddOn;
    }

}
