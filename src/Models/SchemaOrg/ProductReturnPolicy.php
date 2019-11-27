<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProductReturnPolicy extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ProductReturnPolicy";
    }

    public static function fieldList() {
        $fields = [
            "returnPolicyCategory" => "returnPolicyCategory",
            "refundType" => "refundType",
            "productReturnLink" => "productReturnLink",
            "returnFees" => "returnFees",
            "productReturnDays" => "productReturnDays",
            "inStoreReturnsOffered" => "inStoreReturnsOffered",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A returnPolicyCategory expresses at most one of several enumerated kinds of return.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ProductReturnEnumeration|null
     */
    protected $returnPolicyCategory;

    /**
     * A refundType, from an enumerated list.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null
     */
    protected $refundType;

    /**
     * Indicates a Web page or service by URL, for product return.
     *
     *
     * @var string
     */
    protected $productReturnLink;

    /**
     * Indicates (via enumerated options) the return fees policy for a ProductReturnPolicy
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    protected $returnFees;

    /**
     * The productReturnDays property indicates the number of days (from purchase) within which relevant product return policy is applicable.
     *
     *
     * @var int|null
     */
    protected $productReturnDays;

    /**
     * Are in-store returns offered?
     *
     *
     * @var bool|null
     */
    protected $inStoreReturnsOffered;

    /**
     * @return \OpenActive\Enums\SchemaOrg\ProductReturnEnumeration|null
     */
    public function getReturnPolicyCategory()
    {
        return $this->returnPolicyCategory;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ProductReturnEnumeration|null $returnPolicyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnPolicyCategory($returnPolicyCategory)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\ProductReturnEnumeration",
            "null",
        );

        $returnPolicyCategory = self::checkTypes($returnPolicyCategory, $types);

        $this->returnPolicyCategory = $returnPolicyCategory;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null
     */
    public function getRefundType()
    {
        return $this->refundType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null $refundType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRefundType($refundType)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\RefundTypeEnumeration",
            "null",
        );

        $refundType = self::checkTypes($refundType, $types);

        $this->refundType = $refundType;
    }

    /**
     * @return string
     */
    public function getProductReturnLink()
    {
        return $this->productReturnLink;
    }

    /**
     * @param string $productReturnLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductReturnLink($productReturnLink)
    {
        $types = array(
            "string",
        );

        $productReturnLink = self::checkTypes($productReturnLink, $types);

        $this->productReturnLink = $productReturnLink;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    public function getReturnFees()
    {
        return $this->returnFees;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null $returnFees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnFees($returnFees)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration",
            "null",
        );

        $returnFees = self::checkTypes($returnFees, $types);

        $this->returnFees = $returnFees;
    }

    /**
     * @return int|null
     */
    public function getProductReturnDays()
    {
        return $this->productReturnDays;
    }

    /**
     * @param int|null $productReturnDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductReturnDays($productReturnDays)
    {
        $types = array(
            "int",
            "null",
        );

        $productReturnDays = self::checkTypes($productReturnDays, $types);

        $this->productReturnDays = $productReturnDays;
    }

    /**
     * @return bool|null
     */
    public function getInStoreReturnsOffered()
    {
        return $this->inStoreReturnsOffered;
    }

    /**
     * @param bool|null $inStoreReturnsOffered
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInStoreReturnsOffered($inStoreReturnsOffered)
    {
        $types = array(
            "bool",
            "null",
        );

        $inStoreReturnsOffered = self::checkTypes($inStoreReturnsOffered, $types);

        $this->inStoreReturnsOffered = $inStoreReturnsOffered;
    }

}
