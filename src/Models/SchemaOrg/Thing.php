<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Thing extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Thing";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "sameAs" => "sameAs",
            "alternateName" => "alternateName",
            "image" => "image",
            "additionalType" => "additionalType",
            "subjectOf" => "subjectOf",
            "mainEntityOfPage" => "mainEntityOfPage",
            "url" => "url",
            "potentialAction" => "potentialAction",
            "disambiguatingDescription" => "disambiguatingDescription",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of <a class="localLink" href="https://schema.org/Thing">Thing</a>, such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See <a href="/docs/datamodel.html#identifierBg">background notes</a> for more details.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PropertyValue
     */
    protected $identifier;

    /**
     * The name of the item.
     *
     *
     * @var string
     */
    protected $name;

    /**
     * A description of the item.
     *
     *
     * @var string
     */
    protected $description;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
     *
     *
     * @var string
     */
    protected $sameAs;

    /**
     * An alias for the item.
     *
     *
     * @var string
     */
    protected $alternateName;

    /**
     * An image of the item. This can be a <a class="localLink" href="https://schema.org/URL">URL</a> or a fully described <a class="localLink" href="https://schema.org/ImageObject">ImageObject</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $image;

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
     *
     *
     * @var string
     */
    protected $additionalType;

    /**
     * A CreativeWork or Event about this Thing.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $subjectOf;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See <a href="/docs/datamodel.html#mainEntityBackground">background notes</a> for details.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $mainEntityOfPage;

    /**
     * URL of the item.
     *
     *
     * @var string
     */
    protected $url;

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Action
     */
    protected $potentialAction;

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     *
     *
     * @var string
     */
    protected $disambiguatingDescription;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PropertyValue
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PropertyValue $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
        );

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
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
     * @return string
     */
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * @param string $sameAs
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSameAs($sameAs)
    {
        $types = array(
            "string",
        );

        $sameAs = self::checkTypes($sameAs, $types);

        $this->sameAs = $sameAs;
    }

    /**
     * @return string
     */
    public function getAlternateName()
    {
        return $this->alternateName;
    }

    /**
     * @param string $alternateName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlternateName($alternateName)
    {
        $types = array(
            "string",
        );

        $alternateName = self::checkTypes($alternateName, $types);

        $this->alternateName = $alternateName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $image
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        );

        $image = self::checkTypes($image, $types);

        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    /**
     * @param string $additionalType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalType($additionalType)
    {
        $types = array(
            "string",
        );

        $additionalType = self::checkTypes($additionalType, $types);

        $this->additionalType = $additionalType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getSubjectOf()
    {
        return $this->subjectOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\CreativeWork $subjectOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubjectOf($subjectOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Event",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $subjectOf = self::checkTypes($subjectOf, $types);

        $this->subjectOf = $subjectOf;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getMainEntityOfPage()
    {
        return $this->mainEntityOfPage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $mainEntityOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMainEntityOfPage($mainEntityOfPage)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $mainEntityOfPage = self::checkTypes($mainEntityOfPage, $types);

        $this->mainEntityOfPage = $mainEntityOfPage;
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

    /**
     * @return \OpenActive\Models\SchemaOrg\Action
     */
    public function getPotentialAction()
    {
        return $this->potentialAction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Action $potentialAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPotentialAction($potentialAction)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Action",
        );

        $potentialAction = self::checkTypes($potentialAction, $types);

        $this->potentialAction = $potentialAction;
    }

    /**
     * @return string
     */
    public function getDisambiguatingDescription()
    {
        return $this->disambiguatingDescription;
    }

    /**
     * @param string $disambiguatingDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDisambiguatingDescription($disambiguatingDescription)
    {
        $types = array(
            "string",
        );

        $disambiguatingDescription = self::checkTypes($disambiguatingDescription, $types);

        $this->disambiguatingDescription = $disambiguatingDescription;
    }

}
