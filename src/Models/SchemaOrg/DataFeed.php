<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DataFeed extends \OpenActive\Models\SchemaOrg\Dataset
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DataFeed";
    }

    public static function fieldList() {
        $fields = [
            "dataFeedElement" => "dataFeedElement",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An item within a data feed. Data feeds may have many elements.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataFeedItem|string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $dataFeedElement;

    /**
     * @return \OpenActive\Models\SchemaOrg\DataFeedItem|string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getDataFeedElement()
    {
        return $this->dataFeedElement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataFeedItem|string|\OpenActive\Models\SchemaOrg\Thing $dataFeedElement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDataFeedElement($dataFeedElement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataFeedItem",
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $dataFeedElement = self::checkTypes($dataFeedElement, $types);

        $this->dataFeedElement = $dataFeedElement;
    }

}
