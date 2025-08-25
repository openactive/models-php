<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TherapeuticProcedure extends \OpenActive\Models\SchemaOrg\MedicalProcedure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TherapeuticProcedure";
    }

    public static function fieldList() {
        $fields = [
            "doseSchedule" => "doseSchedule",
            "drug" => "drug",
            "adverseOutcome" => "adverseOutcome",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DoseSchedule|string
     */
    protected $doseSchedule;

    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug|string
     */
    protected $drug;

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $adverseOutcome;

    /**
     * @return \OpenActive\Models\SchemaOrg\DoseSchedule|string
     */
    public function getDoseSchedule()
    {
        return $this->doseSchedule;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DoseSchedule|string $doseSchedule
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDoseSchedule($doseSchedule)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DoseSchedule",
            "string",
        ];

        $doseSchedule = self::checkTypes($doseSchedule, $types);

        $this->doseSchedule = $doseSchedule;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug|string
     */
    public function getDrug()
    {
        return $this->drug;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug|string $drug
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrug($drug)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
            "string",
        ];

        $drug = self::checkTypes($drug, $types);

        $this->drug = $drug;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    public function getAdverseOutcome()
    {
        return $this->adverseOutcome;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity|string $adverseOutcome
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdverseOutcome($adverseOutcome)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "string",
        ];

        $adverseOutcome = self::checkTypes($adverseOutcome, $types);

        $this->adverseOutcome = $adverseOutcome;
    }

}
