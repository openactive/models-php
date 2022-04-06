<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BioChemEntity extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BioChemEntity";
    }

    public static function fieldList() {
        $fields = [
            "funding" => "funding",
            "isEncodedByBioChemEntity" => "isEncodedByBioChemEntity",
            "isPartOfBioChemEntity" => "isPartOfBioChemEntity",
            "taxonomicRange" => "taxonomicRange",
            "isInvolvedInBiologicalProcess" => "isInvolvedInBiologicalProcess",
            "isLocatedInSubcellularLocation" => "isLocatedInSubcellularLocation",
            "associatedDisease" => "associatedDisease",
            "hasMolecularFunction" => "hasMolecularFunction",
            "hasBioChemEntityPart" => "hasBioChemEntityPart",
            "bioChemInteraction" => "bioChemInteraction",
            "hasRepresentation" => "hasRepresentation",
            "bioChemSimilarity" => "bioChemSimilarity",
            "biologicalRole" => "biologicalRole",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Grant|string
     */
    protected $funding;

    /**
     * Another BioChemEntity encoding by this one.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Gene|string
     */
    protected $isEncodedByBioChemEntity;

    /**
     * Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    protected $isPartOfBioChemEntity;

    /**
     * The taxonomic grouping of the organism that expresses, encodes, or in someway related to the BioChemEntity.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Taxon
     */
    protected $taxonomicRange;

    /**
     * Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $isInvolvedInBiologicalProcess;

    /**
     * Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $isLocatedInSubcellularLocation;

    /**
     * Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence supporting the association, please use PropertyValue.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\MedicalCondition
     */
    protected $associatedDisease;

    /**
     * Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $hasMolecularFunction;

    /**
     * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    protected $hasBioChemEntityPart;

    /**
     * A BioChemEntity that is known to interact with this item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    protected $bioChemInteraction;

    /**
     * A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PropertyValue
     */
    protected $hasRepresentation;

    /**
     * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    protected $bioChemSimilarity;

    /**
     * A role played by the BioChemEntity within a biological context.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $biologicalRole;

    /**
     * @return \OpenActive\Models\SchemaOrg\Grant|string
     */
    public function getFunding()
    {
        return $this->funding;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Grant|string $funding
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunding($funding)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Grant",
            "string",
        ];

        $funding = self::checkTypes($funding, $types);

        $this->funding = $funding;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Gene|string
     */
    public function getIsEncodedByBioChemEntity()
    {
        return $this->isEncodedByBioChemEntity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Gene|string $isEncodedByBioChemEntity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsEncodedByBioChemEntity($isEncodedByBioChemEntity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Gene",
            "string",
        ];

        $isEncodedByBioChemEntity = self::checkTypes($isEncodedByBioChemEntity, $types);

        $this->isEncodedByBioChemEntity = $isEncodedByBioChemEntity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    public function getIsPartOfBioChemEntity()
    {
        return $this->isPartOfBioChemEntity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BioChemEntity|string $isPartOfBioChemEntity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsPartOfBioChemEntity($isPartOfBioChemEntity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BioChemEntity",
            "string",
        ];

        $isPartOfBioChemEntity = self::checkTypes($isPartOfBioChemEntity, $types);

        $this->isPartOfBioChemEntity = $isPartOfBioChemEntity;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Taxon
     */
    public function getTaxonomicRange()
    {
        return $this->taxonomicRange;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Taxon $taxonomicRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTaxonomicRange($taxonomicRange)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Models\SchemaOrg\Taxon",
        ];

        $taxonomicRange = self::checkTypes($taxonomicRange, $types);

        $this->taxonomicRange = $taxonomicRange;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getIsInvolvedInBiologicalProcess()
    {
        return $this->isInvolvedInBiologicalProcess;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm $isInvolvedInBiologicalProcess
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsInvolvedInBiologicalProcess($isInvolvedInBiologicalProcess)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $isInvolvedInBiologicalProcess = self::checkTypes($isInvolvedInBiologicalProcess, $types);

        $this->isInvolvedInBiologicalProcess = $isInvolvedInBiologicalProcess;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getIsLocatedInSubcellularLocation()
    {
        return $this->isLocatedInSubcellularLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string $isLocatedInSubcellularLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsLocatedInSubcellularLocation($isLocatedInSubcellularLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $isLocatedInSubcellularLocation = self::checkTypes($isLocatedInSubcellularLocation, $types);

        $this->isLocatedInSubcellularLocation = $isLocatedInSubcellularLocation;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\MedicalCondition
     */
    public function getAssociatedDisease()
    {
        return $this->associatedDisease;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\MedicalCondition $associatedDisease
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedDisease($associatedDisease)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Models\SchemaOrg\MedicalCondition",
        ];

        $associatedDisease = self::checkTypes($associatedDisease, $types);

        $this->associatedDisease = $associatedDisease;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getHasMolecularFunction()
    {
        return $this->hasMolecularFunction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string $hasMolecularFunction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMolecularFunction($hasMolecularFunction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $hasMolecularFunction = self::checkTypes($hasMolecularFunction, $types);

        $this->hasMolecularFunction = $hasMolecularFunction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    public function getHasBioChemEntityPart()
    {
        return $this->hasBioChemEntityPart;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BioChemEntity|string $hasBioChemEntityPart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasBioChemEntityPart($hasBioChemEntityPart)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BioChemEntity",
            "string",
        ];

        $hasBioChemEntityPart = self::checkTypes($hasBioChemEntityPart, $types);

        $this->hasBioChemEntityPart = $hasBioChemEntityPart;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    public function getBioChemInteraction()
    {
        return $this->bioChemInteraction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BioChemEntity|string $bioChemInteraction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBioChemInteraction($bioChemInteraction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BioChemEntity",
            "string",
        ];

        $bioChemInteraction = self::checkTypes($bioChemInteraction, $types);

        $this->bioChemInteraction = $bioChemInteraction;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PropertyValue
     */
    public function getHasRepresentation()
    {
        return $this->hasRepresentation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PropertyValue $hasRepresentation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasRepresentation($hasRepresentation)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
        ];

        $hasRepresentation = self::checkTypes($hasRepresentation, $types);

        $this->hasRepresentation = $hasRepresentation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BioChemEntity|string
     */
    public function getBioChemSimilarity()
    {
        return $this->bioChemSimilarity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BioChemEntity|string $bioChemSimilarity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBioChemSimilarity($bioChemSimilarity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BioChemEntity",
            "string",
        ];

        $bioChemSimilarity = self::checkTypes($bioChemSimilarity, $types);

        $this->bioChemSimilarity = $bioChemSimilarity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getBiologicalRole()
    {
        return $this->biologicalRole;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $biologicalRole
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBiologicalRole($biologicalRole)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $biologicalRole = self::checkTypes($biologicalRole, $types);

        $this->biologicalRole = $biologicalRole;
    }

}
