<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CompoundPriceSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CompoundPriceSpecification";
    }

    public static function fieldList() {
        $fields = [
            "priceType" => "priceType",
            "priceComponent" => "priceComponent",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration|string|null
     */
    protected $priceType;

    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in parallel for the [[CompoundPriceSpecification]] node.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\UnitPriceSpecification
     */
    protected $priceComponent;

    /**
     * @return \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration|string|null
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\PriceTypeEnumeration|string|null $priceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceType($priceType)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\PriceTypeEnumeration",
            "string",
            "null",
        ];

        $priceType = self::checkTypes($priceType, $types);

        $this->priceType = $priceType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\UnitPriceSpecification
     */
    public function getPriceComponent()
    {
        return $this->priceComponent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\UnitPriceSpecification $priceComponent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPriceComponent($priceComponent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\UnitPriceSpecification",
        ];

        $priceComponent = self::checkTypes($priceComponent, $types);

        $this->priceComponent = $priceComponent;
    }

}
