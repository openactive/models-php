<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PublicationVolume extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PublicationVolume";
    }

    public static function fieldList() {
        $fields = [
            "pagination" => "pagination",
            "pageEnd" => "pageEnd",
            "volumeNumber" => "volumeNumber",
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
     * The page on which the work ends; for example "138" or "xvi".
     *
     *
     * @var int|string|null
     */
    protected $pageEnd;

    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
     *
     *
     * @var string|int|null
     */
    protected $volumeNumber;

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     *
     * @var string|int|null
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
     * @return int|string|null
     */
    public function getPageEnd()
    {
        return $this->pageEnd;
    }

    /**
     * @param int|string|null $pageEnd
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
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
     * @return string|int|null
     */
    public function getVolumeNumber()
    {
        return $this->volumeNumber;
    }

    /**
     * @param string|int|null $volumeNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVolumeNumber($volumeNumber)
    {
        $types = array(
            "string",
            "int",
            "null",
        );

        $volumeNumber = self::checkTypes($volumeNumber, $types);

        $this->volumeNumber = $volumeNumber;
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
        $types = array(
            "string",
            "int",
            "null",
        );

        $pageStart = self::checkTypes($pageStart, $types);

        $this->pageStart = $pageStart;
    }

}
