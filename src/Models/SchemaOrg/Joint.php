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
            "structuralClass" => "structuralClass",
            "biomechnicalClass" => "biomechnicalClass",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The degree of mobility the joint allows.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    protected $functionalClass;

    /**
     * The name given to how bone physically connects to each other.
     *
     *
     * @var string
     */
    protected $structuralClass;

    /**
     * The biomechanical properties of the bone.
     *
     *
     * @var string
     */
    protected $biomechnicalClass;

    /**
     * @return \OpenActive\Models\SchemaOrg\MedicalEntity|string
     */
    public function getFunctionalClass()
    {
        return $this->functionalClass;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MedicalEntity|string $functionalClass
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunctionalClass($functionalClass)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MedicalEntity",
            "string",
        ];

        $functionalClass = self::checkTypes($functionalClass, $types);

        $this->functionalClass = $functionalClass;
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

}
