<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FoodEstablishment extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FoodEstablishment";
    }

    public static function fieldList() {
        $fields = [
            "menu" => "menu",
            "hasMenu" => "hasMenu",
            "starRating" => "starRating",
            "servesCuisine" => "servesCuisine",
            "acceptsReservations" => "acceptsReservations",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Menu|string
     */
    protected $menu;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Menu|string
     */
    protected $hasMenu;

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating|string
     */
    protected $starRating;

    /**
     * The cuisine of the restaurant.
     *
     *
     * @var string
     */
    protected $servesCuisine;

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings ```Yes``` or ```No```.
     *
     *
     * @var bool|string|null
     */
    protected $acceptsReservations;

    /**
     * @return \OpenActive\Models\SchemaOrg\Menu|string
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Menu|string $menu
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMenu($menu)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Menu",
            "string",
        ];

        $menu = self::checkTypes($menu, $types);

        $this->menu = $menu;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Menu|string
     */
    public function getHasMenu()
    {
        return $this->hasMenu;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Menu|string $hasMenu
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMenu($hasMenu)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Menu",
            "string",
        ];

        $hasMenu = self::checkTypes($hasMenu, $types);

        $this->hasMenu = $hasMenu;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating|string
     */
    public function getStarRating()
    {
        return $this->starRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating|string $starRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStarRating($starRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Rating",
            "string",
        ];

        $starRating = self::checkTypes($starRating, $types);

        $this->starRating = $starRating;
    }

    /**
     * @return string
     */
    public function getServesCuisine()
    {
        return $this->servesCuisine;
    }

    /**
     * @param string $servesCuisine
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServesCuisine($servesCuisine)
    {
        $types = [
            "string",
        ];

        $servesCuisine = self::checkTypes($servesCuisine, $types);

        $this->servesCuisine = $servesCuisine;
    }

    /**
     * @return bool|string|null
     */
    public function getAcceptsReservations()
    {
        return $this->acceptsReservations;
    }

    /**
     * @param bool|string|null $acceptsReservations
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptsReservations($acceptsReservations)
    {
        $types = [
            "bool",
            "string",
            "null",
        ];

        $acceptsReservations = self::checkTypes($acceptsReservations, $types);

        $this->acceptsReservations = $acceptsReservations;
    }

}
