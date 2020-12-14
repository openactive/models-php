<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DrugClass extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DrugClass";
    }

    public static function fieldList() {
        $fields = [
            "drug" => "drug",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifying a drug or medicine used in a medication procedure
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug
     */
    protected $drug;

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug
     */
    public function getDrug()
    {
        return $this->drug;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug $drug
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrug($drug)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
        ];

        $drug = self::checkTypes($drug, $types);

        $this->drug = $drug;
    }

}
