<?php

namespace OpenActive\Models\SchemaOrg;

/**
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

    public static function fieldList() {
        $fields = [
            "subtitleLanguage" => "subtitleLanguage",
            "videoFormat" => "videoFormat",
            "workPresented" => "workPresented",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $subtitleLanguage;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     *
     * @var string
     */
    protected $videoFormat;

    /**
     * The movie presented during this event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Movie
     */
    protected $workPresented;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getSubtitleLanguage()
    {
        return $this->subtitleLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $subtitleLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubtitleLanguage($subtitleLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $subtitleLanguage = self::checkTypes($subtitleLanguage, $types);

        $this->subtitleLanguage = $subtitleLanguage;
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
        $types = [
            "string",
        ];

        $videoFormat = self::checkTypes($videoFormat, $types);

        $this->videoFormat = $videoFormat;
    }

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Movie",
        ];

        $workPresented = self::checkTypes($workPresented, $types);

        $this->workPresented = $workPresented;
    }

}
