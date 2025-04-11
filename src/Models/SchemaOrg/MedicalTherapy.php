<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalTherapy extends \OpenActive\Models\SchemaOrg\TherapeuticProcedure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalTherapy";
    }

    public static function fieldList() {
        $fields = [
            "contraindication" => "contraindication",
            "seriousAdverseOutcome" => "seriousAdverseOutcome",
            "duplicateTherapy" => "duplicateTherapy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A contraindication for this therapy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MedicalContraindication
     */
    protected $contraindication;

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $seriousAdverseOutcome;

    /**
     * A therapy that duplicates or overlaps this one.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $duplicateTherapy;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MedicalContraindication
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MedicalContraindication $contraindication
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContraindication($contraindication)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\MedicalContraindication",
        ];

        $contraindication = self::checkTypes($contraindication, $types);

        $this->contraindication = $contraindication;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    public function getSeriousAdverseOutcome()
    {
        return $this->seriousAdverseOutcome;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity|string $seriousAdverseOutcome
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeriousAdverseOutcome($seriousAdverseOutcome)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "string",
        ];

        $seriousAdverseOutcome = self::checkTypes($seriousAdverseOutcome, $types);

        $this->seriousAdverseOutcome = $seriousAdverseOutcome;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    public function getDuplicateTherapy()
    {
        return $this->duplicateTherapy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTherapy|string $duplicateTherapy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuplicateTherapy($duplicateTherapy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "string",
        ];

        $duplicateTherapy = self::checkTypes($duplicateTherapy, $types);

        $this->duplicateTherapy = $duplicateTherapy;
    }

}
