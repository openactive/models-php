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
            "dataset" => "dataset",
            "measurementTechnique" => "measurementTechnique",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A dataset contained in this catalog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Dataset
     */
    protected $dataset;

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Dataset",
        ];

        $dataset = self::checkTypes($dataset, $types);

        $this->dataset = $dataset;
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

}
