<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovieTheater extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MovieTheater";
    }

    public static function fieldList() {
        $fields = [
            "screenCount" => "screenCount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of screens in the movie theater.
     *
     *
     * @var float|null
     */
    protected $screenCount;

    /**
     * @return float|null
     */
    public function getScreenCount()
    {
        return $this->screenCount;
    }

    /**
     * @param float|null $screenCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScreenCount($screenCount)
    {
        $types = array(
            "float",
            "null",
        );

        $screenCount = self::checkTypes($screenCount, $types);

        $this->screenCount = $screenCount;
    }

}
