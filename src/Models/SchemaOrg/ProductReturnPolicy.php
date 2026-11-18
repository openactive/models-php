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
            "productReturnDays" => "productReturnDays",
            "productReturnLink" => "productReturnLink",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The productReturnDays property indicates the number of days (from purchase) within which relevant product return policy is applicable.
     *
     *
     * @var int|null
     */
    protected $productReturnDays;

    /**
     * Indicates a Web page or service by URL, for product return.
     *
     *
     * @var string
     */
    protected $productReturnLink;

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
        $types = [
            "int",
            "null",
        ];

        $productReturnDays = self::checkTypes($productReturnDays, $types);

        $this->productReturnDays = $productReturnDays;
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
        $types = [
            "string",
        ];

        $productReturnLink = self::checkTypes($productReturnLink, $types);

        $this->productReturnLink = $productReturnLink;
    }

}
