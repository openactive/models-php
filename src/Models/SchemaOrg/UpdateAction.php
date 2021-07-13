<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UpdateAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UpdateAction";
    }

    public static function fieldList() {
        $fields = [
            "collection" => "collection",
            "targetCollection" => "targetCollection",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of object. The collection target of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $collection;

    /**
     * A sub property of object. The collection target of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $targetCollection;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $collection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCollection($collection)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $collection = self::checkTypes($collection, $types);

        $this->collection = $collection;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getTargetCollection()
    {
        return $this->targetCollection;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $targetCollection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetCollection($targetCollection)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $targetCollection = self::checkTypes($targetCollection, $types);

        $this->targetCollection = $targetCollection;
    }

}
