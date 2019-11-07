<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * This type is derived from [Event](https://schema.org/Event), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class ScreeningEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ScreeningEvent";
    }

    /**
     * The movie presented during this event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Movie
     */
    protected $workPresented;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     *
     * @var string
     */
    protected $videoFormat;

    /**
     * @return \OpenActive\Models\SchemaOrg\Movie
     */
    public function getWorkPresented()
    {
        return $this->workPresented;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Movie $workPresented
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkPresented($workPresented)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Movie",
        );

        $workPresented = self::checkTypes($workPresented, $types);

        $this->workPresented = $workPresented;
    }

    /**
     * @return string
     */
    public function getVideoFormat()
    {
        return $this->videoFormat;
    }

    /**
     * @param string $videoFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideoFormat($videoFormat)
    {
        $types = array(
            "string",
        );

        $videoFormat = self::checkTypes($videoFormat, $types);

        $this->videoFormat = $videoFormat;
    }

}
