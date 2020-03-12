<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PublicationIssue extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PublicationIssue";
    }

    public static function fieldList() {
        $fields = [
            "pagination" => "pagination",
            "issueNumber" => "issueNumber",
            "pageEnd" => "pageEnd",
            "pageStart" => "pageStart",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     *
     *
     * @var string
     */
    protected $pagination;

    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     *
     *
     * @var null|int|string
     */
    protected $issueNumber;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     *
     * @var null|int|string
     */
    protected $pageEnd;

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     *
     * @var null|int|string
     */
    protected $pageStart;

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
        $types = array(
            "string",
        );

        $pagination = self::checkTypes($pagination, $types);

        $this->pagination = $pagination;
    }

    /**
     * @return null|int|string
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @param null|int|string $issueNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssueNumber($issueNumber)
    {
        $types = array(
            "null",
            "int",
            "string",
        );

        $issueNumber = self::checkTypes($issueNumber, $types);

        $this->issueNumber = $issueNumber;
    }

    /**
     * @return null|int|string
     */
    public function getPageEnd()
    {
        return $this->pageEnd;
    }

    /**
     * @param null|int|string $pageEnd
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPageEnd($pageEnd)
    {
        $types = array(
            "null",
            "int",
            "string",
        );

        $pageEnd = self::checkTypes($pageEnd, $types);

        $this->pageEnd = $pageEnd;
    }

    /**
     * @return null|int|string
     */
    public function getPageStart()
    {
        return $this->pageStart;
    }

    /**
     * @param null|int|string $pageStart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPageStart($pageStart)
    {
        $types = array(
            "null",
            "int",
            "string",
        );

        $pageStart = self::checkTypes($pageStart, $types);

        $this->pageStart = $pageStart;
    }

}
