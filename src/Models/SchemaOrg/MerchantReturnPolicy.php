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
            "inStoreReturnsOffered" => "inStoreReturnsOffered",
            "returnFees" => "returnFees",
            "merchantReturnLink" => "merchantReturnLink",
            "refundType" => "refundType",
            "returnPolicyCategory" => "returnPolicyCategory",
            "merchantReturnDays" => "merchantReturnDays",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Are in-store returns offered?
     *
     *
     * @var null|bool
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
     * Indicates a Web page or service by URL, for product return.
     *
     *
     * @var string
     */
    protected $merchantReturnLink;

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
     * The merchantReturnDays property indicates the number of days (from purchase) within which relevant merchant return policy is applicable.
     *
     *
     * @var null|int
     */
    protected $merchantReturnDays;

    /**
     * @return null|bool
     */
    public function getInStoreReturnsOffered()
    {
        return $this->inStoreReturnsOffered;
    }

    /**
     * @param null|bool $inStoreReturnsOffered
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInStoreReturnsOffered($inStoreReturnsOffered)
    {
        $types = array(
            "null",
            "bool",
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

}
