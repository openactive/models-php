<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Joint extends \OpenActive\Models\SchemaOrg\AnatomicalStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Joint";
    }

    public static function fieldList() {
        $fields = [
            "functionalClass" => "functionalClass",
            "biomechnicalClass" => "biomechnicalClass",
            "structuralClass" => "structuralClass",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The degree of mobility the joint allows.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MedicalEntity
     */
    protected $functionalClass;

    /**
     * The biomechanical properties of the bone.
     *
     *
     * @var string
     */
    protected $biomechnicalClass;

    /**
     * The name given to how bone physically connects to each other.
     *
     *
     * @var string
     */
    protected $structuralClass;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MedicalEntity
     */
    public function getFunctionalClass()
    {
        return $this->functionalClass;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MedicalEntity $functionalClass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunctionalClass($functionalClass)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
        ];

        $functionalClass = self::checkTypes($functionalClass, $types);

        $this->functionalClass = $functionalClass;
    }

    /**
     * @return string
     */
    public function getBiomechnicalClass()
    {
        return $this->biomechnicalClass;
    }

    /**
     * @param string $biomechnicalClass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBiomechnicalClass($biomechnicalClass)
    {
        $types = [
            "string",
        ];

        $biomechnicalClass = self::checkTypes($biomechnicalClass, $types);

        $this->biomechnicalClass = $biomechnicalClass;
    }

    /**
     * @return string
     */
    public function getStructuralClass()
    {
        return $this->structuralClass;
    }

    /**
     * @param string $structuralClass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStructuralClass($structuralClass)
    {
        $types = [
            "string",
        ];

        $structuralClass = self::checkTypes($structuralClass, $types);

        $this->structuralClass = $structuralClass;
    }

}
