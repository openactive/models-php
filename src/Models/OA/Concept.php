<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from http://www.w3.org/2004/02/skos/core#Concept.
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
            "definition" => "definition",
            "hiddenLabel" => "hiddenLabel",
            "inScheme" => "inScheme",
            "narrower" => "narrower",
            "notation" => "notation",
            "prefLabel" => "prefLabel",
            "related" => "related",
            "topConceptOf" => "topConceptOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An alternative human readable string for use in user interfaces.
     *
     * ```json
     * "altLabel": [
     *   "Five a side"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $altLabel;

    /**
     * A broader Concept URI
     *
     * ```json
     * "broader": [
     *   "https://openactive.io/activity-list#6ca15167-51da-4d91-a1ae-8a45dc47b0ea"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $broader;

    /**
     * A human readable string that unambiguously defines the Concept, for use in user interfaces.
     *
     * ```json
     * "definition": "Latin American style of dance with Cuban origins."
     * ```
     *
     * @var string
     */
    protected $definition;

    /**
     * An alternative human readable string used to drive autocomplete search matches, that is hidden from the user.
     *
     * ```json
     * "hiddenLabel": [
     *   "5-a-side"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $hiddenLabel;

    /**
     * A stable URL reference for the taxonomy, which must be `https://openactive.io/activity-list` to [reference the OpenActive Activity List](https://developer.openactive.io/publishing-data/activity-list-references).
     *
     * ```json
     * "inScheme": "https://openactive.io/activity-list"
     * ```
     *
     * @var string
     */
    protected $inScheme;

    /**
     * A more specific concept URI
     *
     * ```json
     * "narrower": [
     *   "https://openactive.io/activity-list#b3829f3e-a63e-455f-a51c-1f50ecf85ad5"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $narrower;

    /**
     * A human-readable identifier for the concept.
     *
     * ```json
     * "notation": "salsa"
     * ```
     *
     * @var string
     */
    protected $notation;

    /**
     * A human readable string that minimally describes the Concept, for use in user interfaces.
     *
     * ```json
     * "prefLabel": "Salsa"
     * ```
     *
     * @var string
     */
    protected $prefLabel;

    /**
     * A related Concept URI
     *
     * ```json
     * "related": [
     *   "https://openactive.io/activity-list#5cdf5ead-e19d-4619-9585-cfe509c3fe52"
     * ]
     * ```
     *
     * @var string[]
     */
    protected $related;

    /**
     * A reference to the Scheme URI, the existence of which indicates that this Concept is at the top level of the hierarchy.
     *
     * ```json
     * "topConceptOf": "https://openactive.io/activity-list"
     * ```
     *
     * @var string
     */
    protected $topConceptOf;

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
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param string $definition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDefinition($definition)
    {
        $types = [
            "string",
        ];

        $definition = self::checkTypes($definition, $types);

        $this->definition = $definition;
    }

    /**
     * @return string[]
     */
    public function getHiddenLabel()
    {
        return $this->hiddenLabel;
    }

    /**
     * @param string[] $hiddenLabel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHiddenLabel($hiddenLabel)
    {
        $types = [
            "string[]",
        ];

        $hiddenLabel = self::checkTypes($hiddenLabel, $types);

        $this->hiddenLabel = $hiddenLabel;
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

    /**
     * @return string[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * @param string[] $related
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelated($related)
    {
        $types = [
            "string[]",
        ];

        $related = self::checkTypes($related, $types);

        $this->related = $related;
    }

    /**
     * @return string
     */
    public function getTopConceptOf()
    {
        return $this->topConceptOf;
    }

    /**
     * @param string $topConceptOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTopConceptOf($topConceptOf)
    {
        $types = [
            "string",
        ];

        $topConceptOf = self::checkTypes($topConceptOf, $types);

        $this->topConceptOf = $topConceptOf;
    }

}
