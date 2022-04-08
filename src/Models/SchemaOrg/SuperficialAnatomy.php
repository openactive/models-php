<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SuperficialAnatomy extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SuperficialAnatomy";
    }

    public static function fieldList() {
        $fields = [
            "relatedTherapy" => "relatedTherapy",
            "significance" => "significance",
            "relatedAnatomy" => "relatedAnatomy",
            "relatedCondition" => "relatedCondition",
            "associatedPathophysiology" => "associatedPathophysiology",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A medical therapy related to this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $relatedTherapy;

    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
     *
     *
     * @var string
     */
    protected $significance;

    /**
     * Anatomical systems or structures that relate to the superficial anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $relatedAnatomy;

    /**
     * A medical condition associated with this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $relatedCondition;

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     *
     * @var string
     */
    protected $associatedPathophysiology;

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
    public function getSignificance()
    {
        return $this->significance;
    }

    /**
     * @param string $significance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSignificance($significance)
    {
        $types = [
            "string",
        ];

        $significance = self::checkTypes($significance, $types);

        $this->significance = $significance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    public function getRelatedAnatomy()
    {
        return $this->relatedAnatomy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalSystem|\OpenActive\Models\SchemaOrg\AnatomicalStructure|string $relatedAnatomy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelatedAnatomy($relatedAnatomy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $relatedAnatomy = self::checkTypes($relatedAnatomy, $types);

        $this->relatedAnatomy = $relatedAnatomy;
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
