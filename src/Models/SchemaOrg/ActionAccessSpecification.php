<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ActionAccessSpecification extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ActionAccessSpecification";
    }

    public static function fieldList() {
        $fields = [
            "expectsAcceptanceOf" => "expectsAcceptanceOf",
            "requiresSubscription" => "requiresSubscription",
            "availabilityEnds" => "availabilityEnds",
            "category" => "category",
            "availabilityStarts" => "availabilityStarts",
            "ineligibleRegion" => "ineligibleRegion",
            "eligibleRegion" => "eligibleRegion",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $expectsAcceptanceOf;

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are ```true``` or ```false``` (note that an earlier version had 'yes', 'no').
     *
     *
     * @var bool|\OpenActive\Models\SchemaOrg\MediaSubscription|string|null
     */
    protected $requiresSubscription;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     *
     * @var Date|DateTime|string|null
     */
    protected $availabilityEnds;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null
     */
    protected $category;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     *
     * @var Date|DateTime|string|null
     */
    protected $availabilityStarts;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
     *       
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $ineligibleRegion;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
     *     
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|string|\OpenActive\Models\SchemaOrg\Place
     */
    protected $eligibleRegion;

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getExpectsAcceptanceOf()
    {
        return $this->expectsAcceptanceOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|string $expectsAcceptanceOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectsAcceptanceOf($expectsAcceptanceOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $expectsAcceptanceOf = self::checkTypes($expectsAcceptanceOf, $types);

        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }

    /**
     * @return bool|\OpenActive\Models\SchemaOrg\MediaSubscription|string|null
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    /**
     * @param bool|\OpenActive\Models\SchemaOrg\MediaSubscription|string|null $requiresSubscription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiresSubscription($requiresSubscription)
    {
        $types = [
            "bool",
            "\OpenActive\Models\SchemaOrg\MediaSubscription",
            "string",
            "null",
        ];

        $requiresSubscription = self::checkTypes($requiresSubscription, $types);

        $this->requiresSubscription = $requiresSubscription;
    }

    /**
     * @return Date|DateTime|string|null
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
     * @param Date|DateTime|string|null $availabilityEnds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityEnds($availabilityEnds)
    {
        $types = [
            "Date",
            "DateTime",
            "Time",
            "null",
        ];

        $availabilityEnds = self::checkTypes($availabilityEnds, $types);

        $this->availabilityEnds = $availabilityEnds;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return Date|DateTime|string|null
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
     * @param Date|DateTime|string|null $availabilityStarts
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityStarts($availabilityStarts)
    {
        $types = [
            "Date",
            "DateTime",
            "Time",
            "null",
        ];

        $availabilityStarts = self::checkTypes($availabilityStarts, $types);

        $this->availabilityStarts = $availabilityStarts;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getIneligibleRegion()
    {
        return $this->ineligibleRegion;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape $ineligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIneligibleRegion($ineligibleRegion)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        ];

        $ineligibleRegion = self::checkTypes($ineligibleRegion, $types);

        $this->ineligibleRegion = $ineligibleRegion;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoShape|string|\OpenActive\Models\SchemaOrg\Place
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|string|\OpenActive\Models\SchemaOrg\Place $eligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "string",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $eligibleRegion = self::checkTypes($eligibleRegion, $types);

        $this->eligibleRegion = $eligibleRegion;
    }

}
