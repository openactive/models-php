<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovieTheater extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * The number of screens in the movie theater.
     *
     *
     * @var decimal|null
     */
    protected $screenCount;

    /**
     * @return decimal|null
     */
    public function getScreenCount()
    {
        return $this->screenCount;
    }

    /**
     * @param decimal|null $screenCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setScreenCount($screenCount)
    {
        $types = array(
            "decimal",
            "null",
        );

        $screenCount = self::checkTypes($screenCount, $types);

        $this->screenCount = $screenCount;
    }

}
