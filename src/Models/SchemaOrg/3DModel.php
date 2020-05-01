<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ThreeDModel extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:3DModel";
    }

    public static function fieldList() {
        $fields = [
            "isResizable" => "isResizable",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Whether the 3DModel allows resizing. For example, room layout applications often do not allow 3DModel elements to be resized to reflect reality.
     *
     *
     * @var bool|null
     */
    protected $isResizable;

    /**
     * @return bool|null
     */
    public function getIsResizable()
    {
        return $this->isResizable;
    }

    /**
     * @param bool|null $isResizable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsResizable($isResizable)
    {
        $types = array(
            "bool",
            "null",
        );

        $isResizable = self::checkTypes($isResizable, $types);

        $this->isResizable = $isResizable;
    }

}
