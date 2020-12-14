<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Concept](http://www.w3.org/2004/02/skos/core#Concept), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class Concept extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "Concept";
    }

    public static function fieldList() {
        $fields = [
            "altLabel" => "altLabel",
            "broader" => "broader",
            "inScheme" => "inScheme",
            "narrower" => "narrower",
            "notation" => "notation",
            "prefLabel" => "prefLabel",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An alternative human readable string for use in user interfaces.
     *
     * ```json
     * "altLabel": "Speedball"
     * ```
     *
     * @var string[]
     */
    protected $altLabel;

    /**
     * A broader Concept URI
     *
     * ```json
     * "broader": "https://example.com/football"
     * ```
     *
     * @var string[]
     */
    protected $broader;

    /**
     * A stable URL reference for the taxonomy.
     *
     * ```json
     * "inScheme": "https://example.com/reference/activities"
     * ```
     *
     * @var string
     */
    protected $inScheme;

    /**
     * A more specific concept URI
     *
     * ```json
     * "narrower": "https://example.com/walking-football"
     * ```
     *
     * @var string[]
     */
    protected $narrower;

    /**
     * A concept label that is not normally recognisable as natural language.
     *
     * ```json
     * "notation": "Speedball"
     * ```
     *
     * @var string
     */
    protected $notation;

    /**
     * A human readable string for use in user interfaces.
     *
     * ```json
     * "prefLabel": "Speedball"
     * ```
     *
     * @var string
     */
    protected $prefLabel;

    /**
     * @return string[]
     */
    public function getAltLabel()
    {
        return $this->altLabel;
    }

    /**
     * @param string[] $altLabel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAltLabel($altLabel)
    {
        $types = [
            "string[]",
        ];

        $altLabel = self::checkTypes($altLabel, $types);

        $this->altLabel = $altLabel;
    }

    /**
     * @return string[]
     */
    public function getBroader()
    {
        return $this->broader;
    }

    /**
     * @param string[] $broader
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBroader($broader)
    {
        $types = [
            "string[]",
        ];

        $broader = self::checkTypes($broader, $types);

        $this->broader = $broader;
    }

    /**
     * @return string
     */
    public function getInScheme()
    {
        return $this->inScheme;
    }

    /**
     * @param string $inScheme
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInScheme($inScheme)
    {
        $types = [
            "string",
        ];

        $inScheme = self::checkTypes($inScheme, $types);

        $this->inScheme = $inScheme;
    }

    /**
     * @return string[]
     */
    public function getNarrower()
    {
        return $this->narrower;
    }

    /**
     * @param string[] $narrower
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNarrower($narrower)
    {
        $types = [
            "string[]",
        ];

        $narrower = self::checkTypes($narrower, $types);

        $this->narrower = $narrower;
    }

    /**
     * @return string
     */
    public function getNotation()
    {
        return $this->notation;
    }

    /**
     * @param string $notation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNotation($notation)
    {
        $types = [
            "string",
        ];

        $notation = self::checkTypes($notation, $types);

        $this->notation = $notation;
    }

    /**
     * @return string
     */
    public function getPrefLabel()
    {
        return $this->prefLabel;
    }

    /**
     * @param string $prefLabel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrefLabel($prefLabel)
    {
        $types = [
            "string",
        ];

        $prefLabel = self::checkTypes($prefLabel, $types);

        $this->prefLabel = $prefLabel;
    }

}
