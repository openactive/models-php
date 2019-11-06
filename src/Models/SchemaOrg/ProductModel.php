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

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel
     */
    protected $predecessorOf;

    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel
     */
    protected $successorOf;

    /**
     * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel
     */
    protected $isVariantOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel
     */
    public function getPredecessorOf()
    {
        return $this->predecessorOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel $predecessorOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPredecessorOf($predecessorOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ProductModel",
        );

        $predecessorOf = self::checkTypes($predecessorOf, $types);

        $this->predecessorOf = $predecessorOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel
     */
    public function getSuccessorOf()
    {
        return $this->successorOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel $successorOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuccessorOf($successorOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ProductModel",
        );

        $successorOf = self::checkTypes($successorOf, $types);

        $this->successorOf = $successorOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel
     */
    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel $isVariantOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsVariantOf($isVariantOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ProductModel",
        );

        $isVariantOf = self::checkTypes($isVariantOf, $types);

        $this->isVariantOf = $isVariantOf;
    }

}
