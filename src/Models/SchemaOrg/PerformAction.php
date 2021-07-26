<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PerformAction extends \OpenActive\Models\SchemaOrg\PlayAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PerformAction";
    }

    public static function fieldList() {
        $fields = [
            "entertainmentBusiness" => "entertainmentBusiness",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of location. The entertainment business where the action occurred.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EntertainmentBusiness|string
     */
    protected $entertainmentBusiness;

    /**
     * @return \OpenActive\Models\SchemaOrg\EntertainmentBusiness|string
     */
    public function getEntertainmentBusiness()
    {
        return $this->entertainmentBusiness;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EntertainmentBusiness|string $entertainmentBusiness
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEntertainmentBusiness($entertainmentBusiness)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EntertainmentBusiness",
            "string",
        ];

        $entertainmentBusiness = self::checkTypes($entertainmentBusiness, $types);

        $this->entertainmentBusiness = $entertainmentBusiness;
    }

}
