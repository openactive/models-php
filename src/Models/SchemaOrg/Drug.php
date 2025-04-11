<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Drug extends \OpenActive\Models\SchemaOrg\Substance
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Drug";
    }

    public static function fieldList() {
        $fields = [
            "doseSchedule" => "doseSchedule",
            "pregnancyWarning" => "pregnancyWarning",
            "drugClass" => "drugClass",
            "legalStatus" => "legalStatus",
            "clinicalPharmacology" => "clinicalPharmacology",
            "dosageForm" => "dosageForm",
            "isAvailableGenerically" => "isAvailableGenerically",
            "prescriptionStatus" => "prescriptionStatus",
            "breastfeedingWarning" => "breastfeedingWarning",
            "alcoholWarning" => "alcoholWarning",
            "relatedDrug" => "relatedDrug",
            "mechanismOfAction" => "mechanismOfAction",
            "isProprietary" => "isProprietary",
            "interactingDrug" => "interactingDrug",
            "clincalPharmacology" => "clincalPharmacology",
            "overdosage" => "overdosage",
            "foodWarning" => "foodWarning",
            "pregnancyCategory" => "pregnancyCategory",
            "availableStrength" => "availableStrength",
            "warning" => "warning",
            "administrationRoute" => "administrationRoute",
            "proprietaryName" => "proprietaryName",
            "prescribingInfo" => "prescribingInfo",
            "maximumIntake" => "maximumIntake",
            "nonProprietaryName" => "nonProprietaryName",
            "drugUnit" => "drugUnit",
            "activeIngredient" => "activeIngredient",
            "labelDetails" => "labelDetails",
            "rxcui" => "rxcui",
            "includedInHealthInsurancePlan" => "includedInHealthInsurancePlan",
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
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     *
     *
     * @var string
     */
    protected $pregnancyWarning;

    /**
     * The class of drug this belongs to (e.g., statins).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DrugClass|string
     */
    protected $drugClass;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DrugLegalStatus|\OpenActive\Enums\SchemaOrg\MedicalEnumeration|string|null
     */
    protected $legalStatus;

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     *
     *
     * @var string
     */
    protected $clinicalPharmacology;

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     *
     *
     * @var string
     */
    protected $dosageForm;

    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     *
     * @var bool|null
     */
    protected $isAvailableGenerically;

    /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DrugPrescriptionStatus|string
     */
    protected $prescriptionStatus;

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     *
     *
     * @var string
     */
    protected $breastfeedingWarning;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     *
     *
     * @var string
     */
    protected $alcoholWarning;

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug|string
     */
    protected $relatedDrug;

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     *
     *
     * @var string
     */
    protected $mechanismOfAction;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     *
     * @var bool|null
     */
    protected $isProprietary;

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Drug|string
     */
    protected $interactingDrug;

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     *
     *
     * @var string
     */
    protected $clincalPharmacology;

    /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     *
     *
     * @var string
     */
    protected $overdosage;

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     *
     *
     * @var string
     */
    protected $foodWarning;

    /**
     * Pregnancy category of this drug.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DrugPregnancyCategory|string
     */
    protected $pregnancyCategory;

    /**
     * An available dosage strength for the drug.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DrugStrength|string
     */
    protected $availableStrength;

    /**
     * Any FDA or other warnings about the drug (text or URL).
     *
     *
     * @var string
     */
    protected $warning;

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     *
     * @var string
     */
    protected $administrationRoute;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     *
     * @var string
     */
    protected $proprietaryName;

    /**
     * Link to prescribing information for the drug.
     *
     *
     * @var string
     */
    protected $prescribingInfo;

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MaximumDoseSchedule|string
     */
    protected $maximumIntake;

    /**
     * The generic name of this drug or supplement.
     *
     *
     * @var string
     */
    protected $nonProprietaryName;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     *
     * @var string
     */
    protected $drugUnit;

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     *
     * @var string
     */
    protected $activeIngredient;

    /**
     * Link to the drug's label details.
     *
     *
     * @var string
     */
    protected $labelDetails;

    /**
     * The RxCUI drug identifier from RXNORM.
     *
     *
     * @var string
     */
    protected $rxcui;

    /**
     * The insurance plans that cover this drug.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HealthInsurancePlan|string
     */
    protected $includedInHealthInsurancePlan;

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
     * @return string
     */
    public function getPregnancyWarning()
    {
        return $this->pregnancyWarning;
    }

    /**
     * @param string $pregnancyWarning
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPregnancyWarning($pregnancyWarning)
    {
        $types = [
            "string",
        ];

        $pregnancyWarning = self::checkTypes($pregnancyWarning, $types);

        $this->pregnancyWarning = $pregnancyWarning;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DrugClass|string
     */
    public function getDrugClass()
    {
        return $this->drugClass;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DrugClass|string $drugClass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrugClass($drugClass)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DrugClass",
            "string",
        ];

        $drugClass = self::checkTypes($drugClass, $types);

        $this->drugClass = $drugClass;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DrugLegalStatus|\OpenActive\Enums\SchemaOrg\MedicalEnumeration|string|null
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DrugLegalStatus|\OpenActive\Enums\SchemaOrg\MedicalEnumeration|string|null $legalStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegalStatus($legalStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DrugLegalStatus",
            "\OpenActive\Enums\SchemaOrg\MedicalEnumeration",
            "string",
            "null",
        ];

        $legalStatus = self::checkTypes($legalStatus, $types);

        $this->legalStatus = $legalStatus;
    }

    /**
     * @return string
     */
    public function getClinicalPharmacology()
    {
        return $this->clinicalPharmacology;
    }

    /**
     * @param string $clinicalPharmacology
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setClinicalPharmacology($clinicalPharmacology)
    {
        $types = [
            "string",
        ];

        $clinicalPharmacology = self::checkTypes($clinicalPharmacology, $types);

        $this->clinicalPharmacology = $clinicalPharmacology;
    }

    /**
     * @return string
     */
    public function getDosageForm()
    {
        return $this->dosageForm;
    }

    /**
     * @param string $dosageForm
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDosageForm($dosageForm)
    {
        $types = [
            "string",
        ];

        $dosageForm = self::checkTypes($dosageForm, $types);

        $this->dosageForm = $dosageForm;
    }

    /**
     * @return bool|null
     */
    public function getIsAvailableGenerically()
    {
        return $this->isAvailableGenerically;
    }

    /**
     * @param bool|null $isAvailableGenerically
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAvailableGenerically($isAvailableGenerically)
    {
        $types = [
            "bool",
            "null",
        ];

        $isAvailableGenerically = self::checkTypes($isAvailableGenerically, $types);

        $this->isAvailableGenerically = $isAvailableGenerically;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DrugPrescriptionStatus|string
     */
    public function getPrescriptionStatus()
    {
        return $this->prescriptionStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DrugPrescriptionStatus|string $prescriptionStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrescriptionStatus($prescriptionStatus)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DrugPrescriptionStatus",
            "string",
        ];

        $prescriptionStatus = self::checkTypes($prescriptionStatus, $types);

        $this->prescriptionStatus = $prescriptionStatus;
    }

    /**
     * @return string
     */
    public function getBreastfeedingWarning()
    {
        return $this->breastfeedingWarning;
    }

    /**
     * @param string $breastfeedingWarning
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBreastfeedingWarning($breastfeedingWarning)
    {
        $types = [
            "string",
        ];

        $breastfeedingWarning = self::checkTypes($breastfeedingWarning, $types);

        $this->breastfeedingWarning = $breastfeedingWarning;
    }

    /**
     * @return string
     */
    public function getAlcoholWarning()
    {
        return $this->alcoholWarning;
    }

    /**
     * @param string $alcoholWarning
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlcoholWarning($alcoholWarning)
    {
        $types = [
            "string",
        ];

        $alcoholWarning = self::checkTypes($alcoholWarning, $types);

        $this->alcoholWarning = $alcoholWarning;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug|string
     */
    public function getRelatedDrug()
    {
        return $this->relatedDrug;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug|string $relatedDrug
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedDrug($relatedDrug)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
            "string",
        ];

        $relatedDrug = self::checkTypes($relatedDrug, $types);

        $this->relatedDrug = $relatedDrug;
    }

    /**
     * @return string
     */
    public function getMechanismOfAction()
    {
        return $this->mechanismOfAction;
    }

    /**
     * @param string $mechanismOfAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMechanismOfAction($mechanismOfAction)
    {
        $types = [
            "string",
        ];

        $mechanismOfAction = self::checkTypes($mechanismOfAction, $types);

        $this->mechanismOfAction = $mechanismOfAction;
    }

    /**
     * @return bool|null
     */
    public function getIsProprietary()
    {
        return $this->isProprietary;
    }

    /**
     * @param bool|null $isProprietary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsProprietary($isProprietary)
    {
        $types = [
            "bool",
            "null",
        ];

        $isProprietary = self::checkTypes($isProprietary, $types);

        $this->isProprietary = $isProprietary;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Drug|string
     */
    public function getInteractingDrug()
    {
        return $this->interactingDrug;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Drug|string $interactingDrug
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractingDrug($interactingDrug)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Drug",
            "string",
        ];

        $interactingDrug = self::checkTypes($interactingDrug, $types);

        $this->interactingDrug = $interactingDrug;
    }

    /**
     * @return string
     */
    public function getClincalPharmacology()
    {
        return $this->clincalPharmacology;
    }

    /**
     * @param string $clincalPharmacology
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setClincalPharmacology($clincalPharmacology)
    {
        $types = [
            "string",
        ];

        $clincalPharmacology = self::checkTypes($clincalPharmacology, $types);

        $this->clincalPharmacology = $clincalPharmacology;
    }

    /**
     * @return string
     */
    public function getOverdosage()
    {
        return $this->overdosage;
    }

    /**
     * @param string $overdosage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOverdosage($overdosage)
    {
        $types = [
            "string",
        ];

        $overdosage = self::checkTypes($overdosage, $types);

        $this->overdosage = $overdosage;
    }

    /**
     * @return string
     */
    public function getFoodWarning()
    {
        return $this->foodWarning;
    }

    /**
     * @param string $foodWarning
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFoodWarning($foodWarning)
    {
        $types = [
            "string",
        ];

        $foodWarning = self::checkTypes($foodWarning, $types);

        $this->foodWarning = $foodWarning;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DrugPregnancyCategory|string
     */
    public function getPregnancyCategory()
    {
        return $this->pregnancyCategory;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DrugPregnancyCategory|string $pregnancyCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPregnancyCategory($pregnancyCategory)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DrugPregnancyCategory",
            "string",
        ];

        $pregnancyCategory = self::checkTypes($pregnancyCategory, $types);

        $this->pregnancyCategory = $pregnancyCategory;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DrugStrength|string
     */
    public function getAvailableStrength()
    {
        return $this->availableStrength;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DrugStrength|string $availableStrength
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAvailableStrength($availableStrength)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DrugStrength",
            "string",
        ];

        $availableStrength = self::checkTypes($availableStrength, $types);

        $this->availableStrength = $availableStrength;
    }

    /**
     * @return string
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * @param string $warning
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWarning($warning)
    {
        $types = [
            "string",
        ];

        $warning = self::checkTypes($warning, $types);

        $this->warning = $warning;
    }

    /**
     * @return string
     */
    public function getAdministrationRoute()
    {
        return $this->administrationRoute;
    }

    /**
     * @param string $administrationRoute
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdministrationRoute($administrationRoute)
    {
        $types = [
            "string",
        ];

        $administrationRoute = self::checkTypes($administrationRoute, $types);

        $this->administrationRoute = $administrationRoute;
    }

    /**
     * @return string
     */
    public function getProprietaryName()
    {
        return $this->proprietaryName;
    }

    /**
     * @param string $proprietaryName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProprietaryName($proprietaryName)
    {
        $types = [
            "string",
        ];

        $proprietaryName = self::checkTypes($proprietaryName, $types);

        $this->proprietaryName = $proprietaryName;
    }

    /**
     * @return string
     */
    public function getPrescribingInfo()
    {
        return $this->prescribingInfo;
    }

    /**
     * @param string $prescribingInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrescribingInfo($prescribingInfo)
    {
        $types = [
            "string",
        ];

        $prescribingInfo = self::checkTypes($prescribingInfo, $types);

        $this->prescribingInfo = $prescribingInfo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MaximumDoseSchedule|string
     */
    public function getMaximumIntake()
    {
        return $this->maximumIntake;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MaximumDoseSchedule|string $maximumIntake
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaximumIntake($maximumIntake)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MaximumDoseSchedule",
            "string",
        ];

        $maximumIntake = self::checkTypes($maximumIntake, $types);

        $this->maximumIntake = $maximumIntake;
    }

    /**
     * @return string
     */
    public function getNonProprietaryName()
    {
        return $this->nonProprietaryName;
    }

    /**
     * @param string $nonProprietaryName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNonProprietaryName($nonProprietaryName)
    {
        $types = [
            "string",
        ];

        $nonProprietaryName = self::checkTypes($nonProprietaryName, $types);

        $this->nonProprietaryName = $nonProprietaryName;
    }

    /**
     * @return string
     */
    public function getDrugUnit()
    {
        return $this->drugUnit;
    }

    /**
     * @param string $drugUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDrugUnit($drugUnit)
    {
        $types = [
            "string",
        ];

        $drugUnit = self::checkTypes($drugUnit, $types);

        $this->drugUnit = $drugUnit;
    }

    /**
     * @return string
     */
    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    /**
     * @param string $activeIngredient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActiveIngredient($activeIngredient)
    {
        $types = [
            "string",
        ];

        $activeIngredient = self::checkTypes($activeIngredient, $types);

        $this->activeIngredient = $activeIngredient;
    }

    /**
     * @return string
     */
    public function getLabelDetails()
    {
        return $this->labelDetails;
    }

    /**
     * @param string $labelDetails
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLabelDetails($labelDetails)
    {
        $types = [
            "string",
        ];

        $labelDetails = self::checkTypes($labelDetails, $types);

        $this->labelDetails = $labelDetails;
    }

    /**
     * @return string
     */
    public function getRxcui()
    {
        return $this->rxcui;
    }

    /**
     * @param string $rxcui
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRxcui($rxcui)
    {
        $types = [
            "string",
        ];

        $rxcui = self::checkTypes($rxcui, $types);

        $this->rxcui = $rxcui;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HealthInsurancePlan|string
     */
    public function getIncludedInHealthInsurancePlan()
    {
        return $this->includedInHealthInsurancePlan;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HealthInsurancePlan|string $includedInHealthInsurancePlan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedInHealthInsurancePlan($includedInHealthInsurancePlan)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\HealthInsurancePlan",
            "string",
        ];

        $includedInHealthInsurancePlan = self::checkTypes($includedInHealthInsurancePlan, $types);

        $this->includedInHealthInsurancePlan = $includedInHealthInsurancePlan;
    }

}
