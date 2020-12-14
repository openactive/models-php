<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalConditionStage extends \OpenActive\Models\SchemaOrg\MedicalIntangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalConditionStage";
    }

    public static function fieldList() {
        $fields = [
            "stageAsNumber" => "stageAsNumber",
            "subStageSuffix" => "subStageSuffix",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The stage represented as a number, e.g. 3.
     *
     *
     * @var Number|null
     */
    protected $stageAsNumber;

    /**
     * The substage, e.g. 'a' for Stage IIIa.
     *
     *
     * @var string
     */
    protected $subStageSuffix;

    /**
     * @return Number|null
     */
    public function getStageAsNumber()
    {
        return $this->stageAsNumber;
    }

    /**
     * @param Number|null $stageAsNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStageAsNumber($stageAsNumber)
    {
        $types = [
            "Number",
            "null",
        ];

        $stageAsNumber = self::checkTypes($stageAsNumber, $types);

        $this->stageAsNumber = $stageAsNumber;
    }

    /**
     * @return string
     */
    public function getSubStageSuffix()
    {
        return $this->subStageSuffix;
    }

    /**
     * @param string $subStageSuffix
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubStageSuffix($subStageSuffix)
    {
        $types = [
            "string",
        ];

        $subStageSuffix = self::checkTypes($subStageSuffix, $types);

        $this->subStageSuffix = $subStageSuffix;
    }

}
