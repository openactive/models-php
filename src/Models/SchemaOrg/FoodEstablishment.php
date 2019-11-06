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

    /**
     * The cuisine of the restaurant.
     *
     *
     * @var string
     */
    protected $servesCuisine;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Menu
     */
    protected $hasMenu;

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Menu
     */
    protected $menu;

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating
     */
    protected $starRating;

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings <code>Yes</code> or <code>No</code>.
     *
     *
     * @var string|bool|null
     */
    protected $acceptsReservations;

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
        $types = array(
            "string",
        );

        $servesCuisine = self::checkTypes($servesCuisine, $types);

        $this->servesCuisine = $servesCuisine;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Menu
     */
    public function getHasMenu()
    {
        return $this->hasMenu;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Menu $hasMenu
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMenu($hasMenu)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Menu",
        );

        $hasMenu = self::checkTypes($hasMenu, $types);

        $this->hasMenu = $hasMenu;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Menu $menu
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMenu($menu)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Menu",
        );

        $menu = self::checkTypes($menu, $types);

        $this->menu = $menu;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating
     */
    public function getStarRating()
    {
        return $this->starRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating $starRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStarRating($starRating)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Rating",
        );

        $starRating = self::checkTypes($starRating, $types);

        $this->starRating = $starRating;
    }

    /**
     * @return string|bool|null
     */
    public function getAcceptsReservations()
    {
        return $this->acceptsReservations;
    }

    /**
     * @param string|bool|null $acceptsReservations
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptsReservations($acceptsReservations)
    {
        $types = array(
            "string",
            "bool",
            "null",
        );

        $acceptsReservations = self::checkTypes($acceptsReservations, $types);

        $this->acceptsReservations = $acceptsReservations;
    }

}
