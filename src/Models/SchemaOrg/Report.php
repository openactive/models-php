<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Report extends \OpenActive\Models\SchemaOrg\Article
{
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
        $types = array(
            "string",
        );

        $reportNumber = self::checkTypes($reportNumber, $types);

        $this->reportNumber = $reportNumber;
    }

}
