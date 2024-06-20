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
     * @var Number|null
     */
    protected $screenCount;

    /**
     * @return Number|null
     */
    public function getScreenCount()
    {
        return $this->screenCount;
    }

    /**
     * @param Number|null $screenCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScreenCount($screenCount)
    {
        $types = [
            "Number",
            "null",
        ];

        $screenCount = self::checkTypes($screenCount, $types);

        $this->screenCount = $screenCount;
    }

}
