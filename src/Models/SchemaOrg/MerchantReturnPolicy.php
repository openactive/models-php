<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MerchantReturnPolicy extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MerchantReturnPolicy";
    }

    public static function fieldList() {
        $fields = [
            "returnPolicyCategory" => "returnPolicyCategory",
            "refundType" => "refundType",
            "returnFees" => "returnFees",
            "merchantReturnLink" => "merchantReturnLink",
            "merchantReturnDays" => "merchantReturnDays",
            "inStoreReturnsOffered" => "inStoreReturnsOffered",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A returnPolicyCategory expresses at most one of several enumerated kinds of return.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
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
     * Indicates (via enumerated options) the return fees policy for a MerchantReturnPolicy
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    protected $returnFees;

    /**
     * Indicates a Web page or service by URL, for product return.
     *
     *
     * @var string
     */
    protected $merchantReturnLink;

    /**
     * The merchantReturnDays property indicates the number of days (from purchase) within which relevant merchant return policy is applicable.
     *
     *
     * @var int|null
     */
    protected $merchantReturnDays;

    /**
     * Are in-store returns offered?
     *
     *
     * @var bool|null
     */
    protected $inStoreReturnsOffered;

    /**
     * @return \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    public function getReturnPolicyCategory()
    {
        return $this->returnPolicyCategory;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null $returnPolicyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReturnPolicyCategory($returnPolicyCategory)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration",
            "null",
        ];

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
        $types = [
            "\OpenActive\Enums\SchemaOrg\RefundTypeEnumeration",
            "null",
        ];

        $refundType = self::checkTypes($refundType, $types);

        $this->refundType = $refundType;
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
        $types = [
            "\OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration",
            "null",
        ];

        $returnFees = self::checkTypes($returnFees, $types);

        $this->returnFees = $returnFees;
    }

    /**
     * @return string
     */
    public function getMerchantReturnLink()
    {
        return $this->merchantReturnLink;
    }

    /**
     * @param string $merchantReturnLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchantReturnLink($merchantReturnLink)
    {
        $types = [
            "string",
        ];

        $merchantReturnLink = self::checkTypes($merchantReturnLink, $types);

        $this->merchantReturnLink = $merchantReturnLink;
    }

    /**
     * @return int|null
     */
    public function getMerchantReturnDays()
    {
        return $this->merchantReturnDays;
    }

    /**
     * @param int|null $merchantReturnDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchantReturnDays($merchantReturnDays)
    {
        $types = [
            "int",
            "null",
        ];

        $merchantReturnDays = self::checkTypes($merchantReturnDays, $types);

        $this->merchantReturnDays = $merchantReturnDays;
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
        $types = [
            "bool",
            "null",
        ];

        $inStoreReturnsOffered = self::checkTypes($inStoreReturnsOffered, $types);

        $this->inStoreReturnsOffered = $inStoreReturnsOffered;
    }

}
