<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Collection extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Collection";
    }

    public static function fieldList() {
        $fields = [
            "collectionSize" => "collectionSize",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [object Object]
     *
     *
     * @var int|null
     */
    protected $collectionSize;

    /**
     * @return int|null
     */
    public function getCollectionSize()
    {
        return $this->collectionSize;
    }

    /**
     * @param int|null $collectionSize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCollectionSize($collectionSize)
    {
        $types = [
            "int",
            "null",
        ];

        $collectionSize = self::checkTypes($collectionSize, $types);

        $this->collectionSize = $collectionSize;
    }

}
