<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class DataFeed extends \OpenActive\Models\SchemaOrg\Dataset
{
    /**
     * An item within in a data feed. Data feeds may have many elements.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\DataFeedItem|string
     */
    protected $dataFeedElement;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\DataFeedItem|string
     */
    public function getDataFeedElement()
    {
        return $this->dataFeedElement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\DataFeedItem|string $dataFeedElement
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDataFeedElement($dataFeedElement)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\DataFeedItem",
            "string",
        );

        $dataFeedElement = self::checkTypes($dataFeedElement, $types);

        $this->dataFeedElement = $dataFeedElement;
    }

}
