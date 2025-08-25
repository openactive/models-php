<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VideoObject";
    }

    public static function fieldList() {
        $fields = [
            "actor" => "actor",
            "actors" => "actors",
            "transcript" => "transcript",
            "directors" => "directors",
            "videoQuality" => "videoQuality",
            "videoFrameSize" => "videoFrameSize",
            "director" => "director",
            "caption" => "caption",
            "musicBy" => "musicBy",
            "embeddedTextCaption" => "embeddedTextCaption",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\PerformingGroup|string
     */
    protected $actor;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $actors;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     *
     *
     * @var string
     */
    protected $transcript;

    /**
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $directors;

    /**
     * The quality of the video.
     *
     *
     * @var string
     */
    protected $videoQuality;

    /**
     * The frame size of the video.
     *
     *
     * @var string
     */
    protected $videoFrameSize;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $director;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $caption;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    protected $musicBy;

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     *
     *
     * @var string
     */
    protected $embeddedTextCaption;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\PerformingGroup|string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\PerformingGroup|string $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\PerformingGroup",
            "string",
        ];

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $actors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActors($actors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

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
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $directors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirectors($directors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
    }

    /**
     * @return string
     */
    public function getVideoQuality()
    {
        return $this->videoQuality;
    }

    /**
     * @param string $videoQuality
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideoQuality($videoQuality)
    {
        $types = [
            "string",
        ];

        $videoQuality = self::checkTypes($videoQuality, $types);

        $this->videoQuality = $videoQuality;
    }

    /**
     * @return string
     */
    public function getVideoFrameSize()
    {
        return $this->videoFrameSize;
    }

    /**
     * @param string $videoFrameSize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideoFrameSize($videoFrameSize)
    {
        $types = [
            "string",
        ];

        $videoFrameSize = self::checkTypes($videoFrameSize, $types);

        $this->videoFrameSize = $videoFrameSize;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $director
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $director = self::checkTypes($director, $types);

        $this->director = $director;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "string",
        ];

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
    }

    /**
     * @return string
     */
    public function getEmbeddedTextCaption()
    {
        return $this->embeddedTextCaption;
    }

    /**
     * @param string $embeddedTextCaption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmbeddedTextCaption($embeddedTextCaption)
    {
        $types = [
            "string",
        ];

        $embeddedTextCaption = self::checkTypes($embeddedTextCaption, $types);

        $this->embeddedTextCaption = $embeddedTextCaption;
    }

}
