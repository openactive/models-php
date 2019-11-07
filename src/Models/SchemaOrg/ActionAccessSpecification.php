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

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>
     * 
     * See also <a class="localLink" href="https://schema.org/ineligibleRegion">ineligibleRegion</a>.
     *
     *
     * @var Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    protected $eligibleRegion;

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     *
     *
     * @var Offer
     */
    protected $expectsAcceptanceOf;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     *
     * @var DateTime|string|null
     */
    protected $availabilityEnds;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory
     */
    protected $category;

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaSubscription|bool|null
     */
    protected $requiresSubscription;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     *
     * @var DateTime|string|null
     */
    protected $availabilityStarts;

    /**
     * @return Place|string|\OpenActive\Models\SchemaOrg\GeoShape
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param Place|string|\OpenActive\Models\SchemaOrg\GeoShape $eligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = array(
            "Place",
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
        );

        $eligibleRegion = self::checkTypes($eligibleRegion, $types);

        $this->eligibleRegion = $eligibleRegion;
    }

    /**
     * @return Offer
     */
    public function getExpectsAcceptanceOf()
    {
        return $this->expectsAcceptanceOf;
    }

    /**
     * @param Offer $expectsAcceptanceOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectsAcceptanceOf($expectsAcceptanceOf)
    {
        $types = array(
            "Offer",
        );

        $expectsAcceptanceOf = self::checkTypes($expectsAcceptanceOf, $types);

        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }

    /**
     * @return DateTime|string|null
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
     * @param DateTime|string|null $availabilityEnds
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityEnds($availabilityEnds)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $availabilityEnds = self::checkTypes($availabilityEnds, $types);

        $this->availabilityEnds = $availabilityEnds;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\PhysicalActivityCategory",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaSubscription|bool|null
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaSubscription|bool|null $requiresSubscription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRequiresSubscription($requiresSubscription)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MediaSubscription",
            "bool",
            "null",
        );

        $requiresSubscription = self::checkTypes($requiresSubscription, $types);

        $this->requiresSubscription = $requiresSubscription;
    }

    /**
     * @return DateTime|string|null
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
     * @param DateTime|string|null $availabilityStarts
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailabilityStarts($availabilityStarts)
    {
        $types = array(
            "DateTime",
            "Time",
            "null",
        );

        $availabilityStarts = self::checkTypes($availabilityStarts, $types);

        $this->availabilityStarts = $availabilityStarts;
    }

}
