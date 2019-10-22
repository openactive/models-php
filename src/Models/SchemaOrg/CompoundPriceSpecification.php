<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CompoundPriceSpecification extends \OpenActive\Models\SchemaOrg\PriceSpecification
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
