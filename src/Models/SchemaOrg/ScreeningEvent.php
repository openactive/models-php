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
            "workPresented" => "workPresented",
            "subtitleLanguage" => "subtitleLanguage",
            "videoFormat" => "videoFormat",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The movie presented during this event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Movie|string
     */
    protected $workPresented;

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
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
     * @return \OpenActive\Models\SchemaOrg\Movie|string
     */
    public function getWorkPresented()
    {
        return $this->workPresented;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Movie|string $workPresented
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkPresented($workPresented)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Movie",
            "string",
        ];

        $workPresented = self::checkTypes($workPresented, $types);

        $this->workPresented = $workPresented;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getSubtitleLanguage()
    {
        return $this->subtitleLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $subtitleLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubtitleLanguage($subtitleLanguage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
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

}
