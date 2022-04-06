<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SpeakableSpecification extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SpeakableSpecification";
    }

    public static function fieldList() {
        $fields = [
            "cssSelector" => "cssSelector",
            "xpath" => "xpath",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CssSelectorType
     */
    protected $cssSelector;

    /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
     *
     *
     * @var \OpenActive\Models\SchemaOrg\XPathType
     */
    protected $xpath;

    /**
     * @return \OpenActive\Models\SchemaOrg\CssSelectorType
     */
    public function getCssSelector()
    {
        return $this->cssSelector;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CssSelectorType $cssSelector
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCssSelector($cssSelector)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CssSelectorType",
        ];

        $cssSelector = self::checkTypes($cssSelector, $types);

        $this->cssSelector = $cssSelector;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\XPathType
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\XPathType $xpath
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setXpath($xpath)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\XPathType",
        ];

        $xpath = self::checkTypes($xpath, $types);

        $this->xpath = $xpath;
    }

}
