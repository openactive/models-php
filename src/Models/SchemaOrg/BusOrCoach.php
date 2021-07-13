<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BusOrCoach extends \OpenActive\Models\SchemaOrg\Vehicle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BusOrCoach";
    }

    public static function fieldList() {
        $fields = [
            "acrissCode" => "acrissCode",
            "roofLoad" => "roofLoad",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association of Car Rental Industry Systems and Standards.
     *
     *
     * @var string
     */
    protected $acrissCode;

    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on top of the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]]\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $roofLoad;

    /**
     * @return string
     */
    public function getAcrissCode()
    {
        return $this->acrissCode;
    }

    /**
     * @param string $acrissCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcrissCode($acrissCode)
    {
        $types = [
            "string",
        ];

        $acrissCode = self::checkTypes($acrissCode, $types);

        $this->acrissCode = $acrissCode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getRoofLoad()
    {
        return $this->roofLoad;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $roofLoad
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRoofLoad($roofLoad)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $roofLoad = self::checkTypes($roofLoad, $types);

        $this->roofLoad = $roofLoad;
    }

}
