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
            "eligibleRegion" => "eligibleRegion",
            "appliesToDeliveryMethod" => "appliesToDeliveryMethod",
            "ineligibleRegion" => "ineligibleRegion",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $areaServed;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
     *     
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|string
     */
    protected $ineligibleRegion;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string $eligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
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

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|string
     */
    public function getIneligibleRegion()
    {
        return $this->ineligibleRegion;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\GeoShape|string $ineligibleRegion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIneligibleRegion($ineligibleRegion)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "string",
        ];

        $ineligibleRegion = self::checkTypes($ineligibleRegion, $types);

        $this->ineligibleRegion = $ineligibleRegion;
    }

}
