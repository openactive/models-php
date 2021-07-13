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
            "medicineSystem" => "medicineSystem",
            "guideline" => "guideline",
            "study" => "study",
            "relevantSpecialty" => "relevantSpecialty",
            "recognizingAuthority" => "recognizingAuthority",
            "code" => "code",
            "legalStatus" => "legalStatus",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicineSystem|string
     */
    protected $medicineSystem;

    /**
     * A medical guideline related to this entity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalGuideline|string
     */
    protected $guideline;

    /**
     * A medical study or trial related to this entity.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalStudy|string
     */
    protected $study;

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalSpecialty|string
     */
    protected $relevantSpecialty;

    /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $recognizingAuthority;

    /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCode|string
     */
    protected $code;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MedicalEnumeration|\OpenActive\Models\SchemaOrg\DrugLegalStatus|string|null
     */
    protected $legalStatus;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicineSystem|string
     */
    public function getMedicineSystem()
    {
        return $this->medicineSystem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicineSystem|string $medicineSystem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMedicineSystem($medicineSystem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicineSystem",
            "string",
        ];

        $medicineSystem = self::checkTypes($medicineSystem, $types);

        $this->medicineSystem = $medicineSystem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalGuideline|string
     */
    public function getGuideline()
    {
        return $this->guideline;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalGuideline|string $guideline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGuideline($guideline)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalGuideline",
            "string",
        ];

        $guideline = self::checkTypes($guideline, $types);

        $this->guideline = $guideline;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalStudy|string
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalStudy|string $study
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStudy($study)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalStudy",
            "string",
        ];

        $study = self::checkTypes($study, $types);

        $this->study = $study;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalSpecialty|string
     */
    public function getRelevantSpecialty()
    {
        return $this->relevantSpecialty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalSpecialty|string $relevantSpecialty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelevantSpecialty($relevantSpecialty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalSpecialty",
            "string",
        ];

        $relevantSpecialty = self::checkTypes($relevantSpecialty, $types);

        $this->relevantSpecialty = $relevantSpecialty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getRecognizingAuthority()
    {
        return $this->recognizingAuthority;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $recognizingAuthority
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecognizingAuthority($recognizingAuthority)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $recognizingAuthority = self::checkTypes($recognizingAuthority, $types);

        $this->recognizingAuthority = $recognizingAuthority;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCode|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCode|string $code
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCode($code)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCode",
            "string",
        ];

        $code = self::checkTypes($code, $types);

        $this->code = $code;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\MedicalEnumeration|\OpenActive\Models\SchemaOrg\DrugLegalStatus|string|null
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MedicalEnumeration|\OpenActive\Models\SchemaOrg\DrugLegalStatus|string|null $legalStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegalStatus($legalStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\MedicalEnumeration",
            "\OpenActive\Models\SchemaOrg\DrugLegalStatus",
            "string",
            "null",
        ];

        $legalStatus = self::checkTypes($legalStatus, $types);

        $this->legalStatus = $legalStatus;
    }

}
