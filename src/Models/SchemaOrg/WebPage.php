<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WebPage extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WebPage";
    }

    public static function fieldList() {
        $fields = [
            "lastReviewed" => "lastReviewed",
            "specialty" => "specialty",
            "primaryImageOfPage" => "primaryImageOfPage",
            "significantLink" => "significantLink",
            "reviewedBy" => "reviewedBy",
            "mainContentOfPage" => "mainContentOfPage",
            "relatedLink" => "relatedLink",
            "speakable" => "speakable",
            "breadcrumb" => "breadcrumb",
            "significantLinks" => "significantLinks",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     *
     *
     * @var Date|null
     */
    protected $lastReviewed;

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\Specialty|null
     */
    protected $specialty;

    /**
     * Indicates the main image on the page.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $primaryImageOfPage;

    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     *
     * @var string
     */
    protected $significantLink;

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $reviewedBy;

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebPageElement|string
     */
    protected $mainContentOfPage;

    /**
     * A link related to this web page, for example to other related web pages.
     *
     *
     * @var string
     */
    protected $relatedLink;

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.
     * 
     * The *speakable* property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:
     * 
     * 1.) *id-value* URL references - uses *id-value* of an element in the page being annotated. The simplest use of *speakable* has (potentially relative) URL values, referencing identified sections of the document concerned.
     * 
     * 2.) CSS Selectors - addresses content in the annotated page, eg. via class attribute. Use the [[cssSelector]] property.
     * 
     * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the [[xpath]] property.
     * 
     * 
     * For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
     * we define a supporting type, [[SpeakableSpecification]]  which is defined to be a possible value of the *speakable* property.
     *          
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\SpeakableSpecification
     */
    protected $speakable;

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BreadcrumbList|string
     */
    protected $breadcrumb;

    /**
     * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     *
     * @var string
     */
    protected $significantLinks;

    /**
     * @return Date|null
     */
    public function getLastReviewed()
    {
        return $this->lastReviewed;
    }

    /**
     * @param Date|null $lastReviewed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLastReviewed($lastReviewed)
    {
        $types = [
            "Date",
            "null",
        ];

        $lastReviewed = self::checkTypes($lastReviewed, $types);

        $this->lastReviewed = $lastReviewed;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\Specialty|null
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\Specialty|null $specialty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpecialty($specialty)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\Specialty",
            "null",
        ];

        $specialty = self::checkTypes($specialty, $types);

        $this->specialty = $specialty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getPrimaryImageOfPage()
    {
        return $this->primaryImageOfPage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $primaryImageOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrimaryImageOfPage($primaryImageOfPage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        ];

        $primaryImageOfPage = self::checkTypes($primaryImageOfPage, $types);

        $this->primaryImageOfPage = $primaryImageOfPage;
    }

    /**
     * @return string
     */
    public function getSignificantLink()
    {
        return $this->significantLink;
    }

    /**
     * @param string $significantLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSignificantLink($significantLink)
    {
        $types = [
            "string",
        ];

        $significantLink = self::checkTypes($significantLink, $types);

        $this->significantLink = $significantLink;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $reviewedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewedBy($reviewedBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $reviewedBy = self::checkTypes($reviewedBy, $types);

        $this->reviewedBy = $reviewedBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebPageElement|string
     */
    public function getMainContentOfPage()
    {
        return $this->mainContentOfPage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebPageElement|string $mainContentOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMainContentOfPage($mainContentOfPage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebPageElement",
            "string",
        ];

        $mainContentOfPage = self::checkTypes($mainContentOfPage, $types);

        $this->mainContentOfPage = $mainContentOfPage;
    }

    /**
     * @return string
     */
    public function getRelatedLink()
    {
        return $this->relatedLink;
    }

    /**
     * @param string $relatedLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedLink($relatedLink)
    {
        $types = [
            "string",
        ];

        $relatedLink = self::checkTypes($relatedLink, $types);

        $this->relatedLink = $relatedLink;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\SpeakableSpecification
     */
    public function getSpeakable()
    {
        return $this->speakable;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\SpeakableSpecification $speakable
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpeakable($speakable)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\SpeakableSpecification",
        ];

        $speakable = self::checkTypes($speakable, $types);

        $this->speakable = $speakable;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BreadcrumbList|string
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BreadcrumbList|string $breadcrumb
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBreadcrumb($breadcrumb)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BreadcrumbList",
            "string",
        ];

        $breadcrumb = self::checkTypes($breadcrumb, $types);

        $this->breadcrumb = $breadcrumb;
    }

    /**
     * @return string
     */
    public function getSignificantLinks()
    {
        return $this->significantLinks;
    }

    /**
     * @param string $significantLinks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSignificantLinks($significantLinks)
    {
        $types = [
            "string",
        ];

        $significantLinks = self::checkTypes($significantLinks, $types);

        $this->significantLinks = $significantLinks;
    }

}
