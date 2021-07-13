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
            "comprisedOf" => "comprisedOf",
            "relatedCondition" => "relatedCondition",
            "relatedStructure" => "relatedStructure",
            "relatedTherapy" => "relatedTherapy",
            "associatedPathophysiology" => "associatedPathophysiology",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $comprisedOf;

    /**
     * A medical condition associated with this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $relatedCondition;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $relatedStructure;

    /**
     * A medical therapy related to this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy|string
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
     * @return \OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    public function getComprisedOf()
    {
        return $this->comprisedOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string $comprisedOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComprisedOf($comprisedOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $comprisedOf = self::checkTypes($comprisedOf, $types);

        $this->comprisedOf = $comprisedOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalCondition|string $relatedCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedCondition($relatedCondition)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
            "string",
        ];

        $relatedCondition = self::checkTypes($relatedCondition, $types);

        $this->relatedCondition = $relatedCondition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    public function getRelatedStructure()
    {
        return $this->relatedStructure;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|string $relatedStructure
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedStructure($relatedStructure)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $relatedStructure = self::checkTypes($relatedStructure, $types);

        $this->relatedStructure = $relatedStructure;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalTherapy|string $relatedTherapy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedTherapy($relatedTherapy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalTherapy",
            "string",
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

}
