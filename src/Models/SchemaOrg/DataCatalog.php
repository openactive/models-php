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
    static public function getType()
    {
        return "schema:DataCatalog";
    }

    /**
     * A dataset contained in this catalog.
     *
     *
     * @var Dataset
     */
    protected $dataset;

    /**
     * @return Dataset
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * @param Dataset $dataset
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDataset($dataset)
    {
        $types = array(
            "Dataset",
        );

        $dataset = self::checkTypes($dataset, $types);

        $this->dataset = $dataset;
    }

}
