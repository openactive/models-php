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

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     *
     *
     * @var DateTime|null
     */
    protected $lastReviewed;

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.<br/><br/>
     * 
     * The <em>speakable</em> property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:<br/><br/>
     * 
     * 1.) <em>id-value</em> URL references - uses <em>id-value</em> of an element in the page being annotated. The simplest use of <em>speakable</em> has (potentially relative) URL values, referencing identified sections of the document concerned.<br/><br/>
     * 
     * 2.) CSS Selectors - addresses content in the annotated page, eg. via class attribute. Use the <a class="localLink" href="https://schema.org/cssSelector">cssSelector</a> property.<br/><br/>
     * 
     * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the <a class="localLink" href="https://schema.org/xpath">xpath</a> property.<br/><br/>
     * 
     * For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
     * we define a supporting type, <a class="localLink" href="https://schema.org/SpeakableSpecification">SpeakableSpecification</a>  which is defined to be a possible value of the <em>speakable</em> property.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\SpeakableSpecification
     */
    protected $speakable;

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\BreadcrumbList
     */
    protected $breadcrumb;

    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     *
     * @var string
     */
    protected $significantLink;

    /**
     * A link related to this web page, for example to other related web pages.
     *
     *
     * @var string
     */
    protected $relatedLink;

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebPageElement
     */
    protected $mainContentOfPage;

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     *
     *
     * @var Person|Organization
     */
    protected $reviewedBy;

    /**
     * Indicates the main image on the page.
     *
     *
     * @var ImageObject
     */
    protected $primaryImageOfPage;

    /**
     * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     *
     * @var string
     */
    protected $significantLinks;

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     *
     * @var Schema.NET.Specialty|null
     */
    protected $specialty;

    /**
     * @return DateTime|null
     */
    public function getLastReviewed()
    {
        return $this->lastReviewed;
    }

    /**
     * @param DateTime|null $lastReviewed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLastReviewed($lastReviewed)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $lastReviewed = self::checkTypes($lastReviewed, $types);

        $this->lastReviewed = $lastReviewed;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\SpeakableSpecification",
        );

        $speakable = self::checkTypes($speakable, $types);

        $this->speakable = $speakable;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\BreadcrumbList
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\BreadcrumbList $breadcrumb
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBreadcrumb($breadcrumb)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\BreadcrumbList",
        );

        $breadcrumb = self::checkTypes($breadcrumb, $types);

        $this->breadcrumb = $breadcrumb;
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
        $types = array(
            "string",
        );

        $significantLink = self::checkTypes($significantLink, $types);

        $this->significantLink = $significantLink;
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
        $types = array(
            "string",
        );

        $relatedLink = self::checkTypes($relatedLink, $types);

        $this->relatedLink = $relatedLink;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebPageElement
     */
    public function getMainContentOfPage()
    {
        return $this->mainContentOfPage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebPageElement $mainContentOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMainContentOfPage($mainContentOfPage)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\WebPageElement",
        );

        $mainContentOfPage = self::checkTypes($mainContentOfPage, $types);

        $this->mainContentOfPage = $mainContentOfPage;
    }

    /**
     * @return Person|Organization
     */
    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }

    /**
     * @param Person|Organization $reviewedBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewedBy($reviewedBy)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $reviewedBy = self::checkTypes($reviewedBy, $types);

        $this->reviewedBy = $reviewedBy;
    }

    /**
     * @return ImageObject
     */
    public function getPrimaryImageOfPage()
    {
        return $this->primaryImageOfPage;
    }

    /**
     * @param ImageObject $primaryImageOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrimaryImageOfPage($primaryImageOfPage)
    {
        $types = array(
            "ImageObject",
        );

        $primaryImageOfPage = self::checkTypes($primaryImageOfPage, $types);

        $this->primaryImageOfPage = $primaryImageOfPage;
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
        $types = array(
            "string",
        );

        $significantLinks = self::checkTypes($significantLinks, $types);

        $this->significantLinks = $significantLinks;
    }

    /**
     * @return Schema.NET.Specialty|null
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param Schema.NET.Specialty|null $specialty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpecialty($specialty)
    {
        $types = array(
            "Schema.NET.Specialty",
            "null",
        );

        $specialty = self::checkTypes($specialty, $types);

        $this->specialty = $specialty;
    }

}
