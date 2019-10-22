<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DataCatalog extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * A dataset contained in this catalog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Dataset
     */
    protected $dataset;

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
     * @throws \Exception If the provided argument is not of a supported type.
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
