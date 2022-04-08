<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProductGroup extends \OpenActive\Models\SchemaOrg\Product
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ProductGroup";
    }

    public static function fieldList() {
        $fields = [
            "hasVariant" => "hasVariant",
            "productGroupID" => "productGroupID",
            "variesBy" => "variesBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $hasVariant;

    /**
     * Indicates a textual identifier for a ProductGroup.
     *
     *
     * @var string
     */
    protected $productGroupID;

    /**
     * Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $variesBy;

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getHasVariant()
    {
        return $this->hasVariant;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $hasVariant
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasVariant($hasVariant)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $hasVariant = self::checkTypes($hasVariant, $types);

        $this->hasVariant = $hasVariant;
    }

    /**
     * @return string
     */
    public function getProductGroupID()
    {
        return $this->productGroupID;
    }

    /**
     * @param string $productGroupID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductGroupID($productGroupID)
    {
        $types = [
            "string",
        ];

        $productGroupID = self::checkTypes($productGroupID, $types);

        $this->productGroupID = $productGroupID;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getVariesBy()
    {
        return $this->variesBy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $variesBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVariesBy($variesBy)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $variesBy = self::checkTypes($variesBy, $types);

        $this->variesBy = $variesBy;
    }

}
