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
            "menuAddOn" => "menuAddOn",
            "offers" => "offers",
            "nutrition" => "nutrition",
            "suitableForDiet" => "suitableForDiet",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MenuSection|\OpenActive\Models\SchemaOrg\MenuItem|string
     */
    protected $menuAddOn;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $offers;

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
     * @return \OpenActive\Models\SchemaOrg\MenuSection|\OpenActive\Models\SchemaOrg\MenuItem|string
     */
    public function getMenuAddOn()
    {
        return $this->menuAddOn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MenuSection|\OpenActive\Models\SchemaOrg\MenuItem|string $menuAddOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMenuAddOn($menuAddOn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MenuSection",
            "\OpenActive\Models\SchemaOrg\MenuItem",
            "string",
        ];

        $menuAddOn = self::checkTypes($menuAddOn, $types);

        $this->menuAddOn = $menuAddOn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
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

}
