<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [ConceptScheme](http://www.w3.org/2004/02/skos/core#ConceptScheme), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class ConceptScheme extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "ConceptScheme";
    }

    public static function fieldList() {
        $fields = [
            "title" => "title",
            "description" => "description",
            "concept" => "concept",
            "license" => "license",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The title of the scheme
     *
     * ```json
     * "title": "Activity List"
     * ```
     *
     * @var string
     */
    protected $title;

    /**
     * A free text description of the taxonomy
     *
     * ```json
     * "description": "An example activity list."
     * ```
     *
     * @var string
     */
    protected $description;

    /**
     * A collection of concepts that are part of this scheme
     *
     * ```json
     * "concept": [
     *   {
     *     "@id": "https://example.com/concept/martial-arts",
     *     "type": "Concept",
     *     "prefLabel": "Martial Arts",
     *     "inScheme": "https://example.com/scheme/123",
     *     "narrower": "https://example.com/concept/martial-arts/karate"
     *   }
     * ]
     * ```
     *
     * @var \OpenActive\Models\OA\Concept[]
     */
    protected $concept;

    /**
     * Reference to the license under which the activity list has been published.
     *
     * ```json
     * "license": "https://example.com/license/MIT"
     * ```
     *
     * @var string
     */
    protected $license;

    /**
     * A URL to a web page (or section of a page) that describes the concept scheme.
     *
     * ```json
     * "url": "https://example.com/scheme/1234"
     * ```
     *
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTitle($title)
    {
        $types = array(
            "string",
        );

        $title = self::checkTypes($title, $types);

        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = array(
            "string",
        );

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return \OpenActive\Models\OA\Concept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * @param \OpenActive\Models\OA\Concept[] $concept
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConcept($concept)
    {
        $types = array(
            "\OpenActive\Models\OA\Concept[]",
        );

        $concept = self::checkTypes($concept, $types);

        $this->concept = $concept;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLicense($license)
    {
        $types = array(
            "string",
        );

        $license = self::checkTypes($license, $types);

        $this->license = $license;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = array(
            "string",
        );

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
