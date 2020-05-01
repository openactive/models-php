<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Hospital extends \OpenActive\Models\SchemaOrg\EmergencyService
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Hospital";
    }

    public static function fieldList() {
        $fields = [
            "healthcareReportingData" => "healthcareReportingData",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates data describing a hospital, e.g. a CDC <a class="localLink" href="https://schema.org/CDCPMDRecord">CDCPMDRecord</a> or as some kind of <a class="localLink" href="https://schema.org/Dataset">Dataset</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\CDCPMDRecord
     */
    protected $healthcareReportingData;

    /**
     * @return \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\CDCPMDRecord
     */
    public function getHealthcareReportingData()
    {
        return $this->healthcareReportingData;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Dataset|\OpenActive\Models\SchemaOrg\CDCPMDRecord $healthcareReportingData
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthcareReportingData($healthcareReportingData)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Dataset",
            "\OpenActive\Models\SchemaOrg\CDCPMDRecord",
        );

        $healthcareReportingData = self::checkTypes($healthcareReportingData, $types);

        $this->healthcareReportingData = $healthcareReportingData;
    }

}
