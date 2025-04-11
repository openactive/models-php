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
            "pageStart" => "pageStart",
            "issueNumber" => "issueNumber",
            "pageEnd" => "pageEnd",
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
     * The page on which the work starts; for example "135" or "xiii".
     *
     *
     * @var string|int|null
     */
    protected $pageStart;

    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     *
     *
     * @var string|int|null
     */
    protected $issueNumber;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     *
     * @var string|int|null
     */
    protected $pageEnd;

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
     * @return string|int|null
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @param string|int|null $issueNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssueNumber($issueNumber)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $issueNumber = self::checkTypes($issueNumber, $types);

        $this->issueNumber = $issueNumber;
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

}
