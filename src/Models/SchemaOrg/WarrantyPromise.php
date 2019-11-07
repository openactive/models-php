<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WarrantyPromise extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WarrantyPromise";
    }

    /**
     * The scope of the warranty promise.
     *
     *
     * @var \OpenActive\Enums\WarrantyScope|null
     */
    protected $warrantyScope;

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     *
     *
     * @var QuantitativeValue
     */
    protected $durationOfWarranty;

    /**
     * @return \OpenActive\Enums\WarrantyScope|null
     */
    public function getWarrantyScope()
    {
        return $this->warrantyScope;
    }

    /**
     * @param \OpenActive\Enums\WarrantyScope|null $warrantyScope
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWarrantyScope($warrantyScope)
    {
        $types = array(
            "\OpenActive\Enums\WarrantyScope",
            "null",
        );

        $warrantyScope = self::checkTypes($warrantyScope, $types);

        $this->warrantyScope = $warrantyScope;
    }

    /**
     * @return QuantitativeValue
     */
    public function getDurationOfWarranty()
    {
        return $this->durationOfWarranty;
    }

    /**
     * @param QuantitativeValue $durationOfWarranty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDurationOfWarranty($durationOfWarranty)
    {
        $types = array(
            "QuantitativeValue",
        );

        $durationOfWarranty = self::checkTypes($durationOfWarranty, $types);

        $this->durationOfWarranty = $durationOfWarranty;
    }

}
