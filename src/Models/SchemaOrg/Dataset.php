<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Dataset extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Dataset";
    }

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     *
     *
     * @var DataDownload
     */
    protected $distribution;

    /**
     * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog
     */
    protected $includedDataCatalog;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     *
     *
     * @var string
     */
    protected $issn;

    /**
     * A data catalog which contains this dataset.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog
     */
    protected $catalog;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     *
     * @var DateTime|null
     */
    protected $datasetTimeInterval;

    /**
     * A data catalog which contains this dataset.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog
     */
    protected $includedInDataCatalog;

    /**
     * @return DataDownload
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param DataDownload $distribution
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistribution($distribution)
    {
        $types = array(
            "DataDownload",
        );

        $distribution = self::checkTypes($distribution, $types);

        $this->distribution = $distribution;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog
     */
    public function getIncludedDataCatalog()
    {
        return $this->includedDataCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog $includedDataCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedDataCatalog($includedDataCatalog)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DataCatalog",
        );

        $includedDataCatalog = self::checkTypes($includedDataCatalog, $types);

        $this->includedDataCatalog = $includedDataCatalog;
    }

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param string $issn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssn($issn)
    {
        $types = array(
            "string",
        );

        $issn = self::checkTypes($issn, $types);

        $this->issn = $issn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog $catalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCatalog($catalog)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DataCatalog",
        );

        $catalog = self::checkTypes($catalog, $types);

        $this->catalog = $catalog;
    }

    /**
     * @return DateTime|null
     */
    public function getDatasetTimeInterval()
    {
        return $this->datasetTimeInterval;
    }

    /**
     * @param DateTime|null $datasetTimeInterval
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatasetTimeInterval($datasetTimeInterval)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $datasetTimeInterval = self::checkTypes($datasetTimeInterval, $types);

        $this->datasetTimeInterval = $datasetTimeInterval;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog
     */
    public function getIncludedInDataCatalog()
    {
        return $this->includedInDataCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog $includedInDataCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedInDataCatalog($includedInDataCatalog)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DataCatalog",
        );

        $includedInDataCatalog = self::checkTypes($includedInDataCatalog, $types);

        $this->includedInDataCatalog = $includedInDataCatalog;
    }

}
