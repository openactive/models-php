<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OnlineStore extends \OpenActive\Models\SchemaOrg\OnlineBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OnlineStore";
    }

    public static function fieldList() {
        $fields = [
            "isStoreOn" => "isStoreOn",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The eCommerce marketplace this online store is on.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OnlineMarketplace|string
     */
    protected $isStoreOn;

    /**
     * @return \OpenActive\Models\SchemaOrg\OnlineMarketplace|string
     */
    public function getIsStoreOn()
    {
        return $this->isStoreOn;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OnlineMarketplace|string $isStoreOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsStoreOn($isStoreOn)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OnlineMarketplace",
            "string",
        ];

        $isStoreOn = self::checkTypes($isStoreOn, $types);

        $this->isStoreOn = $isStoreOn;
    }

}
