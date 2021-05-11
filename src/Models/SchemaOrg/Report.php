<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Report extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Report";
    }

    public static function fieldList() {
        $fields = [
            "reportNumber" => "reportNumber",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number or other unique designator assigned to a Report by the publishing organization.
     *
     *
     * @var string
     */
    protected $reportNumber;

    /**
     * @return string
     */
    public function getReportNumber()
    {
        return $this->reportNumber;
    }

    /**
     * @param string $reportNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReportNumber($reportNumber)
    {
        $types = [
            "string",
        ];

        $reportNumber = self::checkTypes($reportNumber, $types);

        $this->reportNumber = $reportNumber;
    }

}
