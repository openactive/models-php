<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicComposition extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicComposition";
    }

    public static function fieldList() {
        $fields = [
            "firstPerformance" => "firstPerformance",
            "recordedAs" => "recordedAs",
            "musicCompositionForm" => "musicCompositionForm",
            "musicArrangement" => "musicArrangement",
            "musicalKey" => "musicalKey",
            "includedComposition" => "includedComposition",
            "lyricist" => "lyricist",
            "composer" => "composer",
            "lyrics" => "lyrics",
            "iswcCode" => "iswcCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The date and place the work was first performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $firstPerformance;

    /**
     * An audio recording of the work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $recordedAs;

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     *
     * @var string
     */
    protected $musicCompositionForm;

    /**
     * An arrangement derived from the composition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicComposition
     */
    protected $musicArrangement;

    /**
     * The key, mode, or scale this composition uses.
     *
     *
     * @var string
     */
    protected $musicalKey;

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicComposition
     */
    protected $includedComposition;

    /**
     * The person who wrote the words.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $lyricist;

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $composer;

    /**
     * The words in the song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $lyrics;

    /**
     * The International Standard Musical Work Code for the composition.
     *
     *
     * @var string
     */
    protected $iswcCode;

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getFirstPerformance()
    {
        return $this->firstPerformance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $firstPerformance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFirstPerformance($firstPerformance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
        ];

        $firstPerformance = self::checkTypes($firstPerformance, $types);

        $this->firstPerformance = $firstPerformance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicRecording
     */
    public function getRecordedAs()
    {
        return $this->recordedAs;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicRecording $recordedAs
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordedAs($recordedAs)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        ];

        $recordedAs = self::checkTypes($recordedAs, $types);

        $this->recordedAs = $recordedAs;
    }

    /**
     * @return string
     */
    public function getMusicCompositionForm()
    {
        return $this->musicCompositionForm;
    }

    /**
     * @param string $musicCompositionForm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicCompositionForm($musicCompositionForm)
    {
        $types = [
            "string",
        ];

        $musicCompositionForm = self::checkTypes($musicCompositionForm, $types);

        $this->musicCompositionForm = $musicCompositionForm;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicComposition
     */
    public function getMusicArrangement()
    {
        return $this->musicArrangement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicComposition $musicArrangement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicArrangement($musicArrangement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicComposition",
        ];

        $musicArrangement = self::checkTypes($musicArrangement, $types);

        $this->musicArrangement = $musicArrangement;
    }

    /**
     * @return string
     */
    public function getMusicalKey()
    {
        return $this->musicalKey;
    }

    /**
     * @param string $musicalKey
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicalKey($musicalKey)
    {
        $types = [
            "string",
        ];

        $musicalKey = self::checkTypes($musicalKey, $types);

        $this->musicalKey = $musicalKey;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicComposition
     */
    public function getIncludedComposition()
    {
        return $this->includedComposition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicComposition $includedComposition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedComposition($includedComposition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicComposition",
        ];

        $includedComposition = self::checkTypes($includedComposition, $types);

        $this->includedComposition = $includedComposition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getLyricist()
    {
        return $this->lyricist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $lyricist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLyricist($lyricist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $lyricist = self::checkTypes($lyricist, $types);

        $this->lyricist = $lyricist;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $composer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComposer($composer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $composer = self::checkTypes($composer, $types);

        $this->composer = $composer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $lyrics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLyrics($lyrics)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $lyrics = self::checkTypes($lyrics, $types);

        $this->lyrics = $lyrics;
    }

    /**
     * @return string
     */
    public function getIswcCode()
    {
        return $this->iswcCode;
    }

    /**
     * @param string $iswcCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIswcCode($iswcCode)
    {
        $types = [
            "string",
        ];

        $iswcCode = self::checkTypes($iswcCode, $types);

        $this->iswcCode = $iswcCode;
    }

}
