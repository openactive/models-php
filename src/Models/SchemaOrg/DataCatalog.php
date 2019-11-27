<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DataCatalog extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DataCatalog";
    }

    public static function fieldList() {
        $fields = [
            "measurementTechnique" => "measurementTechnique",
            "dataset" => "dataset",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

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
     * A dataset contained in this catalog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Dataset
     */
    protected $dataset;

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

    /**
     * @return \OpenActive\Models\SchemaOrg\Dataset
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Dataset $dataset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDataset($dataset)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Dataset",
        );

        $dataset = self::checkTypes($dataset, $types);

        $this->dataset = $dataset;
    }

}
