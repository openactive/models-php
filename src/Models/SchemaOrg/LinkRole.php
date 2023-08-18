<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LinkRole extends \OpenActive\Models\SchemaOrg\Role
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LinkRole";
    }

    public static function fieldList() {
        $fields = [
            "inLanguage" => "inLanguage",
            "linkRelationship" => "linkRelationship",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $inLanguage;

    /**
     * Indicates the relationship type of a Web link. 
     *
     *
     * @var string
     */
    protected $linkRelationship;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        ];

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return string
     */
    public function getLinkRelationship()
    {
        return $this->linkRelationship;
    }

    /**
     * @param string $linkRelationship
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLinkRelationship($linkRelationship)
    {
        $types = [
            "string",
        ];

        $linkRelationship = self::checkTypes($linkRelationship, $types);

        $this->linkRelationship = $linkRelationship;
    }

}
