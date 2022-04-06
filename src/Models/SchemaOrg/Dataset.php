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

    public static function fieldList() {
        $fields = [
            "catalog" => "catalog",
            "includedDataCatalog" => "includedDataCatalog",
            "variableMeasured" => "variableMeasured",
            "measurementTechnique" => "measurementTechnique",
            "datasetTimeInterval" => "datasetTimeInterval",
            "distribution" => "distribution",
            "issn" => "issn",
            "includedInDataCatalog" => "includedInDataCatalog",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A data catalog which contains this dataset.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    protected $catalog;

    /**
     * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    protected $includedDataCatalog;

    /**
     * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $variableMeasured;

    /**
     * A technique or technology used in a [[Dataset]] (or [[DataDownload]], [[DataCatalog]]),
     * corresponding to the method used for measuring the corresponding variable(s) (described using [[variableMeasured]]). This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but rather as a high level summary for dataset discovery.
     * 
     * For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence".
     * 
     * If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory".
     * 
     * If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]].
     *       
     *
     *
     * @var string
     */
    protected $measurementTechnique;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     *
     * @var DateTime|null
     */
    protected $datasetTimeInterval;

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataDownload|string
     */
    protected $distribution;

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
     * @var \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    protected $includedInDataCatalog;

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog|string $catalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCatalog($catalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataCatalog",
            "string",
        ];

        $catalog = self::checkTypes($catalog, $types);

        $this->catalog = $catalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    public function getIncludedDataCatalog()
    {
        return $this->includedDataCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog|string $includedDataCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedDataCatalog($includedDataCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataCatalog",
            "string",
        ];

        $includedDataCatalog = self::checkTypes($includedDataCatalog, $types);

        $this->includedDataCatalog = $includedDataCatalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getVariableMeasured()
    {
        return $this->variableMeasured;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $variableMeasured
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVariableMeasured($variableMeasured)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $variableMeasured = self::checkTypes($variableMeasured, $types);

        $this->variableMeasured = $variableMeasured;
    }

    /**
     * @return string
     */
    public function getMeasurementTechnique()
    {
        return $this->measurementTechnique;
    }

    /**
     * @param string $measurementTechnique
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementTechnique($measurementTechnique)
    {
        $types = [
            "string",
        ];

        $measurementTechnique = self::checkTypes($measurementTechnique, $types);

        $this->measurementTechnique = $measurementTechnique;
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
        $types = [
            "DateTime",
            "null",
        ];

        $datasetTimeInterval = self::checkTypes($datasetTimeInterval, $types);

        $this->datasetTimeInterval = $datasetTimeInterval;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataDownload|string
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataDownload|string $distribution
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistribution($distribution)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataDownload",
            "string",
        ];

        $distribution = self::checkTypes($distribution, $types);

        $this->distribution = $distribution;
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
        $types = [
            "string",
        ];

        $issn = self::checkTypes($issn, $types);

        $this->issn = $issn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    public function getIncludedInDataCatalog()
    {
        return $this->includedInDataCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog|string $includedInDataCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedInDataCatalog($includedInDataCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataCatalog",
            "string",
        ];

        $includedInDataCatalog = self::checkTypes($includedInDataCatalog, $types);

        $this->includedInDataCatalog = $includedInDataCatalog;
    }

}
