<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Thing extends \OpenActive\BaseModel
{
    /**
     * The identifier property represents any kind of identifier for any kind of <a class="localLink" href="https://schema.org/Thing">Thing</a>, such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See <a href="/docs/datamodel.html#identifierBg">background notes</a> for more details.
     *
     *
     * @var PropertyValue|string
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
     * URL of the item.
     *
     *
     * @var string
     */
    protected $url;

    /**
     * An image of the item. This can be a <a class="localLink" href="https://schema.org/URL">URL</a> or a fully described <a class="localLink" href="https://schema.org/ImageObject">ImageObject</a>.
     *
     *
     * @var ImageObject|string
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
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|Event
     */
    protected $subjectOf;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See <a href="/docs/datamodel.html#mainEntityBackground">background notes</a> for details.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $mainEntityOfPage;

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     *
     *
     * @var Action
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
     * An alias for the item.
     *
     *
     * @var string
     */
    protected $alternateName;

    /**
     * @return PropertyValue|string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param PropertyValue|string $identifier
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = array(
            "PropertyValue",
            "string",
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @throws \Exception If the provided argument is not of a supported type.
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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return ImageObject|string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param ImageObject|string $image
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = array(
            "ImageObject",
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
     * @throws \Exception If the provided argument is not of a supported type.
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
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|Event
     */
    public function getSubjectOf()
    {
        return $this->subjectOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|Event $subjectOf
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSubjectOf($subjectOf)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "Event",
        );

        $subjectOf = self::checkTypes($subjectOf, $types);

        $this->subjectOf = $subjectOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getMainEntityOfPage()
    {
        return $this->mainEntityOfPage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $mainEntityOfPage
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMainEntityOfPage($mainEntityOfPage)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $mainEntityOfPage = self::checkTypes($mainEntityOfPage, $types);

        $this->mainEntityOfPage = $mainEntityOfPage;
    }

    /**
     * @return Action
     */
    public function getPotentialAction()
    {
        return $this->potentialAction;
    }

    /**
     * @param Action $potentialAction
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPotentialAction($potentialAction)
    {
        $types = array(
            "Action",
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDisambiguatingDescription($disambiguatingDescription)
    {
        $types = array(
            "string",
        );

        $disambiguatingDescription = self::checkTypes($disambiguatingDescription, $types);

        $this->disambiguatingDescription = $disambiguatingDescription;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAlternateName($alternateName)
    {
        $types = array(
            "string",
        );

        $alternateName = self::checkTypes($alternateName, $types);

        $this->alternateName = $alternateName;
    }

}
