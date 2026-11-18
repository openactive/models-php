<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SeekToAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SeekToAction";
    }

    public static function fieldList() {
        $fields = [
            "startOffset" => "startOffset",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null
     */
    protected $startOffset;

    /**
     * @return \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null
     */
    public function getStartOffset()
    {
        return $this->startOffset;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HyperTocEntry|string|Number|null $startOffset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartOffset($startOffset)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HyperTocEntry",
            "string",
            "Number",
            "null",
        ];

        $startOffset = self::checkTypes($startOffset, $types);

        $this->startOffset = $startOffset;
    }

}
