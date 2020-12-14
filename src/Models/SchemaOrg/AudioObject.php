<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AudioObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AudioObject";
    }

    public static function fieldList() {
        $fields = [
            "transcript" => "transcript",
            "caption" => "caption",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     *
     *
     * @var string
     */
    protected $transcript;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $caption;

    /**
     * @return string
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * @param string $transcript
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTranscript($transcript)
    {
        $types = [
            "string",
        ];

        $transcript = self::checkTypes($transcript, $types);

        $this->transcript = $transcript;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $caption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCaption($caption)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $caption = self::checkTypes($caption, $types);

        $this->caption = $caption;
    }

}
