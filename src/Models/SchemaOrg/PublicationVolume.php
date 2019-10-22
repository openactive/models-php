<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PublicationVolume extends \OpenActive\Models\SchemaOrg\CreativeWork
{
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
     * @var int|string|null
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
     * @return string|int|null
     */
    public function getVolumeNumber()
    {
        return $this->volumeNumber;
    }

    /**
     * @param string|int|null $volumeNumber
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
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

}
