<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalEntity extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalEntity";
    }

    public static function fieldList() {
        $fields = [
            "guideline" => "guideline",
            "recognizingAuthority" => "recognizingAuthority",
            "legalStatus" => "legalStatus",
            "code" => "code",
            "relevantSpecialty" => "relevantSpecialty",
            "study" => "study",
            "medicineSystem" => "medicineSystem",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A medical guideline related to this entity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalGuideline
     */
    protected $guideline;

    /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $recognizingAuthority;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MedicalEnumeration|string|\OpenActive\Models\SchemaOrg\DrugLegalStatus|null
     */
    protected $legalStatus;

    /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCode
     */
    protected $code;

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSpecialty
     */
    protected $relevantSpecialty;

    /**
     * A medical study or trial related to this entity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalStudy
     */
    protected $study;

    /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicineSystem
     */
    protected $medicineSystem;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalGuideline
     */
    public function getGuideline()
    {
        return $this->guideline;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalGuideline $guideline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGuideline($guideline)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalGuideline",
        ];

        $guideline = self::checkTypes($guideline, $types);

        $this->guideline = $guideline;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getRecognizingAuthority()
    {
        return $this->recognizingAuthority;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $recognizingAuthority
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecognizingAuthority($recognizingAuthority)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $recognizingAuthority = self::checkTypes($recognizingAuthority, $types);

        $this->recognizingAuthority = $recognizingAuthority;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MedicalEnumeration|string|\OpenActive\Models\SchemaOrg\DrugLegalStatus|null
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MedicalEnumeration|string|\OpenActive\Models\SchemaOrg\DrugLegalStatus|null $legalStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegalStatus($legalStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MedicalEnumeration",
            "string",
            "\OpenActive\Models\SchemaOrg\DrugLegalStatus",
            "null",
        ];

        $legalStatus = self::checkTypes($legalStatus, $types);

        $this->legalStatus = $legalStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCode $code
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCode($code)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCode",
        ];

        $code = self::checkTypes($code, $types);

        $this->code = $code;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalSpecialty
     */
    public function getRelevantSpecialty()
    {
        return $this->relevantSpecialty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSpecialty $relevantSpecialty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelevantSpecialty($relevantSpecialty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSpecialty",
        ];

        $relevantSpecialty = self::checkTypes($relevantSpecialty, $types);

        $this->relevantSpecialty = $relevantSpecialty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalStudy
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalStudy $study
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStudy($study)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalStudy",
        ];

        $study = self::checkTypes($study, $types);

        $this->study = $study;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicineSystem
     */
    public function getMedicineSystem()
    {
        return $this->medicineSystem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicineSystem $medicineSystem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedicineSystem($medicineSystem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicineSystem",
        ];

        $medicineSystem = self::checkTypes($medicineSystem, $types);

        $this->medicineSystem = $medicineSystem;
    }

}
