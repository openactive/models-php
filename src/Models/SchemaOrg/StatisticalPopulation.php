<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class StatisticalPopulation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:StatisticalPopulation";
    }

    public static function fieldList() {
        $fields = [
            "populationType" => "populationType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class|string
     */
    protected $populationType;

    /**
     * @return \OpenActive\Models\SchemaOrg\Class|string
     */
    public function getPopulationType()
    {
        return $this->populationType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Class|string $populationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPopulationType($populationType)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Class",
            "string",
        ];

        $populationType = self::checkTypes($populationType, $types);

        $this->populationType = $populationType;
    }

}
