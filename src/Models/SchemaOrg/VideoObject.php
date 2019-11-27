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
            "actors" => "actors",
            "caption" => "caption",
            "thumbnail" => "thumbnail",
            "transcript" => "transcript",
            "director" => "director",
            "videoQuality" => "videoQuality",
            "directors" => "directors",
            "musicBy" => "musicBy",
            "videoFrameSize" => "videoFrameSize",
            "actor" => "actor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actors;

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="https://schema.org/encodingFormat">encodingFormat</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $caption;

    /**
     * Thumbnail image for an image or video.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $thumbnail;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     *
     *
     * @var string
     */
    protected $transcript;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $director;

    /**
     * The quality of the video.
     *
     *
     * @var string
     */
    protected $videoQuality;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $directors;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person
     */
    protected $musicBy;

    /**
     * The frame size of the video.
     *
     *
     * @var string
     */
    protected $videoFrameSize;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $actor;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $actors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActors($actors)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $caption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCaption($caption)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $caption = self::checkTypes($caption, $types);

        $this->caption = $caption;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject $thumbnail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnail($thumbnail)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ImageObject",
        );

        $thumbnail = self::checkTypes($thumbnail, $types);

        $this->thumbnail = $thumbnail;
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
        $types = array(
            "string",
        );

        $transcript = self::checkTypes($transcript, $types);

        $this->transcript = $transcript;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $director
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $director = self::checkTypes($director, $types);

        $this->director = $director;
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
        $types = array(
            "string",
        );

        $videoQuality = self::checkTypes($videoQuality, $types);

        $this->videoQuality = $videoQuality;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $directors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirectors($directors)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicGroup|\OpenActive\Models\SchemaOrg\Person $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
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
        $types = array(
            "string",
        );

        $videoFrameSize = self::checkTypes($videoFrameSize, $types);

        $this->videoFrameSize = $videoFrameSize;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

}
