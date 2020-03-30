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

    public static function fieldList() {
        $fields = [
            "durationOfWarranty" => "durationOfWarranty",
            "warrantyScope" => "warrantyScope",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\WarrantyScope|null
     */
    protected $warrantyScope;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getDurationOfWarranty()
    {
        return $this->durationOfWarranty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $durationOfWarranty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDurationOfWarranty($durationOfWarranty)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $durationOfWarranty = self::checkTypes($durationOfWarranty, $types);

        $this->durationOfWarranty = $durationOfWarranty;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\WarrantyScope|null
     */
    public function getWarrantyScope()
    {
        return $this->warrantyScope;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\WarrantyScope|null $warrantyScope
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWarrantyScope($warrantyScope)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\WarrantyScope",
            "null",
        );

        $warrantyScope = self::checkTypes($warrantyScope, $types);

        $this->warrantyScope = $warrantyScope;
    }

}
