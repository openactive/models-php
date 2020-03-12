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
            "merchantReturnLink" => "merchantReturnLink",
            "merchantReturnDays" => "merchantReturnDays",
            "inStoreReturnsOffered" => "inStoreReturnsOffered",
            "returnFees" => "returnFees",
            "refundType" => "refundType",
            "returnPolicyCategory" => "returnPolicyCategory",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * @var null|int
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
     * Indicates (via enumerated options) the return fees policy for a MerchantReturnPolicy
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\ReturnFeesEnumeration|null
     */
    protected $returnFees;

    /**
     * A refundType, from an enumerated list.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\RefundTypeEnumeration|null
     */
    protected $refundType;

    /**
     * A returnPolicyCategory expresses at most one of several enumerated kinds of return.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration|null
     */
    protected $returnPolicyCategory;

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
        $types = array(
            "string",
        );

        $merchantReturnLink = self::checkTypes($merchantReturnLink, $types);

        $this->merchantReturnLink = $merchantReturnLink;
    }

    /**
     * @return null|int
     */
    public function getMerchantReturnDays()
    {
        return $this->merchantReturnDays;
    }

    /**
     * @param null|int $merchantReturnDays
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMerchantReturnDays($merchantReturnDays)
    {
        $types = array(
            "null",
            "int",
        );

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
        $types = array(
            "bool",
            "null",
        );

        $inStoreReturnsOffered = self::checkTypes($inStoreReturnsOffered, $types);

        $this->inStoreReturnsOffered = $inStoreReturnsOffered;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\MerchantReturnEnumeration",
            "null",
        );

        $returnPolicyCategory = self::checkTypes($returnPolicyCategory, $types);

        $this->returnPolicyCategory = $returnPolicyCategory;
    }

}
