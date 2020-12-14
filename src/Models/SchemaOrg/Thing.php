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
            "image" => "image",
            "additionalType" => "additionalType",
            "alternateName" => "alternateName",
            "mainEntityOfPage" => "mainEntityOfPage",
            "sameAs" => "sameAs",
            "disambiguatingDescription" => "disambiguatingDescription",
            "url" => "url",
            "subjectOf" => "subjectOf",
            "potentialAction" => "potentialAction",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.
     *         
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
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
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ImageObject
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
     * An alias for the item.
     *
     *
     * @var string
     */
    protected $alternateName;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $mainEntityOfPage;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
     *
     *
     * @var string
     */
    protected $sameAs;

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     *
     *
     * @var string
     */
    protected $disambiguatingDescription;

    /**
     * URL of the item.
     *
     *
     * @var string
     */
    protected $url;

    /**
     * A CreativeWork or Event about this Thing.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $subjectOf;

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Action
     */
    protected $potentialAction;

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

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
        $types = [
            "string",
        ];

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
        $types = [
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ImageObject $image
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ImageObject",
        ];

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
        $types = [
            "string",
        ];

        $additionalType = self::checkTypes($additionalType, $types);

        $this->additionalType = $additionalType;
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
        $types = [
            "string",
        ];

        $alternateName = self::checkTypes($alternateName, $types);

        $this->alternateName = $alternateName;
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
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $mainEntityOfPage = self::checkTypes($mainEntityOfPage, $types);

        $this->mainEntityOfPage = $mainEntityOfPage;
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
        $types = [
            "string",
        ];

        $sameAs = self::checkTypes($sameAs, $types);

        $this->sameAs = $sameAs;
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
        $types = [
            "string",
        ];

        $disambiguatingDescription = self::checkTypes($disambiguatingDescription, $types);

        $this->disambiguatingDescription = $disambiguatingDescription;
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
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $subjectOf = self::checkTypes($subjectOf, $types);

        $this->subjectOf = $subjectOf;
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
        $types = [
            "\OpenActive\Models\SchemaOrg\Action",
        ];

        $potentialAction = self::checkTypes($potentialAction, $types);

        $this->potentialAction = $potentialAction;
    }

}
