<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Article extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     *
     *
     * @var string
     */
    protected $pagination;

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
     * @var \OpenActive\Models\SchemaOrg\SpeakableSpecification|string
     */
    protected $speakable;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     *
     * @var int|string|null
     */
    protected $pageEnd;

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     *
     *
     * @var string
     */
    protected $articleSection;

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     *
     * @var int|string|null
     */
    protected $pageStart;

    /**
     * The number of words in the text of the Article.
     *
     *
     * @var int|null
     */
    protected $wordCount;

    /**
     * The actual body of the article.
     *
     *
     * @var string
     */
    protected $articleBody;

    /**
     * @return string
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param string $pagination
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPagination($pagination)
    {
        $types = array(
            "string",
        );

        $pagination = self::checkTypes($pagination, $types);

        $this->pagination = $pagination;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SpeakableSpecification|string
     */
    public function getSpeakable()
    {
        return $this->speakable;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SpeakableSpecification|string $speakable
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSpeakable($speakable)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SpeakableSpecification",
            "string",
        );

        $speakable = self::checkTypes($speakable, $types);

        $this->speakable = $speakable;
    }

    /**
     * @return int|string|null
     */
    public function getPageEnd()
    {
        return $this->pageEnd;
    }

    /**
     * @param int|string|null $pageEnd
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPageEnd($pageEnd)
    {
        $types = array(
            "int",
            "string",
            "null",
        );

        $pageEnd = self::checkTypes($pageEnd, $types);

        $this->pageEnd = $pageEnd;
    }

    /**
     * @return string
     */
    public function getArticleSection()
    {
        return $this->articleSection;
    }

    /**
     * @param string $articleSection
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setArticleSection($articleSection)
    {
        $types = array(
            "string",
        );

        $articleSection = self::checkTypes($articleSection, $types);

        $this->articleSection = $articleSection;
    }

    /**
     * @return int|string|null
     */
    public function getPageStart()
    {
        return $this->pageStart;
    }

    /**
     * @param int|string|null $pageStart
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPageStart($pageStart)
    {
        $types = array(
            "int",
            "string",
            "null",
        );

        $pageStart = self::checkTypes($pageStart, $types);

        $this->pageStart = $pageStart;
    }

    /**
     * @return int|null
     */
    public function getWordCount()
    {
        return $this->wordCount;
    }

    /**
     * @param int|null $wordCount
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setWordCount($wordCount)
    {
        $types = array(
            "int",
            "null",
        );

        $wordCount = self::checkTypes($wordCount, $types);

        $this->wordCount = $wordCount;
    }

    /**
     * @return string
     */
    public function getArticleBody()
    {
        return $this->articleBody;
    }

    /**
     * @param string $articleBody
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setArticleBody($articleBody)
    {
        $types = array(
            "string",
        );

        $articleBody = self::checkTypes($articleBody, $types);

        $this->articleBody = $articleBody;
    }

}
