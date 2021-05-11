<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalRiskFactor extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalRiskFactor";
    }

    public static function fieldList() {
        $fields = [
            "increasesRiskOf" => "increasesRiskOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The condition, complication, etc. influenced by this factor.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    protected $increasesRiskOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    public function getIncreasesRiskOf()
    {
        return $this->increasesRiskOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity $increasesRiskOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncreasesRiskOf($increasesRiskOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
        ];

        $increasesRiskOf = self::checkTypes($increasesRiskOf, $types);

        $this->increasesRiskOf = $increasesRiskOf;
    }

}
