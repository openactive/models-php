<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalDevice extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalDevice";
    }

    public static function fieldList() {
        $fields = [
            "preOp" => "preOp",
            "adverseOutcome" => "adverseOutcome",
            "seriousAdverseOutcome" => "seriousAdverseOutcome",
            "procedure" => "procedure",
            "contraindication" => "contraindication",
            "postOp" => "postOp",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A description of the workup, testing, and other preparations required before implanting this device.
     *
     *
     * @var string
     */
    protected $preOp;

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    protected $adverseOutcome;

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    protected $seriousAdverseOutcome;

    /**
     * A description of the procedure involved in setting up, using, and/or installing the device.
     *
     *
     * @var string
     */
    protected $procedure;

    /**
     * A contraindication for this therapy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MedicalContraindication
     */
    protected $contraindication;

    /**
     * A description of the postoperative procedures, care, and/or followups for this device.
     *
     *
     * @var string
     */
    protected $postOp;

    /**
     * @return string
     */
    public function getPreOp()
    {
        return $this->preOp;
    }

    /**
     * @param string $preOp
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPreOp($preOp)
    {
        $types = [
            "string",
        ];

        $preOp = self::checkTypes($preOp, $types);

        $this->preOp = $preOp;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    public function getAdverseOutcome()
    {
        return $this->adverseOutcome;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity $adverseOutcome
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdverseOutcome($adverseOutcome)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
        ];

        $adverseOutcome = self::checkTypes($adverseOutcome, $types);

        $this->adverseOutcome = $adverseOutcome;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity
     */
    public function getSeriousAdverseOutcome()
    {
        return $this->seriousAdverseOutcome;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity $seriousAdverseOutcome
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeriousAdverseOutcome($seriousAdverseOutcome)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
        ];

        $seriousAdverseOutcome = self::checkTypes($seriousAdverseOutcome, $types);

        $this->seriousAdverseOutcome = $seriousAdverseOutcome;
    }

    /**
     * @return string
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * @param string $procedure
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProcedure($procedure)
    {
        $types = [
            "string",
        ];

        $procedure = self::checkTypes($procedure, $types);

        $this->procedure = $procedure;
    }

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
     * @return string
     */
    public function getPostOp()
    {
        return $this->postOp;
    }

    /**
     * @param string $postOp
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPostOp($postOp)
    {
        $types = [
            "string",
        ];

        $postOp = self::checkTypes($postOp, $types);

        $this->postOp = $postOp;
    }

}
