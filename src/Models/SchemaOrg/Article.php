<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Article extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Article";
    }

    public static function fieldList() {
        $fields = [
            "pageStart" => "pageStart",
            "articleSection" => "articleSection",
            "pageEnd" => "pageEnd",
            "backstory" => "backstory",
            "wordCount" => "wordCount",
            "articleBody" => "articleBody",
            "speakable" => "speakable",
            "pagination" => "pagination",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     *
     * @var string|int|null
     */
    protected $pageStart;

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     *
     *
     * @var string
     */
    protected $articleSection;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     *
     * @var string|int|null
     */
    protected $pageEnd;

    /**
     * For an [[Article]], typically a [[NewsArticle]], the backstory property provides a textual summary giving a brief explanation of why and how an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $backstory;

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
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     *
     *
     * @var string
     */
    protected $pagination;

    /**
     * @return string|int|null
     */
    public function getPageStart()
    {
        return $this->pageStart;
    }

    /**
     * @param string|int|null $pageStart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPageStart($pageStart)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $pageStart = self::checkTypes($pageStart, $types);

        $this->pageStart = $pageStart;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArticleSection($articleSection)
    {
        $types = [
            "string",
        ];

        $articleSection = self::checkTypes($articleSection, $types);

        $this->articleSection = $articleSection;
    }

    /**
     * @return string|int|null
     */
    public function getPageEnd()
    {
        return $this->pageEnd;
    }

    /**
     * @param string|int|null $pageEnd
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPageEnd($pageEnd)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $pageEnd = self::checkTypes($pageEnd, $types);

        $this->pageEnd = $pageEnd;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getBackstory()
    {
        return $this->backstory;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $backstory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBackstory($backstory)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $backstory = self::checkTypes($backstory, $types);

        $this->backstory = $backstory;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWordCount($wordCount)
    {
        $types = [
            "int",
            "null",
        ];

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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArticleBody($articleBody)
    {
        $types = [
            "string",
        ];

        $articleBody = self::checkTypes($articleBody, $types);

        $this->articleBody = $articleBody;
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
     * @return string
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param string $pagination
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPagination($pagination)
    {
        $types = [
            "string",
        ];

        $pagination = self::checkTypes($pagination, $types);

        $this->pagination = $pagination;
    }

}
