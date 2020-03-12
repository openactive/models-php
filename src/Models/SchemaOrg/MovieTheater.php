<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovieTheater extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
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
     * @var null|float
     */
    protected $screenCount;

    /**
     * @return null|float
     */
    public function getScreenCount()
    {
        return $this->screenCount;
    }

    /**
     * @param null|float $screenCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScreenCount($screenCount)
    {
        $types = array(
            "null",
            "float",
        );

        $screenCount = self::checkTypes($screenCount, $types);

        $this->screenCount = $screenCount;
    }

}
