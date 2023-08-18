<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ProductCollection extends \OpenActive\Models\SchemaOrg\Collection
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ProductCollection";
    }

    public static function fieldList() {
        $fields = [
            "includesObject" => "includesObject",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TypeAndQuantityNode|string
     */
    protected $includesObject;

    /**
     * @return \OpenActive\Models\SchemaOrg\TypeAndQuantityNode|string
     */
    public function getIncludesObject()
    {
        return $this->includesObject;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TypeAndQuantityNode|string $includesObject
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesObject($includesObject)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TypeAndQuantityNode",
            "string",
        ];

        $includesObject = self::checkTypes($includesObject, $types);

        $this->includesObject = $includesObject;
    }

}
