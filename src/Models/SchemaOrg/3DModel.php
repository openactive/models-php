<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ThreeDModel extends \OpenActive\Models\SchemaOrg\CreativeWork
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
     * @var null|bool
     */
    protected $isResizable;

    /**
     * @return null|bool
     */
    public function getIsResizable()
    {
        return $this->isResizable;
    }

    /**
     * @param null|bool $isResizable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsResizable($isResizable)
    {
        $types = array(
            "null",
            "bool",
        );

        $isResizable = self::checkTypes($isResizable, $types);

        $this->isResizable = $isResizable;
    }

}
