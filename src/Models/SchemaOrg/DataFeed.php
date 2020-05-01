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
     * An item within in a data feed. Data feeds may have many elements.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataFeedItem|\OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $dataFeedElement;

    /**
     * @return \OpenActive\Models\SchemaOrg\DataFeedItem|\OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getDataFeedElement()
    {
        return $this->dataFeedElement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataFeedItem|\OpenActive\Models\SchemaOrg\Thing|string $dataFeedElement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDataFeedElement($dataFeedElement)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DataFeedItem",
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        );

        $dataFeedElement = self::checkTypes($dataFeedElement, $types);

        $this->dataFeedElement = $dataFeedElement;
    }

}
