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
            "includedComposition" => "includedComposition",
            "musicalKey" => "musicalKey",
            "firstPerformance" => "firstPerformance",
            "musicArrangement" => "musicArrangement",
            "composer" => "composer",
            "lyrics" => "lyrics",
            "recordedAs" => "recordedAs",
            "lyricist" => "lyricist",
            "iswcCode" => "iswcCode",
            "musicCompositionForm" => "musicCompositionForm",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicComposition|string
     */
    protected $includedComposition;

    /**
     * The key, mode, or scale this composition uses.
     *
     *
     * @var string
     */
    protected $musicalKey;

    /**
     * The date and place the work was first performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|string
     */
    protected $firstPerformance;

    /**
     * An arrangement derived from the composition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicComposition|string
     */
    protected $musicArrangement;

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $composer;

    /**
     * The words in the song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $lyrics;

    /**
     * An audio recording of the work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    protected $recordedAs;

    /**
     * The person who wrote the words.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $lyricist;

    /**
     * The International Standard Musical Work Code for the composition.
     *
     *
     * @var string
     */
    protected $iswcCode;

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     *
     * @var string
     */
    protected $musicCompositionForm;

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicComposition|string
     */
    public function getIncludedComposition()
    {
        return $this->includedComposition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicComposition|string $includedComposition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedComposition($includedComposition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicComposition",
            "string",
        ];

        $includedComposition = self::checkTypes($includedComposition, $types);

        $this->includedComposition = $includedComposition;
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
     * @return \OpenActive\Models\SchemaOrg\Event|string
     */
    public function getFirstPerformance()
    {
        return $this->firstPerformance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event|string $firstPerformance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFirstPerformance($firstPerformance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
            "string",
        ];

        $firstPerformance = self::checkTypes($firstPerformance, $types);

        $this->firstPerformance = $firstPerformance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicComposition|string
     */
    public function getMusicArrangement()
    {
        return $this->musicArrangement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicComposition|string $musicArrangement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicArrangement($musicArrangement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicComposition",
            "string",
        ];

        $musicArrangement = self::checkTypes($musicArrangement, $types);

        $this->musicArrangement = $musicArrangement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $composer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComposer($composer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $composer = self::checkTypes($composer, $types);

        $this->composer = $composer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $lyrics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLyrics($lyrics)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $lyrics = self::checkTypes($lyrics, $types);

        $this->lyrics = $lyrics;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicRecording|string
     */
    public function getRecordedAs()
    {
        return $this->recordedAs;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicRecording|string $recordedAs
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordedAs($recordedAs)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MusicRecording",
            "string",
        ];

        $recordedAs = self::checkTypes($recordedAs, $types);

        $this->recordedAs = $recordedAs;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getLyricist()
    {
        return $this->lyricist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $lyricist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLyricist($lyricist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $lyricist = self::checkTypes($lyricist, $types);

        $this->lyricist = $lyricist;
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

}
