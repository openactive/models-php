<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OnlineMarketplace extends \OpenActive\Models\SchemaOrg\OnlineStore
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OnlineMarketplace";
    }

    public static function fieldList() {
        $fields = [
            "hasStore" => "hasStore",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An eCommerce store part of an online marketplace.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OnlineStore|string
     */
    protected $hasStore;

    /**
     * @return \OpenActive\Models\SchemaOrg\OnlineStore|string
     */
    public function getHasStore()
    {
        return $this->hasStore;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OnlineStore|string $hasStore
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasStore($hasStore)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OnlineStore",
            "string",
        ];

        $hasStore = self::checkTypes($hasStore, $types);

        $this->hasStore = $hasStore;
    }

}
