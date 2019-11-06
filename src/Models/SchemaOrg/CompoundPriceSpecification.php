<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [PriceSpecification](https://schema.org/PriceSpecification), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
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

    /**
     * This property links to all <a class="localLink" href="https://schema.org/UnitPriceSpecification">UnitPriceSpecification</a> nodes that apply in parallel for the <a class="localLink" href="https://schema.org/CompoundPriceSpecification">CompoundPriceSpecification</a> node.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\UnitPriceSpecification
     */
    protected $priceComponent;

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\UnitPriceSpecification",
        );

        $priceComponent = self::checkTypes($priceComponent, $types);

        $this->priceComponent = $priceComponent;
    }

}
