<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProductModel extends \OpenActive\Models\SchemaOrg\Product
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ProductModel";
    }

    public static function fieldList() {
        $fields = [
            "predecessorOf" => "predecessorOf",
            "successorOf" => "successorOf",
            "isVariantOf" => "isVariantOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel|string
     */
    protected $predecessorOf;

    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel|string
     */
    protected $successorOf;

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel|\OpenActive\Models\SchemaOrg\ProductGroup|string
     */
    protected $isVariantOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel|string
     */
    public function getPredecessorOf()
    {
        return $this->predecessorOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel|string $predecessorOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPredecessorOf($predecessorOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProductModel",
            "string",
        ];

        $predecessorOf = self::checkTypes($predecessorOf, $types);

        $this->predecessorOf = $predecessorOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel|string
     */
    public function getSuccessorOf()
    {
        return $this->successorOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel|string $successorOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuccessorOf($successorOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProductModel",
            "string",
        ];

        $successorOf = self::checkTypes($successorOf, $types);

        $this->successorOf = $successorOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel|\OpenActive\Models\SchemaOrg\ProductGroup|string
     */
    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel|\OpenActive\Models\SchemaOrg\ProductGroup|string $isVariantOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsVariantOf($isVariantOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProductModel",
            "\OpenActive\Models\SchemaOrg\ProductGroup",
            "string",
        ];

        $isVariantOf = self::checkTypes($isVariantOf, $types);

        $this->isVariantOf = $isVariantOf;
    }

}
