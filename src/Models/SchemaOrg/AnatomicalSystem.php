<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AnatomicalSystem extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AnatomicalSystem";
    }

    public static function fieldList() {
        $fields = [
            "relatedCondition" => "relatedCondition",
            "relatedTherapy" => "relatedTherapy",
            "associatedPathophysiology" => "associatedPathophysiology",
            "relatedStructure" => "relatedStructure",
            "comprisedOf" => "comprisedOf",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A medical condition associated with this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy
     */
    protected $relatedTherapy;

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     *
     * @var string
     */
    protected $associatedPathophysiology;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    protected $relatedStructure;

    /**
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem
     */
    protected $comprisedOf;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition
     */
    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition $relatedCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedCondition($relatedCondition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
        ];

        $relatedCondition = self::checkTypes($relatedCondition, $types);

        $this->relatedCondition = $relatedCondition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTherapy
     */
    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTherapy $relatedTherapy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedTherapy($relatedTherapy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
        ];

        $relatedTherapy = self::checkTypes($relatedTherapy, $types);

        $this->relatedTherapy = $relatedTherapy;
    }

    /**
     * @return string
     */
    public function getAssociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    /**
     * @param string $associatedPathophysiology
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedPathophysiology($associatedPathophysiology)
    {
        $types = [
            "string",
        ];

        $associatedPathophysiology = self::checkTypes($associatedPathophysiology, $types);

        $this->associatedPathophysiology = $associatedPathophysiology;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure
     */
    public function getRelatedStructure()
    {
        return $this->relatedStructure;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure $relatedStructure
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedStructure($relatedStructure)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
        ];

        $relatedStructure = self::checkTypes($relatedStructure, $types);

        $this->relatedStructure = $relatedStructure;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem
     */
    public function getComprisedOf()
    {
        return $this->comprisedOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|\OpenActive\Models\SchemaOrg\AnatomicalSystem $comprisedOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComprisedOf($comprisedOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
        ];

        $comprisedOf = self::checkTypes($comprisedOf, $types);

        $this->comprisedOf = $comprisedOf;
    }

}
