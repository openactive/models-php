<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HyperTocEntry extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HyperTocEntry";
    }

    public static function fieldList() {
        $fields = [
            "tocContinuation" => "tocContinuation",
            "associatedMedia" => "associatedMedia",
            "utterances" => "utterances",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another [[HyperTocEntry]] that would be the default next item to play or render.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HyperTocEntry|string
     */
    protected $tocContinuation;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    protected $associatedMedia;

    /**
     * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain section of a media object, represented as a [[HyperTocEntry]].
     *
     *
     * @var string
     */
    protected $utterances;

    /**
     * @return \OpenActive\Models\SchemaOrg\HyperTocEntry|string
     */
    public function getTocContinuation()
    {
        return $this->tocContinuation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HyperTocEntry|string $tocContinuation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTocContinuation($tocContinuation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HyperTocEntry",
            "string",
        ];

        $tocContinuation = self::checkTypes($tocContinuation, $types);

        $this->tocContinuation = $tocContinuation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject|string
     */
    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject|string $associatedMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedMedia($associatedMedia)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
            "string",
        ];

        $associatedMedia = self::checkTypes($associatedMedia, $types);

        $this->associatedMedia = $associatedMedia;
    }

    /**
     * @return string
     */
    public function getUtterances()
    {
        return $this->utterances;
    }

    /**
     * @param string $utterances
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUtterances($utterances)
    {
        $types = [
            "string",
        ];

        $utterances = self::checkTypes($utterances, $types);

        $this->utterances = $utterances;
    }

}
