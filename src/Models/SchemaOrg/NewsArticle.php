<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class NewsArticle extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:NewsArticle";
    }

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     *
     *
     * @var string
     */
    protected $printColumn;

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     *
     * @var string
     */
    protected $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     *
     *
     * @var string
     */
    protected $printSection;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
     *
     *
     * @var string
     */
    protected $printPage;

    /**
     * A <a href="https://en.wikipedia.org/wiki/Dateline">dateline</a> is a brief piece of text included in news articles that describes where and when the story was written or filed though the date is often omitted. Sometimes only a placename is provided.<br/><br/>
     * 
     * Structured representations of dateline-related information can also be expressed more explicitly using <a class="localLink" href="https://schema.org/locationCreated">locationCreated</a> (which represents where a work was created e.g. where a news report was written).  For location depicted or described in the content, use <a class="localLink" href="https://schema.org/contentLocation">contentLocation</a>.<br/><br/>
     * 
     * Dateline summaries are oriented more towards human readers than towards automated processing, and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
     *
     *
     * @var string
     */
    protected $dateline;

    /**
     * @return string
     */
    public function getPrintColumn()
    {
        return $this->printColumn;
    }

    /**
     * @param string $printColumn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrintColumn($printColumn)
    {
        $types = array(
            "string",
        );

        $printColumn = self::checkTypes($printColumn, $types);

        $this->printColumn = $printColumn;
    }

    /**
     * @return string
     */
    public function getPrintEdition()
    {
        return $this->printEdition;
    }

    /**
     * @param string $printEdition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrintEdition($printEdition)
    {
        $types = array(
            "string",
        );

        $printEdition = self::checkTypes($printEdition, $types);

        $this->printEdition = $printEdition;
    }

    /**
     * @return string
     */
    public function getPrintSection()
    {
        return $this->printSection;
    }

    /**
     * @param string $printSection
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrintSection($printSection)
    {
        $types = array(
            "string",
        );

        $printSection = self::checkTypes($printSection, $types);

        $this->printSection = $printSection;
    }

    /**
     * @return string
     */
    public function getPrintPage()
    {
        return $this->printPage;
    }

    /**
     * @param string $printPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrintPage($printPage)
    {
        $types = array(
            "string",
        );

        $printPage = self::checkTypes($printPage, $types);

        $this->printPage = $printPage;
    }

    /**
     * @return string
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * @param string $dateline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateline($dateline)
    {
        $types = array(
            "string",
        );

        $dateline = self::checkTypes($dateline, $types);

        $this->dateline = $dateline;
    }

}
