<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AnatomicalStructure extends \OpenActive\Models\SchemaOrg\MedicalEntity
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AnatomicalStructure";
    }

    public static function fieldList() {
        $fields = [
            "bodyLocation" => "bodyLocation",
            "connectedTo" => "connectedTo",
            "partOfSystem" => "partOfSystem",
            "relatedTherapy" => "relatedTherapy",
            "diagram" => "diagram",
            "relatedCondition" => "relatedCondition",
            "subStructure" => "subStructure",
            "associatedPathophysiology" => "associatedPathophysiology",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Location in the body of the anatomical structure.
     *
     *
     * @var string
     */
    protected $bodyLocation;

    /**
     * Other anatomical structures to which this structure is connected.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $connectedTo;

    /**
     * The anatomical or organ system that this structure is part of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalSystem|string
     */
    protected $partOfSystem;

    /**
     * A medical therapy related to this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalTherapy|string
     */
    protected $relatedTherapy;

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $diagram;

    /**
     * A medical condition associated with this anatomy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MedicalCondition|string
     */
    protected $relatedCondition;

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    protected $subStructure;

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     *
     * @var string
     */
    protected $associatedPathophysiology;

    /**
     * @return string
     */
    public function getBodyLocation()
    {
        return $this->bodyLocation;
    }

    /**
     * @param string $bodyLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBodyLocation($bodyLocation)
    {
        $types = [
            "string",
        ];

        $bodyLocation = self::checkTypes($bodyLocation, $types);

        $this->bodyLocation = $bodyLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalStructure|string
     */
    public function getConnectedTo()
    {
        return $this->connectedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|string $connectedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConnectedTo($connectedTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $connectedTo = self::checkTypes($connectedTo, $types);

        $this->connectedTo = $connectedTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AnatomicalSystem|string
     */
    public function getPartOfSystem()
    {
        return $this->partOfSystem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalSystem|string $partOfSystem
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartOfSystem($partOfSystem)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalSystem",
            "string",
        ];

        $partOfSystem = self::checkTypes($partOfSystem, $types);

        $this->partOfSystem = $partOfSystem;
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
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getDiagram()
    {
        return $this->diagram;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $diagram
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiagram($diagram)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        ];

        $diagram = self::checkTypes($diagram, $types);

        $this->diagram = $diagram;
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
    public function getSubStructure()
    {
        return $this->subStructure;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AnatomicalStructure|string $subStructure
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubStructure($subStructure)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AnatomicalStructure",
            "string",
        ];

        $subStructure = self::checkTypes($subStructure, $types);

        $this->subStructure = $subStructure;
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
