<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalCondition extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalCondition";
    }

    public static function fieldList() {
        $fields = [
            "signOrSymptom" => "signOrSymptom",
            "naturalProgression" => "naturalProgression",
            "secondaryPrevention" => "secondaryPrevention",
            "epidemiology" => "epidemiology",
            "possibleTreatment" => "possibleTreatment",
            "riskFactor" => "riskFactor",
            "status" => "status",
            "pathophysiology" => "pathophysiology",
            "typicalTest" => "typicalTest",
            "differentialDiagnosis" => "differentialDiagnosis",
            "drug" => "drug",
            "associatedAnatomy" => "associatedAnatomy",
            "possibleComplication" => "possibleComplication",
            "expectedPrognosis" => "expectedPrognosis",
            "stage" => "stage",
            "primaryPrevention" => "primaryPrevention",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experience of the medical condition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom|string
     */
    protected $signOrSymptom;

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     *
     *
     * @var string
     */
    protected $naturalProgression;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $secondaryPrevention;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     *
     * @var string
     */
    protected $epidemiology;

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $possibleTreatment;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalRiskFactor|string
     */
    protected $riskFactor;

    /**
     * The status of the study (enumerated).
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\EventStatusType|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|string|null
     */
    protected $status;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     *
     * @var string
     */
    protected $pathophysiology;

    /**
     * A medical test typically performed given this condition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    protected $typicalTest;

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DDxElement|string
     */
    protected $differentialDiagnosis;

    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug|string
     */
    protected $drug;

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\SuperficialAnatomy|\OpenActive\Models\SchemaOrg\AnatomicalSystem|string
     */
    protected $associatedAnatomy;

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
     *
     *
     * @var string
     */
    protected $possibleComplication;

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     *
     *
     * @var string
     */
    protected $expectedPrognosis;

    /**
     * The stage of the condition, if applicable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalConditionStage|string
     */
    protected $stage;

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $primaryPrevention;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom|string
     */
    public function getSignOrSymptom()
    {
        return $this->signOrSymptom;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSignOrSymptom|string $signOrSymptom
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSignOrSymptom($signOrSymptom)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSignOrSymptom",
            "string",
        ];

        $signOrSymptom = self::checkTypes($signOrSymptom, $types);

        $this->signOrSymptom = $signOrSymptom;
    }

    /**
     * @return string
     */
    public function getNaturalProgression()
    {
        return $this->naturalProgression;
    }

    /**
     * @param string $naturalProgression
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNaturalProgression($naturalProgression)
    {
        $types = [
            "string",
        ];

        $naturalProgression = self::checkTypes($naturalProgression, $types);

        $this->naturalProgression = $naturalProgression;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    public function getSecondaryPrevention()
    {
        return $this->secondaryPrevention;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTherapy|string $secondaryPrevention
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSecondaryPrevention($secondaryPrevention)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "string",
        ];

        $secondaryPrevention = self::checkTypes($secondaryPrevention, $types);

        $this->secondaryPrevention = $secondaryPrevention;
    }

    /**
     * @return string
     */
    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    /**
     * @param string $epidemiology
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpidemiology($epidemiology)
    {
        $types = [
            "string",
        ];

        $epidemiology = self::checkTypes($epidemiology, $types);

        $this->epidemiology = $epidemiology;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTherapy|string $possibleTreatment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPossibleTreatment($possibleTreatment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "string",
        ];

        $possibleTreatment = self::checkTypes($possibleTreatment, $types);

        $this->possibleTreatment = $possibleTreatment;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalRiskFactor|string
     */
    public function getRiskFactor()
    {
        return $this->riskFactor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalRiskFactor|string $riskFactor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRiskFactor($riskFactor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalRiskFactor",
            "string",
        ];

        $riskFactor = self::checkTypes($riskFactor, $types);

        $this->riskFactor = $riskFactor;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\EventStatusType|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\EventStatusType|\OpenActive\Models\SchemaOrg\MedicalStudyStatus|string|null $status
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatus($status)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\EventStatusType",
            "\OpenActive\Models\SchemaOrg\MedicalStudyStatus",
            "string",
            "null",
        ];

        $status = self::checkTypes($status, $types);

        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    /**
     * @param string $pathophysiology
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPathophysiology($pathophysiology)
    {
        $types = [
            "string",
        ];

        $pathophysiology = self::checkTypes($pathophysiology, $types);

        $this->pathophysiology = $pathophysiology;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTest|string
     */
    public function getTypicalTest()
    {
        return $this->typicalTest;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTest|string $typicalTest
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypicalTest($typicalTest)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTest",
            "string",
        ];

        $typicalTest = self::checkTypes($typicalTest, $types);

        $this->typicalTest = $typicalTest;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DDxElement|string
     */
    public function getDifferentialDiagnosis()
    {
        return $this->differentialDiagnosis;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DDxElement|string $differentialDiagnosis
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDifferentialDiagnosis($differentialDiagnosis)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DDxElement",
            "string",
        ];

        $differentialDiagnosis = self::checkTypes($differentialDiagnosis, $types);

        $this->differentialDiagnosis = $differentialDiagnosis;
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
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\SuperficialAnatomy|\OpenActive\Models\SchemaOrg\AnatomicalSystem|string
     */
    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\SuperficialAnatomy|\OpenActive\Models\SchemaOrg\AnatomicalSystem|string $associatedAnatomy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedAnatomy($associatedAnatomy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "\OpenActive\Models\SchemaOrg\SuperficialAnatomy",
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
            "string",
        ];

        $associatedAnatomy = self::checkTypes($associatedAnatomy, $types);

        $this->associatedAnatomy = $associatedAnatomy;
    }

    /**
     * @return string
     */
    public function getPossibleComplication()
    {
        return $this->possibleComplication;
    }

    /**
     * @param string $possibleComplication
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPossibleComplication($possibleComplication)
    {
        $types = [
            "string",
        ];

        $possibleComplication = self::checkTypes($possibleComplication, $types);

        $this->possibleComplication = $possibleComplication;
    }

    /**
     * @return string
     */
    public function getExpectedPrognosis()
    {
        return $this->expectedPrognosis;
    }

    /**
     * @param string $expectedPrognosis
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpectedPrognosis($expectedPrognosis)
    {
        $types = [
            "string",
        ];

        $expectedPrognosis = self::checkTypes($expectedPrognosis, $types);

        $this->expectedPrognosis = $expectedPrognosis;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalConditionStage|string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalConditionStage|string $stage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStage($stage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalConditionStage",
            "string",
        ];

        $stage = self::checkTypes($stage, $types);

        $this->stage = $stage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    public function getPrimaryPrevention()
    {
        return $this->primaryPrevention;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTherapy|string $primaryPrevention
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrimaryPrevention($primaryPrevention)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "string",
        ];

        $primaryPrevention = self::checkTypes($primaryPrevention, $types);

        $this->primaryPrevention = $primaryPrevention;
    }

}
