<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalTrial extends \OpenActive\Models\SchemaOrg\MedicalStudy
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalTrial";
    }

    public static function fieldList() {
        $fields = [
            "trialDesign" => "trialDesign",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifics about the trial design (enumerated).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTrialDesign
     */
    protected $trialDesign;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTrialDesign
     */
    public function getTrialDesign()
    {
        return $this->trialDesign;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTrialDesign $trialDesign
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrialDesign($trialDesign)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTrialDesign",
        ];

        $trialDesign = self::checkTypes($trialDesign, $types);

        $this->trialDesign = $trialDesign;
    }

}
