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
            "includedInDataCatalog" => "includedInDataCatalog",
            "datasetTimeInterval" => "datasetTimeInterval",
            "issn" => "issn",
            "catalog" => "catalog",
            "includedDataCatalog" => "includedDataCatalog",
            "distribution" => "distribution",
            "variableMeasured" => "variableMeasured",
            "measurementTechnique" => "measurementTechnique",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A data catalog which contains this dataset.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog
     */
    protected $includedInDataCatalog;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     *
     * @var null|DateTime
     */
    protected $datasetTimeInterval;

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
     * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog
     */
    protected $includedDataCatalog;

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataDownload
     */
    protected $distribution;

    /**
     * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $variableMeasured;

    /**
     * A technique or technology used in a <a class="localLink" href="https://schema.org/Dataset">Dataset</a> (or <a class="localLink" href="https://schema.org/DataDownload">DataDownload</a>, <a class="localLink" href="https://schema.org/DataCatalog">DataCatalog</a>),
     * corresponding to the method used for measuring the corresponding variable(s) (described using <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a>). This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but rather as a high level summary for dataset discovery.<br/><br/>
     * 
     * For example, if <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> is: molecule concentration, <a class="localLink" href="https://schema.org/measurementTechnique">measurementTechnique</a> could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence".<br/><br/>
     * 
     * If the <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> is "depression rating", the <a class="localLink" href="https://schema.org/measurementTechnique">measurementTechnique</a> could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory".<br/><br/>
     * 
     * If there are several <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> properties recorded for some given data object, use a <a class="localLink" href="https://schema.org/PropertyValue">PropertyValue</a> for each <a class="localLink" href="https://schema.org/variableMeasured">variableMeasured</a> and attach the corresponding <a class="localLink" href="https://schema.org/measurementTechnique">measurementTechnique</a>.
     *
     *
     * @var string
     */
    protected $measurementTechnique;

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

    /**
     * @return null|DateTime
     */
    public function getDatasetTimeInterval()
    {
        return $this->datasetTimeInterval;
    }

    /**
     * @param null|DateTime $datasetTimeInterval
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatasetTimeInterval($datasetTimeInterval)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $datasetTimeInterval = self::checkTypes($datasetTimeInterval, $types);

        $this->datasetTimeInterval = $datasetTimeInterval;
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
     * @return \OpenActive\Models\SchemaOrg\DataDownload
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataDownload $distribution
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistribution($distribution)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DataDownload",
        );

        $distribution = self::checkTypes($distribution, $types);

        $this->distribution = $distribution;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        );

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
        $types = array(
            "string",
        );

        $measurementTechnique = self::checkTypes($measurementTechnique, $types);

        $this->measurementTechnique = $measurementTechnique;
    }

}
