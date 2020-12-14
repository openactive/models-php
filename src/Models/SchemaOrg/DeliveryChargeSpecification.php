<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DeliveryChargeSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DeliveryChargeSpecification";
    }

    public static function fieldList() {
        $fields = [
            "areaServed" => "areaServed",
            "ineligibleRegion" => "ineligibleRegion",
            "eligibleRegion" => "eligibleRegion",
            "appliesToDeliveryMethod" => "appliesToDeliveryMethod",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    protected $areaServed;

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
     * @var string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place
     */
    protected $eligibleRegion;

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $appliesToDeliveryMethod;

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|string
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|string $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "string",
        ];

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
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
     * @return string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place $eligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $eligibleRegion = self::checkTypes($eligibleRegion, $types);

        $this->eligibleRegion = $eligibleRegion;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DeliveryMethod|null $appliesToDeliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        ];

        $appliesToDeliveryMethod = self::checkTypes($appliesToDeliveryMethod, $types);

        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }

}
