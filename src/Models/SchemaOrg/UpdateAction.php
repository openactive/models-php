<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Action](https://schema.org/Action), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class UpdateAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "schema:UpdateAction";
    }

    /**
     * A sub property of object. The collection target of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $collection;

    /**
     * A sub property of object. The collection target of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $targetCollection;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $collection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCollection($collection)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $collection = self::checkTypes($collection, $types);

        $this->collection = $collection;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getTargetCollection()
    {
        return $this->targetCollection;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $targetCollection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTargetCollection($targetCollection)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $targetCollection = self::checkTypes($targetCollection, $types);

        $this->targetCollection = $targetCollection;
    }

}
